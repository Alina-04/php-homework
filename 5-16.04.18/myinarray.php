<?php
	function myInArray($var, $arr){
		foreach ($arr as $key => $value) {
			if ($value === $var) {
				return true;
			}
		}
		return false;
	}
	$var = 10;
	$arr = array(1, 2, 4, 'blue' => 10, 'red' => "apple",);
	var_dump(myInArray($var, $arr));
	
?>