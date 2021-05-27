<?php

$file=fopen("table.txt","w");
$str="";
for($i=2;$i<=20;$i++){
    for($j=1;$j<=9;$j++)
    {
        $str.= "{$i}*{$j}=" . $i*$j . "\n";
        if($j%9==0)$str.= "\n";
    }
}

fwrite($file,$str);