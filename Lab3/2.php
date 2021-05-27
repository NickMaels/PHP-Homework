<?php

$array=array(14, -2, 3, 14, 3, -2, 5);

$array = array_unique($array);
$array = array_values($array);

echo "Количество отличных друг от друга элементов:". count($array);