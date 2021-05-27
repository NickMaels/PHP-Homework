<?php
function Singup()
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
        $mail=$_POST['mail'];

        $sql="INSERT INTO u_login(u_login, u_password, u_mail) VALUE(?,?,?)";
        $stmt=$mysqli->prepare($sql);

        $stmt->bind_param("sss", $login, $pass, $mail);
        $stmt->execute();
        header('Location: index.html');
}
if( isset( $_POST['btn'] ) )
{
    Singup();
}   