<style>
    table{
        border:2px solid black;
        width:600px;
        height:600px;
        font-family:Tahoma;
    }
    td{
        border:1px solid black;
        font-weight:100;
    }
    th{
        border:1px solid black;
        font-weight:100;
    }
</style>


<?php
echo "<table cellspacing=0>";
$temp=0;
$k=8;
for($i=0;$i<=8;$i++)
{
    echo "<tr>";
    for($j=0;$j<=8;$j++)
    {
        $temp++;
        if($temp%2==0) echo "<td bgcolor=#b48866></td>";
        else echo "<td bgcolor=#efd9b7></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>