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
    height: 150px;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.7);
    }
    table{
    font-size:13px;
    width:750px;
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
    img {
    width:110px;
    height:150px;
    }
    select
{
	width:250px;
	height:35px;
	border-radius:5px;
	border:1px solid #111111;
	font-size:15px;
	color:#555555;
	outline: 0;
    outline-offset: 0;
	cursor: pointer;
	
}
select:focus
{
	border:2px solid black;
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
 
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$datebase="employees";

$mysqli = new mysqli($servername, $username, $password, $datebase);
    if ($mysqli->connect_errno) {
        echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

echo "<form action='search.php' method='POST' class=form_two>";
echo "<select name=dep>";

$sql="SELECT DISTINCT dep FROM members";
    $stmt=$mysqli->prepare($sql);
    $stmt->execute();

    $info=$stmt->get_result();

    if($info->num_rows>0){
        while($row=$info->fetch_assoc()){
            echo "<option>" .$row['dep']. "</option>";
        }
    }
    echo "</select>";
    echo "<input type='submit' value=Найти name=btn>";
    echo "</form>";
function Find(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $datebase="employees";
    
    $mysqli = new mysqli($servername, $username, $password, $datebase);
    if ($mysqli->connect_errno) {
        echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    

    $dep=$_POST['dep'];


    $sql="SELECT *FROM members WHERE dep=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param("s",$dep);
    $stmt->execute();
    


    $info=$stmt->get_result();
    
    $counter=1;
    if($info->num_rows>0){
        echo "<table cellspacing=0 cellpadding=0> ";
        echo "<tr>";
        echo "<th>Имя и Фамилия</th>";
        echo "<th>Дата Рождение</th>";
        echo "<th>Почта</th>";
        echo "<th>Должность</th>";
        echo "<th>Отдел</th>";
        echo "<th>Фото</th>";
        echo "</tr>";
        while($row=$info->fetch_assoc()){        
            for($i=0;$i<$counter;$i++){
                echo "<tr>";
                    for($j=0;$j<$counter;$j++){
                        echo "<td>". $row['name'] ."</td>";
                        echo "<td>". $row['birth'] ."</td>";
                        echo "<td>". $row['email'] ."</td>";
                        echo "<td>". $row['position'] ."</td>";
                        echo "<td>". $row['dep'] ."</td>";
                        echo "<td><img src='img/{$row['photo']}'/></td>";
                        }
                    echo "</tr>";
                        }
        }
    }else echo"<script>alert('Нет сотрудников!!!')</script>";
}
if( isset( $_POST['btn'] ) )
{
    Find();
}   
