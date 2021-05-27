<?php
$a=123;
echo "Число:{$a} \n";
$f=$a/100;
$a=$a%100;
$s=$a/10;
$a=$a%10;
$t=$a;
$sum=floor($f+$s+$t);

echo "Сумма цифр:{$sum}";
?>