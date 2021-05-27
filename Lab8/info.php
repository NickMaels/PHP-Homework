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
        table{
    position: absolute;
    font-size:18px;
    width:600px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.7);
    border:0px solid black;
    border-radius: 10px;
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    transform: translate(-50%, -50%);
    
}
td{
        border:1px solid black;
    }
    th{
        border:1px solid black;
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
$datebase="library";

$mysqli = new mysqli($servername, $username, $password, $datebase);
if ($mysqli->connect_errno) {
    echo "No connection: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$sql="SELECT publishing, avg(prise) AS newPrice FROM elib GROUP BY publishing";
$stmt=$mysqli->prepare($sql);
$stmt->execute();

$info=$stmt->get_result();

if($info->num_rows>0){
    echo "<table cellspacing=0 cellpadding=0> ";
    echo "<tr>";
    echo "<th>Издание</th>";
    echo "<th>Средняя цена</th>";
    echo "</tr>";
    while($row=$info->fetch_assoc()){
        for($i=0;$i<1;$i++){
            echo "<tr>";
                for($j=0;$j<1;$j++){
                    echo "<td>". $row['publishing'] ."</td>";
                    echo "<td>". $row['newPrice'] ."</td>";
                    }
                echo "</tr>";
                    }
    }
}else echo"<script>alert('Информации о изданиях нет!!!')</script>";