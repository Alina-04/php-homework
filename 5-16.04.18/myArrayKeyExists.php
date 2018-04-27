<?php
	function myArrayKeyExists($myKey, $array){
		foreach ($array as $key => $value) {
			if ($key == $myKey) {
				return true;
			}
			
		}
		return false;
	}
	$myKey = 4;
	$array = array(2, 4 => 'gfgf', 6, 'r' => 'fgf','g' => 7,);
	var_dump (myArrayKeyExists($myKey, $array));
	
	var_dump(array_key_exists($myKey, $array));

?>