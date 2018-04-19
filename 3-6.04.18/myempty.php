<?php
	
	function myEmpty($a) {

		// if ($a !== null) { 
		if ($a !== null && $a !== '') {
			echo "not empty";
		} 
		elseif ($a === '') {
			echo "empty";
		} 
		
		else {
			echo "empty";
		};
	};
	myEmpty();
?>