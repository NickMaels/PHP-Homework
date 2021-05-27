<table border=1>
	<tr>
		<td>Имя</td>
		<td>Фамилия</td>
		<td>Возраст</td>
		<td>Рост</td>
		<td>Вес</td>
	</tr>
<?php	
$users = fopen("users.txt", "r");
$users1 = fopen("output.txt", "w");

$index = 0;
$minAgeIndex = 0;
$maxAgeIndex = 0;
$maxHeightIndex = 0;
$minHeightIndex = 0;
$minWeightIndex = 0;
$maxWeightIndex = 0;

$people = array();

while (($line = fgets($users)) !== false) {
    {
    	$words = explode(" ", $line);
    	echo "<tr>";
    	foreach($words as $word){
    		echo "<td>" . $word . "</td>";
    	}
    	echo "</tr>";
    	array_push($people, $words);
    	//check min age
    	if( intval($people[$index][2]) < intval($people[$minAgeIndex][2]) ) 
    		$minAgeIndex = $index;
    	//check max age
    	if( intval($people[$index][2]) > intval($people[$maxAgeIndex][2]) ) 
    		$maxAgeIndex = $index;
    	//check min height
    	if( intval($people[$index][3]) < intval($people[$minHeightIndex][3]) ) 
    		$minHeightIndex = $index;
    	//check max height
    	if( intval($people[$index][3]) > intval($people[$maxHeightIndex][3]) ) 
    		$maxHeightIndex = $index;
    	//check min weight
    	if( intval($people[$index][4]) < intval($people[$minWeightIndex][4]) ) 
    		$minWeightIndex = $index;
    	//check max weight
    	if( intval($people[$index][4]) > intval($people[$maxWeightIndex][4]) ) 
    		$maxWeightIndex = $index;   

    	$index++; 	
    }
}

$txt = "";
$txt.= "Минимальный Возраст: " . $people[$minAgeIndex][0] . " " . $people[$minAgeIndex][1] . " " . $people[$minAgeIndex][2] . " " . $people[$minAgeIndex][3] . " " . $people[$minAgeIndex][4] . "\n";

$txt.= "Максимальный Возраст: " . $people[$maxAgeIndex][0] . " " . $people[$maxAgeIndex][1] . " " . $people[$maxAgeIndex][2] . " " . $people[$maxAgeIndex][3] . " " . $people[$maxAgeIndex][4] . "\n";

$txt.= "Минимальный Рост: " . $people[$minHeightIndex][0] . " " . $people[$minHeightIndex][1] . " " . $people[$minHeightIndex][2] . " " . $people[$minHeightIndex][3] . " " . $people[$minHeightIndex][4] . "\n";

$txt.= "Максимальный Рост: " . $people[$maxHeightIndex][0] . " " . $people[$maxHeightIndex][1] . " " . $people[$maxHeightIndex][2] . " " . $people[$maxHeightIndex][3] . " " . $people[$maxHeightIndex][4] . "\n";

$txt.= "Минимальный Вес: " . $people[$minWeightIndex][0] . " " . $people[$minWeightIndex][1] . " " . $people[$minWeightIndex][2] . " " . $people[$minWeightIndex][3] . " " . $people[$minWeightIndex][4] . "\n";

$txt.= "Максимальный Вес: " . $people[$maxWeightIndex][0] . " " . $people[$maxWeightIndex][1] . " " . $people[$maxWeightIndex][2] . " " . $people[$maxWeightIndex][3] . " " . $people[$maxWeightIndex][4] . "\n";
fwrite($users1, $txt);

fclose($users);
fclose($users1);
?>
</table>