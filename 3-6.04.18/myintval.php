<?php
	function myIntval($var) {
		$res = (int) $var;
		return($res);
	};
	
	echo myIntval(9.4);
?>