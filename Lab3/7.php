<?php

$string='london.jpg';

if(substr($string, strlen($string)-4)==".png" || substr($string, strlen($string)-4)==".jpg")echo "Да";
else echo "Нет";

?>