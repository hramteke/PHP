<?php

include "math.php";

$mathObj = new Math;
echo "---------SUM---------\n";
echo "Sum of 5 + 6 is " , $mathObj->add(5, 6) , "\n";
echo "Sum of 5 + 6 + 7 is " , $mathObj->add(5, 6, 7) , "\n";
echo "Sum of 5 + 6 + 7 + 8 + 9 is ", $mathObj->add(5,6,7,8,9), "\n";

echo "---------SUBTRACTION---------\n";
echo "Subtraction of 5 - 6 is " , $mathObj->subtract(5, 6) , "\n";
echo "Subtraction of 5 - 6 - 7 is " , $mathObj->subtract(5, 6, 7) , "\n";
echo "Subtraction of 5 - 6 - 7 - 8 - 9 is ", $mathObj->subtract(5,6,7,8,9), "\n";

echo "---------DIVISION---------\n";
echo "Division of 5 / 6 is " , $mathObj->divide(5, 6) , "\n";
echo "Division of 5 / 6 / 7 is " , $mathObj->divide(5, 6, 7) , "\n";
echo "Division of 5 / 6 / 7 / 8 / 9 is ", $mathObj->divide(5,6,7,8,9), "\n";

echo "---------MULTIPLICATION---------\n";
echo "Product of 5 * 6 is " , $mathObj->multiply(5, 6) , "\n";
echo "Product of 5 * 6 * 7 is " , $mathObj->multiply(5, 6, 7) , "\n";
echo "Product of 5 * 6 * 7 * 8 * 9 is ", $mathObj->multiply(5,6,7,8,9), "\n";

?>
