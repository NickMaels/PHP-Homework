<style>
    .black
    {
        background:black;
        color:white;
    }
    div
    {
        width:10%;
        border:1px solid black;
    }
</style>

<?php
$bool=false;
for($i=0;$i<=100;$i++)
{
    
    if($bool==false){
        echo "<div class=black>{$i}</div>";
        $bool=true;
    }
    else{
        $bool=false;
        echo "<div>{$i}</div>";
    } 
    
}
?>