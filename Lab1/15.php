<?php

$a=412;

echo "Число:{$a} \n";

$f=$a/100;
$a=$a%100;
$s=0;
$s1=$a/10;
$a=$a%10;
$t=$a;

$zero=floor($f). floor($s). floor($t);
$reverse=floor($t). floor($s1). floor($f);
echo "Число:{$zero} \n";
echo "Обратное число:{$reverse} \n";
?>