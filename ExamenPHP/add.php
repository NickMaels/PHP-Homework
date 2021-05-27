<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Tahoma;
    padding-top: 6%;
    background: url(bg.jpg) no-repeat top center;
    background-size: cover;
}
        form {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    transform: translate(-50%, -50%);
    color: black;
    width: 310px;
    height: 400px;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.7);
}
input[type=text] {
    width: 240px;
    height: 32px;
    border-radius: 5px;
    border: 1px solid #111111;
    font-size: 15px;
    color: #555555;
    outline: 0;
    outline-offset: 0;
    padding-left: 4px;
}

input[type=email] {
    width: 240px;
    height: 32px;
    border-radius: 5px;
    border: 1px solid #111111;
    font-size: 15px;
    color: #555555;
    outline: 0;
    outline-offset: 0;
    padding-left: 4px;
}

input[type=text]:focus {
    border: 2px solid black;
}
input[type=number],
[type=date] {
    width: 240px;
    height: 32px;
    border-radius: 5px;
    border: 1px solid #111111;
    font-size: 15px;
    color: #555555;
    outline: 0;
    outline-offset: 0;
    padding-left: 4px;
}

input[type=number]:focus {
    border: 2px solid black;
}

input[type=date]:focus {
    border: 2px solid black;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=file] {
    font-size: 14px;
    display: none;
}

.boxupload {
    width: 23%;
    border: 1px solid #111111;
    border-radius: 5px;
    background: #ffffff;
    color: #555555;
    padding: 6px 12px;
    cursor: pointer;
    margin-left: 56px;
}

.boxupload:hover {
    background: #d6d6d6;
}

.boxupload:active {
    background: #ffffff;
}

input[type=submit] {
    width: 250px;
    height: 32px;
    border-radius: 5px;
    border: 1px solid #111111;
    font-size: 15px;
    color: #555555;
    outline: 0;
    outline-offset: 0;
    padding-left: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background: #d6d6d6;
}

input[type=submit]:active {
    background: #ffffff;
}
    </style>
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Имя и Фамилия" required name=name>
    <input type="date" placeholder="Дата Рождения" required name=birth>
    <input type="number" placeholder="Номер телефона" required name=phone>
    <input type="email" placeholder="Почта" required name=mail>
    <input type="text" placeholder="Должность" required name=position>
    <input type="text" placeholder="Отдел" required name=dep>

    <label for="file-upload" class="custom-file-upload">
	<span class=boxupload>
	<i class="fa fa-cloud-upload"></i> Выбрать фото
	</label>
	</span>
    <input id="file-upload" tabindex="9" name="file" type="file"/>
    <input type="submit" value="Добавить" name=btn>
    </form>
</body>
</html>

<?php
function Insert(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $datebase="employees";
    
    $mysqli = new mysqli($servername, $username, $password, $datebase);
    if ($mysqli->connect_errno) {
        echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    
    $name=$_POST['name'];
    $birth=$_POST['birth'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $position=$_POST['position'];
    $dep=$_POST['dep'];
    $file=$_FILES['file']['name'];

    $sql="INSERT INTO members(name, birth, phone_number, email, position, dep, photo) VALUE(?,?,?,?,?,?,?)";
    $stmt=$mysqli->prepare($sql);

    $stmt->bind_param("ssissss", $name, $birth, $phone, $mail, $position, $dep, $file);
    $stmt->execute();

    move_uploaded_file($_FILES['file']['tmp_name'], './img/'. $_FILES['file']['name']);
  
}
if( isset( $_POST['btn'] ) )
{
    Insert();
}   