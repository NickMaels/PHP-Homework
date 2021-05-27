<?php
$array=array(4,-8,7,-6,0,-7,5);

//$array=array(-3,-10,8,-23,0,1,4,-50,10,3);

$barray=array();
$number=count($array);
echo "Изначальный массив:";
foreach($array as $value)
{
    echo $value . "\n";
}
$k=0;
arsort($array);
$array = array_values($array);

echo "<br>";
while($array[$k]>=0)$k++;
for($i=0;$i<$k;$i++)$barray[$i]=$array[$k-$i-1];

for ($i=$k;$i<$number;$i++)$barray[$i]=$array[$i];

echo "Сортированный массив:";
foreach($barray as $value)
{
    echo $value . "\n";
}



?>  