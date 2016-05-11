<?php

class Math {
	public function add($var1, $var2, ...$numbers) {
        	$sum = ($var1 + $var2);
		if($numbers != null) {
			foreach($numbers as $number) {
				$sum += $number;
			}
		}

		return $sum;
	}

	public function subtract($var1, $var2, ...$numbers) {
		$difference = ($var1 - $var2);
		foreach($numbers as $number) {
                        $difference -= $number;
                }
		return $difference;
	}

	public function multiply($var1, $var2, ...$numbers) {
        	$product =  ($var1 * $var2);
		foreach($numbers as $number) {
                        $product *= $number;
                }
		return $product;
	}

	public function divide($var1, $var2, ...$numbers) {
        	$division = ($var1/$var2);
		foreach($numbers as $number) {
                        $division /= $number;
                }
		return $division;
	}

}

?>
