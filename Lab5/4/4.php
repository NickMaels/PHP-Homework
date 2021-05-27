<?php

$file=fopen("read.txt",'r');

$temp=255;

while (($line = fgets($file)) !== false){
    if(strlen($line)<$temp)$temp=strlen($line);
}
fclose($file);
$file=fopen("read.txt",'r');
echo "Все строки наименьшей длины:<br>";
while (($line = fgets($file)) !== false){   
    if(strlen($line)==$temp)echo $line . "<br>";
}

fclose($file);
