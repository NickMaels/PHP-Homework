<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        background: url(css/bg4.jpg) no-repeat top center;
        background-size: cover;
        padding-top: 2%;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }   
        div {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-sizing: border-box;
        color: black;
        width: 350px;
        height: 100px;
        padding: 30px;
        padding-top:10px;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        background: transparent;
        margin:0 auto;
        }
        .form{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        box-sizing: border-box;
        color: black;
        width: 350px;
        height: 230px;
        padding: 30px;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        background: transparent;
        margin:0 auto;
        }
    input[type="number"],
        [type="text"],
        [type="email"],[type=date] {
        color: black;
        margin-left: 28px;
        border: 1.5px solid #000000;
        padding: 5px;
        font-size: 24px;
        outline: none;
        width: 210px;
        height: 20px;
        padding-left: 15px;
        background: transparent;
}
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
button {
    font-size: 20px;
    width: 210px;
    height: 30px;
    outline: none;
    border: 1.5px solid black;
    background-color: #83acf1;
    background: transparent;
    cursor: pointer;
    margin-left: 38px;
}

button:hover {
    box-shadow: 0 0 4px rgba(0, 0, 0, 0.8);
}
    .enter:focus {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.8);
}
button:active {
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.8);
}
.out{
    position:absolute;
    margin-left:85%;
}
div.inf{
    font-size:17px;
    width: 350px;
    height: 45px;
}
.welcome{
    position:absolute;
    margin-top:-23.4%
}
    </style>
</head>
<form action="#" method=post>
<button type=submit name=btn class=out>Выйти</button>
</form>
<body>
    <form action="#" method=post class=form>
    <input type="text" name=login class=enter placeholder="Логин">
    <input type="text" name=pass class=enter placeholder="Пароль">
    <input type="email" name=mail class=enter placeholder="Почта">
    <button type=submit name=changebtn>Изменить</button>
    </form>
<br>
    <div>
    <form action="#" method=post>
    <form action="#" method=post>
    <input type="date" name="birth" id=""><br><br>
    <button type=submit name=adddate>Добавить дату</button>
    </form>
    </form>
    </div>
    
</body>
</html>

<?php
//Время на сайте
session_start();
if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = time();
}
$time=time()-$_SESSION['time'];
echo "<br><br><div class=inf>Последний заход:{$time} секунд назад</div> <br>";

//Количество заходов

$user_name=$_SESSION['login'];
if(isset($_COOKIE[$user_name]) && $_COOKIE[$user_name]==null){
    $_COOKIE[$user_name]=0;
    setcookie($user_name, $_COOKIE[$user_name]); 
}else{
    echo "<h3 class=welcome>Добро пожаловать, {$user_name}!</h3> <br>";
        $_COOKIE[$user_name]++;
        setcookie($user_name, $_COOKIE[$user_name]);
        echo '<div class=inf>Вы посетили эту страницу '.$_COOKIE[$user_name].' раз </div> <br><br>';
      
}


//Дата

if(isset($_COOKIE[$user_name."Date"])){
    $birthday = $_COOKIE[$user_name."Date"];

    $bd = explode('-', $birthday);
    $bd = mktime(0, 0, 0, $bd[1], $bd[2], date('Y') + ($bd[1].$bd[2] <= date('md')));
    $days_until = ceil(($bd - time()) / 86400);
    
    if($days_until==365)echo "<div class=inf>С днем рождения!</div><br>";
    else echo "<div class=inf>До дня рождения {$days_until} дней.</div>";
}else {
    echo  "<div class=inf>Введите дату</div>";
}

//Изменение
function changeInfo(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $datebase="userinfo";
    
    $mysqli = new mysqli($servername, $username, $password, $datebase);
    if ($mysqli->connect_errno) {
        echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

        $login=$_POST['login'];
        $pass=$_POST['pass'];
        $mail=$_POST['mail'];

        $sql="UPDATE u_login SET u_login = ?, u_password = ?, u_mail = ? WHERE u_login = ?";
        $stmt=$mysqli->prepare($sql);
        $stmt->bind_param("ssss", $login, $pass, $mail, $_SESSION['login']);
        $stmt->execute();
        $_SESSION['login'] = $login;
}
if( isset( $_POST['changebtn'] ) )
    {
        changeInfo();
    }  

function addDate(){
    $user_name=$_SESSION['login'];
    setcookie($user_name."Date",$_POST['birth']);
}
if( isset( $_POST['adddate'] ) )
    {
        addDate();
    }   

function logout(){
    session_unset();
    session_destroy();
    unset($_SESSION['time']);
    setcookie($user_name);
    header("Location:index.html");
}
if( isset( $_POST['btn'] ) )
    {
        logout();
    }   