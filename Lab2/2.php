<?php
for($i=2;$i<=9;$i++)
{
    for($j=1;$j<=9;$j++)
    {
        $res=$i*$j;
        echo "<span>{$i}*{$j}={$res}<br></span>";
        if($j%9==0){
            echo "<br>";
        }
        
    }
}
?>