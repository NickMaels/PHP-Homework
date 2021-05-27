<style>
body{
    font-family:Tahoma;
}
</style>


<?php

$arr=array(8,9,1,4,2);

$new_arr=array();

$new_arr=array_replace($new_arr, $arr);

$k=1;
echo "Первоначальный массив:";
foreach($arr as $values)
{
    echo $values . " ";
}
echo "<br>";
asort($new_arr);
$new_arr = array_values($new_arr);
echo "Второй массив с сортированными символами первоначального массива:";
foreach($new_arr as $values)
{
    echo $values . " ";
}
echo("<br> Эллемент на позиции {$k}: " . $new_arr[$k]);
?>