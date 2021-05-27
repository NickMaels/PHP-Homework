<?php
$arr=array(-1,2,5,0,2);


echo "Изначальный Массив:";
foreach($arr as $values)
{
    echo $values . "\n";
}
echo "<br>";

$sum = array_sum($arr);
$new_arr = array();
 
for($i = 0; $i < count($arr) - 1; $i++) {
    $new_arr[2 * $i] = $arr[$i];
    $new_arr[2 * $i + 1] = $sum - $arr[$i] - $arr[$i+1];
    $new_arr[2 * $i + 2] = $arr[$i + 1];
}


echo "Конечный Массив:";
foreach($new_arr as $values)
{
    echo $values . "\n";
}

?>