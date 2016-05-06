<?php
	require 'constants.php'; 
//	include 'constants.php';

// Use require when the file is required by the application.
// Use include when the file is not required and application should continue when file is not found.

echo "----------Constant1----------", CONSTANT1, "\n"; 

$array = array("CONSTANT1" => constant1, "CONSTANT2" => CONSTANT2, "CONSTANT3" => constant3);

foreach($array as $index => $index_value) {
	echo "Key: " . $index . ", Value: " .$index_value;
	echo "\n";
}

echo "Constant1: " , $array["CONSTANT1"], "\n";

// Associative array cannot be referred by indexes
// echo "Constant2: ", $array[1], "\n";

$keys = array_keys($array);

echo "Index 0: ", $array[$keys[0]], "\n";

foreach($keys as $index) {
	echo "Index: ", $index, "\n";
}

$array += array("Constant4" => Constant4);

$result = 1;
foreach($array as $index => $index_value) {
        echo "Key: " . $index . ", Value: " .$index_value;
        echo "\n";
	if(is_int($index_value)) {
		$result = $result * $index_value;
	}
}

echo "Result: ", $result, "\n";

echo 'The result of ',$array["CONSTANT3"], '*' , $array["Constant4"],  ' is: ', $array["CONSTANT3"] * $array["Constant4"];
echo "\n";

$name = "FULL NAME";

echo <<<EOT
My name is "$name". I am printing string from the array created earlier "{$array["CONSTANT1"]}".
Now, I am printing some integer in the array {$array["CONSTANT3"]}.
This EOT works \n
EOT;

?>
