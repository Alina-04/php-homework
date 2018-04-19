<?php

	// Напишите функцию которая будет принимать на вход два числа, и будет выводить на экран болшее.


	function bigger($a, $b) {
		if ($a > $b) {
			echo "$a";
		} elseif ($a < $b) {
			echo "$b";
		} else {
			echo "false";
		};
	};
	bigger(8,5);
?>