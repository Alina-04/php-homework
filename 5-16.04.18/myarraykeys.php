<?php
	function myArrayKeys($arr){
		$newArray = null;
		foreach ($arr as $key => $value) {
			$newArray[] = $key;
		}
		return $newArray;
	}
	$arr = array(
		'd' => 'fgfgf',
		6 => 4,
		9 => 'gfgf',
		'vfv' => 5,
	);
	print_r(myArrayKeys($arr));
	
?>