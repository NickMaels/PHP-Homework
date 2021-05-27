<?php

$file=fopen("file1.txt",'w');

$txt="";
$count=1;
for($i=1;$i<=999;$i++){
    $txt.=$i . " " ;
    if($count==3){$count=0;
        $txt.="\n";
    }
    $count++;
}

fwrite($file, $txt);
fclose($file);