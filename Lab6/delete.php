<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="delete.php" method="POST" class=form>
        <input type="text" value="" required placeholder="Название Книги" name=name>
        <input type="text" value="" required placeholder="Автор" name=author>
        <button type=submit name=sub>Delete</button>
    </form>
</body>
</html>

<?php

function delete(){
    $name=$_POST["name"];
    $author=$_POST["author"];
    
    $file=file("info.txt");
    $str="";
    $boolean=false ;
    foreach ($file as $temp) {
        $value = explode(",", $temp);
        if (strtolower($value[0]) != strtolower($_POST["name"]) || strtolower($value[1]) != strtolower($_POST["author"])) {
            $str.= $temp;$boolean=false;
        }
        else $boolean=true;  
    }
    
    if($boolean==false)echo '<script>alert("Такой книги нет или она была удалена!");</script>';

    $file = fopen('info.txt', 'w');
    fwrite($file, $str);
}


if( isset( $_POST['sub'] ) )
    {
        delete();
    }
