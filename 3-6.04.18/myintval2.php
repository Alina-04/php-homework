<?php
	function myIntval($var) {
		$res = (int) $var;
		$res2 = (string) $var;
		$i = 0;
		while ($res2{$i} != ".") {
			$i++;
		}
		$d = $i + 1;
		if ($res2{$d} < 5) {
			return $res;
		} elseif ($res2{$d} >= 5) {
			$newres = $res + 1;
			return $newres;
		}
	}
	var_dump(myIntval(8578355.2455));
?>