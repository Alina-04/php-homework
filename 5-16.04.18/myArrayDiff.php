<?php
	function myArrayDiff($arr1, $arr2, $arr3){
		$result = [];
		foreach ($arr1 as $key => $value) {
			$i = 0;
				if ($arr1[$value] == $arr2[$i]) {
					unset($arr1[$key]);
					$i++;
				}
				else {
					$arr1[] = $arr2[$i];
				}

		}
		var_dump($arr1);
		echo "<br />";
		var_dump(array_diff($arr1, $arr2));
		// var_dump($result);

	}
	$arr1 = [2, 5, 'apple', 'first' => 'green', 3 => 'red',];
	$arr2 = [7, 9 => 4, 'apple', 6, 3 => 'green',];
	$arr3 = [4, 5, 7, 'first' => 'green',];
	var_dump(myArrayDiff($arr1, $arr2, $arr3));

?>