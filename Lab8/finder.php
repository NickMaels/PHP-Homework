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
img {
  width:100px;
  height:150px;
}
table{
    font-size:13px;
    width:600px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.7);
    border:0px solid black;
    border-radius: 10px;
    
    
}
td{
        border:1px solid black;
    }
    th{
        border:1px solid black;
    }

    .form_two {
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
    height: 300px;
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
    <form action="finder.php" method="POST" class=form_two>
        <input type="text" placeholder=Название required name=title>
        <input type="text" placeholder=Автор required name=author>
        <input type="number" placeholder=Цена required name=price>
        <input type="submit" value=Найти name=btn>
    </form>
</body>
</html>

<?php

function Find(){
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
    $price=$_POST['price'];

    $sql="SELECT *FROM elib WHERE title=? and author=? and prise<?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param("ssi",$title,$author,$price);
    $stmt->execute();
    


    $info=$stmt->get_result();
    
    $counter=1;
    if($info->num_rows>0){
        echo "<table cellspacing=0 cellpadding=0> ";
        echo "<tr>";
        echo "<th>Название</th>";
        echo "<th>Автор</th>";
        echo "<th>Год издания</th>";
        echo "<th>Издательство</th>";
        echo "<th>Описание</th>";
        echo "<th>Цена</th>";
        echo "<th>Фото</th>";
        echo "</tr>";
        while($row=$info->fetch_assoc()){        
            for($i=0;$i<$counter;$i++){
                echo "<tr>";
                    for($j=0;$j<$counter;$j++){
                        echo "<td>". $row['title'] ."</td>";
                        echo "<td>". $row['author'] ."</td>";
                        echo "<td>". $row['year'] ."</td>";
                        echo "<td>". $row['publishing'] ."</td>";
                        echo "<td>". $row['subjects'] ."</td>";
                        echo "<td>". $row['prise'] ."</td>";
                        echo "<td><img src='img/{$row['photo']}'/></td>";
                        }
                    echo "</tr>";
                        }
        }
    }else echo"<script>alert('Такой Книги Нет!!!')</script>";
}
if( isset( $_POST['btn'] ) )
{
    Find();
}   
