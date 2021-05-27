<style>
    table{
        border:2px solid black;
        width:400px;
        height:300px;
        font-family:Tahoma;
    }
    th{
        border:1px solid black;
        font-weight:100;
    }
</style>

<?php

echo "<table cellspacing=0>";
$temp=-4;
for($i=0;$i<5;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++)
    {
        $temp++;
        if($i==0 && $j<4)echo "<th></th>";
        else if($j>=5)echo "<th style='color:red;'>{$temp}</th>";
        else echo "<th>{$temp}</th>";
    }
    echo "</tr>";
}

echo "</table>";
?>

