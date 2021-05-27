<style>
    span{
        font-weight:bold;
    }
</style>

<?php
echo "<h3>Даты</h3>";
// date 1
echo "<span>Задание 1</span> <br>";
echo "Выведите 1 марта 2025 года в формате timestamp:". mktime(0, 0, 0, 3, 1, 2025) . "<br>";
echo "<hr>";
//date 2
echo "<span>Задание 2</span> <br>";
echo "Прошло: ". floor((time() - mktime(7, 23, 48, date("m"), date("d"), date("Y"))) / 3600) ." часов";
echo "<br>";
echo "<hr>";
//date 3
echo "<span>Задание 3</span> <br>";

$months = array('', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
$m = date('n');
echo "Сейчас:". $months[$m];
echo "<hr>";

//date 4
echo "<span>Задание 4</span> <br>";
$day = array('Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота');
$date = date('d.m.y');
$expl = explode('.', $date);
$n = mktime(0,0,0,$expl[1], $expl[0], $expl[2]);
$m = date('w', $n);
echo "Сегодня:". $day[$m];
//date 5
echo "<hr>";
echo "<span>Задание 5</span> <br>";
$year = 2020;
$friday = 0;
$counter=0;
$array=array();
for($month = 1; $month <= 12; $month++){
	$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
	for($day = 1; $day <= $days_in_month; $day++){
	    $d = date('w', mktime(0, 0, 0, $month, $day, $year));
	    if($d == 5){
		    if( date('d', mktime(0, 0, 0, $month, $day, $year)) == 13){
			   $friday++; 
			   $array[$counter]= date('d.m.Y', mktime(0, 0, 0, $month, $day, $year)).'<br>';$counter++;
		    }
	    }
	}
}
echo "В $year году 'пятниц 13-го' - <b>$friday</b><br><br>Они выпадают на числа:<br>";
foreach($array as $value)
{
    echo $value . "\n";
}
echo "<h3>Функции</h3>";
// arrays 1
echo "<span>Задание 1</span> <br>";
echo "Массив:";
$array=array(-1,0,1,2,3,4,5,6,7,8,9,10,11);
foreach($array as $value){
    echo $value . "\n";
}
echo "<br>";
$b=array();
function isNumberInRange($temp){
   if($temp<10 && $temp>0)return $temp;
}
foreach($array as $value){
   array_push($b,isNumberInRange($value));
}
echo "Массив с числами больше нуля и меньше 10-ти:";
foreach($b as $value){
    echo $value . "\n";
}
echo "<hr>";
//arrays 2
echo "<span>Задание 2</span> <br>";
function isEven($value){
    if($value%2==0){echo "true";return true;}
    else {echo "false";return false;}
}
isEven(4);
echo "<br>";
echo "<hr>";
//arrays 3
echo "<span>Задание 3</span> <br>";

function finder($temp){
    $arr=array();
    for($i=1;$i<=$temp;$i++){
        if($temp%$i==0)array_push($arr, $i);
    }
    return $arr;
}
function getCommonDivisors($temp, $temp2)
{
  echo "Общие делители {$temp} и {$temp2}:" . implode(",",(array_intersect(finder($temp),finder($temp2))));
}
getCommonDivisors(10,20);

echo "<hr>";
//arrays 4
echo "<span>Задание 4</span> <br>";
function sumDel($temp){
    $sum=0;
    for($i=1;$i<=$temp/2;$i++)
        if($temp%$i==0)$sum=$sum+$i;
    return $sum;
}
function findFriend(){
    $var_one=0;
    $var_two=0;
    for($i=1;$i<=10000;$i++){
        $var_one=sumDel($i);
        $var_two=sumDel($var_one);
        if($i==$var_two && $var_two!=$var_one)echo $i . " друзья " . $var_one . "<br>";
    }
}
findFriend();

echo "<hr>";
//arrays 5
echo "<span>Задание 5</span> <br>";
function randomArray()
{
    $array=array();
    for($i=0;$i<10;$i++){
        array_push($array,rand(1,100));
    }
    echo "Массив с 10 случайными числами:";
    foreach ($array as $value) {
        echo $value . "\n";
    }
}
randomArray();
echo "<hr>";
//arrays 6
echo "<span>Задание 6</span> <br>";
function findArray($temp){
    $arr=array();
    for($i=1;$i<=$temp;$i++){
        if($temp%$i==0)array_push($arr, $i);
    }
    echo "Делители числа {$temp}:";
    foreach ($arr as $value) {
        echo $value . "\n";
    }
}
findArray(30);