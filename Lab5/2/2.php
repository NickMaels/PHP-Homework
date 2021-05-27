<?php

$file=fopen("file2.txt",'w');

$txt1="";
$count=0;

    for($i=ord('a');$i<=ord('z');$i++){
        for($j=0;$j<10;$j++){
            $txt1.=chr($i)."";
        }
        $txt1.="\n";
    }


fwrite($file, strtoupper($txt1));
fclose($file);