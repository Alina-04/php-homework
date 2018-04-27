<?php
	function myCombine ($arr1, $arr2){
			// $i = 0;
		$count1 = count($arr1);
		$count2 = count($arr2);
		$newArray = [];
		if ($count1 == $count2) {
			$i = 0;
				foreach ($arr1 as $key => $value) {
					$newArray[$value] = $arr2[$i];
					$i++;
				}
			return $newArray;
		} 
		else {
			return false;
		}
		
			
	}
	$arr1 = array('first', 'second', 'third', 'fourth', );
	$arr2 = array('blue', 'red', 'green', 'black',);
	
	var_dump(myCombine($arr1, $arr2));
?>