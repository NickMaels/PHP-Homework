<?php
echo $_SESSION['login'];
function LogIn()
{
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

        $sql="SELECT *FROM u_login WHERE u_login = ? and u_password = ?";
        $stmt=$mysqli->prepare($sql);
        $stmt->bind_param("ss", $login, $pass);
        $stmt->execute();

        $info=$stmt->get_result();

        if($info->num_rows>0){
            session_start();
            header('Location:main.php');
            $_SESSION['login']=$login;
            if($_COOKIE[$login]!=0)setcookie($login,$_COOKIE[$login]- 1);
        }
            else {
                echo"<script>alert('Такого пользователя нет!!!')</script>"; 
                header("Location:index.html");   
            }
        
}
if( isset( $_POST['btn'] ) )
{
    LogIn();
}   