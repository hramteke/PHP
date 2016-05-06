<?php

// Define 5 PHP constants there via the define() method. 
// Assign some constants string values and some integer values.
// The integer values should be between one (1) and five (5)

define("CONSTANT1", "Php Learning for the constants", true);
define("CONSTANT2", "Aah this is case sensitive");
define("CONSTANT3", 4, true);
define("Constant4", 1);
define("constant5", 3);
echo "Constant1: " , constant1 , "\n";

// This statement will error out as constant 2 is defined to be case sensitive
// echo "Constant2: " , constant2 , "<br/>";
echo "Constant2: " , CONSTANT2 , "\n";

echo "Constant3: ", CONStant3, "\n";
echo "Constant4: ", Constant4, "\n";
echo "Constant5: ", constant5, "\n";

?>
