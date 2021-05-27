<style>
body {
    background: url(bg.jpg) no-repeat top center;
    background-size: cover;
    padding-top: 6%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
    table{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: absolute;
    top: 50%;
    left: 50%;
    box-sizing: border-box;
    transform: translate(-50%, -50%);
    color: black;
    border:0px solid black;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    background: rgba(255, 255, 255, 0.7);
    }
    td{
        border:1px solid black;
    }
    th{
        border:1px solid black;
    }
</style>

<?php
$file=fopen("info.txt",'r');
$arr=array();
$i=0;
while (($line = fgets($file)) !== false){
    $arr[$i] = explode(",",$line);
    $i++;
}
echo "<table border=0 cellspacing=0>";
echo "<tr>";
echo "<th>Название</th>";
echo "<th>Автор</th>";
echo "<th>Издательство</th>";
echo "<th>Год издания</th>";
echo "<th>Жанр</th>";
echo "<th>Язык</th>";
echo "</tr>";
for($i=0;$i<count($arr);$i++){
    echo "<tr>";
    for($j=0;$j<6;$j++){
        echo "<td>". $arr[$i][$j] ."</td>";
    }
    echo "</tr>";
}