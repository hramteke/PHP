<?php

$numbers = array();

for ($x = 0; $x < 100; $x+=3) {
	$numbers[] = $x;
}

echo "\n";
echo count($numbers);
echo "\n";

foreach($numbers as $num) {
	echo "$num ";
}

echo "\n";

foreach($numbers as $num) {
	switch ($num) {
		case 3:
        	echo "Three\n";
        	break;
    	case 9:
        	echo "Nine Nine Nine \n";
        	break;
    	case 15:
        	echo "Fifteen Fifteen Fifteen Fifteen Fifteen\n";
        	break;
    	default:
        	echo "";
  	}
}

echo "\n";

$firstIndex = 0;
$lastIndex = count($numbers) -1;

echo "\nFOR EACH-----------";

foreach($numbers as $num) {
	if($num%7==0) {
		echo "Sevens are lucky, this number has, $num \n";
	} else if($num%10==0) {
		echo "$num is a round number \n";
	} 
	if($numbers[$firstIndex] == $num) {
		echo "First Number \n";
	} else if($numbers[$lastIndex] == $num) {
		echo "Last Number \n";
	}
}

echo "\nFOR-------------";

for ($x = 0; $x < $lastIndex; $x++) {
        if($numbers[$x]%7==0) {
                echo "Sevens are lucky, this number has, $numbers[$x] \n";
        } else if($numbers[$x]%10==0) {
                echo "$numbers[$x] is a round number \n";
        }
        if($x == $firstIndex) {
                echo "First Number \n";
        } else if($x==$lastIndex) {
                echo "Last Number \n";
        }
}

echo "\nWHILE------------";

$index=0;
while($index<$lastIndex) {
        if($numbers[$index]%7==0) {
                echo "Sevens are lucky, this number has, $numbers[$index] \n";
        } else if($numbers[$index]%10==0) {
                echo "$numbers[$index] is a round number \n";
        }
        if($index == $firstIndex) {
                echo "First Number \n";
        } else if($index==$lastIndex) {
                echo "Last Number \n";
        }	
	$index++;
}

echo "\nDO WHILE----------";


$index=0;
do {
	if($numbers[$index]%7==0) {
                echo "Sevens are lucky, this number has, $numbers[$index] \n";
        } else if($numbers[$index]%10==0) {
                echo "$numbers[$index] is a round number \n";
        }
        if($index == $firstIndex) {
                echo "First Number \n";
        } else if($index==$lastIndex) {
                echo "Last Number \n";
        }
        $index++;	
} while($index < $lastIndex);


echo "\n";
?>
