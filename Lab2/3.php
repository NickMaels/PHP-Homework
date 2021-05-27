<style>
    .red{
        color:red;
    }
    .blue{
        color:blue;
    }
</style>

<?php

$arr = array('a', 'b', 'c', 'd', 'e',
                'f', 'g', 'h', 'i', 'j',
                'k', 'l', 'm', 'n', 'o',
                'p', 'q', 'r', 's', 't',
                'u', 'v', 'w', 'x', 'y',
                'z'); 

$letters=array('a', 'e', 'i', 'o', 'u', 'y');

$array_lenght=sizeof($arr);

for($i=0;$i<$array_lenght;$i++)
{
    if(in_array($arr[$i],$letters))
    {
        echo "<span class=red>$arr[$i]</span>\t";
    }else{
        echo "<span class=blue>$arr[$i]</span>\t";
    }
}
?>