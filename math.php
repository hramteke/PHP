<?php

class Math {
	const SUM = 'SUM';
	const SUBTRACT = 'SUBTRACT';
	const DIVIDE = 'DIVIDE';
	const MULTIPLY = 'MULTIPLY';

	private function doOperation($type, $var1, $var2, ...$numbers) {
		if($type==self::SUM) {
                	$sum = ($var1 + $var2);
                	if($numbers != null) {
                        	foreach($numbers as $number) {
                                	$sum += $number;
                        	}
           		}
			return $sum;
		} else if($type==self::SUBTRACT) {
			$difference = ($var1 - $var2);
                	foreach($numbers as $number) {
                        	$difference -= $number;
                	}
                	return $difference;
		} else if($type==self::MULTIPLY) {
                	$product =  ($var1 * $var2);
                	foreach($numbers as $number) {
                        	$product *= $number;
                	}
                	return $product;
		} else if($type==self::DIVIDE) {
        		$division = ($var1/$var2);
                	foreach($numbers as $number) {
                        	$division /= $number;
                	}
                	return $division;
		}
	}

	public function add($var1, $var2, ...$numbers) {
		return $this->doOperation(self::SUM, $var1, $var2, ...$numbers);
	}

	public function subtract($var1, $var2, ...$numbers) {
		return $this->doOperation(self::SUBTRACT, $var1, $var2, ...$numbers);
	}

	public function multiply($var1, $var2, ...$numbers) {
		return $this->doOperation(self::MULTIPLY, $var1, $var2, ...$numbers);
	}

	public function divide($var1, $var2, ...$numbers) {
		return $this->doOperation(self::DIVIDE, $var1, $var2, ...$numbers);
	}

}



?>
