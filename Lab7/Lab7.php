<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width:200px;
            height:44px;
            padding:35px;
            background:#7f7f7f;
            border-radius: 8px;
            border:1px solid #666666;
            box-shadow: 0 0 30px rgb(102, 102, 102);
            margin:auto;
        }
        button{
            width:50px;
            height:30px;
            cursor: pointer;
        }
        img{
            position:absolute;
            margin-top:-65px;
            margin-left:150px;
        }
        input[type=date]{
            outline: 0;
            outline-offset: 0;
            cursor: pointer;
        }
        input[type=date]:focus{
            border:2px solid black;
        }
        .info{
            margin:auto;    
        }
    </style>
</head>
<body>
    <div>
    <form action="Lab7.php" method=POST>
    <label for="date">Date:</label>
    <input type="date" id=date_m name=date><br><br>
    <button type=submit name=btn>Click</button>
    </div>
    </form>
    <br>
</body>
</html>


<?php

function click(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $datebase="lab6";

    $conn = new mysqli($servername, $username, $password, $datebase);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully \n<br>";

$date=$_POST["date"];
$sql="SELECT temperature,wind,m_date,picture From weather where m_date='{$date}'";
$result = $conn->query($sql);
$img=1;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo  "<div>Date:" . $row["m_date"] ."<br>". "Temperature: " . $row["temperature"] ."<br>". " Wind: " . $row["wind"]. "<br><img src={$row["picture"]}.png width=64px height=64px></div><br> ";
  }
} else {
  echo '<script>alert("Нет погоды на эту дату")</script>';
}
$conn->close();

}
if( isset( $_POST['btn'] ) )
{
    click();
} 
?> 
