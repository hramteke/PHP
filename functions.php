<?php

echo "Learning for PHP FUNCTIONS\n";

function add($var1, $var2) {
	return ($var1 + $var2);
}

function addWithDefault($var1 = 0, $var2 = 10) {
	return ($var1 + $var2);
}


function subtract($var1, $var2) {
        return ($var1 - $var2);
}

function multiply($var1 = 0, $var2 = 10) {
        return ($var1 * $var2);
}

function divide($var1, $var2) {
	return ($var1/$var2);
}

echo "10 + 10 = ", add(10, 10) , "\n";

$sum = addWithDefault(50);

echo "Sum of 50 and Default 0 is " . $sum . "\n";

echo "10 - 10 = ", subtract(10, 10) , "\n";

echo "10 * 10 = ", multiply(10, 10) , "\n";

echo "10 / 10 = ", divide(10, 10) , "\n";


function returnValue() {
	$var1 = 7;
	return $var1;
}

function &returnRef() {
	$var1 = 0;
        if($var1==null) {
		echo "Variable is null\n";
		$var1 = 5;
	} else {
		echo "Variable not null\n";
	}
	echo "Var 1 ", $var1 , "\n";
	return $var1;
}

echo "Lets see what returnValue returns : " . returnValue() . "\n";

echo "Lets see what returnRef returns : " . returnRef() . "\n";

//This shoudl return value of 7
$var1 = returnValue();

$var2 = &returnRef();
echo "This should print 5: " , $var2, "\n";
$var2 = 9;
echo "Var2: ", $var2 , "\n";
echo "ReturnRef: ", returnRef() , "\n";


function addByReference(&$var1, &$var2) {
	$sum = $var1 + $var2;
	return $sum;
}

function subtractByReference(&$var1, &$var2) {
        $subtract = $var1 - $var2;
        return $subtract;
}

function multiplyByReference(&$var1, &$var2) {
        $product = $var1 * $var2;
        return $product;
}

function divideByReference(&$var1, &$var2) {
        $division = $var1 + $var2;
        return $division;
}

$var1 = 10;
$var2 = 20;
$sum = addByReference($var1, $var2);
echo "Sum is : ", $sum , "\n";

$subtract = subtractByReference($var1, $var2);
echo "Subtract is : ", $subtract , "\n";

$product = multiplyByReference($var1, $var2);
echo "Product is : ", $product , "\n";

$divide = divideByReference($var1, $var2);
echo "Divide is : ", $divide , "\n";

function comparison($var1, $var2, $checkType = false) {
	if($checkType) {
		if(is_int($var1) && is_int($var2)) {
			if($var1==$var2) {
				echo "Parameters are equal\n";
			}
		} else {
			echo "Parameters are not equal\n";
		}
	} else {
		if($var1==$var2) {
			echo "Parameters are equal\n";
		} else {
			echo "Parameters are not equal\n";
		}
	}
}

echo "The values are " ,comparison(4, "4") , "\n";
echo "The values are " ,comparison(4, "4", true) , "\n";
echo "The values are " ,comparison(4, 4.0) , "\n";
echo "The values are " ,comparison(5, 5.0, true) , "\n";
?>
