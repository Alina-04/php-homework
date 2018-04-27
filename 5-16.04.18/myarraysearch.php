<?php
	function myArraySearch($var, $arr)
	{
		foreach ($arr as $key => $value) {
			if ($value == $var) {
				return $key;
			}
		}
		return false;
	}
	$var = 'apple';
	$arr = [1, 3, 'apple', 'first' => 'blue', 4 => 'red'];
	var_dump(myArraySearch($var, $arr));
	var_dump($arr[2])

?>