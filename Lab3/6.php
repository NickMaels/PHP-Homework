<?php

$string='london';

if(strlen($string)==3)echo $string;
else if(strlen($string)>3){
    echo substr($string, strlen($string)-3);
}

?>