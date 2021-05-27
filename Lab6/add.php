
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
    <form action="add.php" method="POST">
        <input type="text" value="" required placeholder="Название Книги" name=name>
        <input type="text" value="" required placeholder="Автор" name=author>
        <input type="text" value="" required placeholder="Издательство" name=public>
        <input type="text" value="" required placeholder="Год Издания" name=year>
        <input type="text" value="" required placeholder="Жанр" name=genre>
        <input type="text" value="" required placeholder="Язык" name=lang>
        <button type=submit name=sub>Add</button>
    </form>
</body>
<?php

function add(){
    
    $name=$_POST["name"];
    $author=$_POST["author"];
    $public=$_POST["public"];
    $year=$_POST["year"];
    $genre=$_POST["genre"];
    $lang=$_POST["lang"];

    $str="";

    $str.=$name.",".$author.",".$public.",".$year.",".$genre.",".$lang. "\n";
    $file=fopen("info.txt","a");
    fwrite($file, $str);
    fclose($file);
    echo $str;  
}

if( isset( $_POST['sub'] ) )
    {
        add();
    }
?>
</html>


