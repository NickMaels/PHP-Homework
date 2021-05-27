<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Название Книги" required name=title>
    <input type="text" placeholder="Автор Книги" required name=author>
    <input type="number" placeholder="Год выхода" required name=year>
    <input type="text" placeholder="Издательство" required name=pub>
    <textarea name="textarea" id="" cols="30" rows="10" placeholder="Описание..."></textarea>
    <input type="number" placeholder="Цена" required name=price>

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
    $datebase="library";
    
    $mysqli = new mysqli($servername, $username, $password, $datebase);
    if ($mysqli->connect_errno) {
        echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    
    $title=$_POST['title'];
    $author=$_POST['author'];
    $year=$_POST['year'];
    $pub=$_POST['pub'];
    $textarea=$_POST['textarea'];
    $price=$_POST['price'];
    $file=$_FILES['file']['name'];

    $sql="INSERT INTO elib(title, author, year, publishing, subjects, prise, photo) VALUE(?,?,?,?,?,?,?)";
    $stmt=$mysqli->prepare($sql);

    $stmt->bind_param("ssissis", $title, $author, $year, $pub, $textarea, $price, $file);
    $stmt->execute();

    move_uploaded_file($_FILES['file']['tmp_name'], './img/'. $_FILES['file']['name']);
  
}
if( isset( $_POST['btn'] ) )
{
    Insert();
}   