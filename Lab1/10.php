<?php

$x=2;
$y=3;
$z=4;

function func($a,$b,$c)
{
$reuslt=pow($a+1,4)-2*($c-2*$a*$a+$b*$b)+sqrt(abs(sin($b)));;
    echo $reuslt;
}

func($x,$y,$z);

?>