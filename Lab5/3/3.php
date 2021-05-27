<?php


$file=fopen("read.txt",'r');
$file2=fopen('output.txt',"w");
$str=file_get_contents("read.txt");
$str=str_replace('c','a', $str);
fwrite($file2, $str);
fclose($file);
fclose($file2);
