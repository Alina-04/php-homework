<?php
	function myTrim($str){
	 	$i = 0;
	 	while ($str{$i}){
	 		if ($str{$i} == " "){
	 		$i++;
	 		} else break; 
	 
	 	}
	 	$j = $i;
	 
	 	while ($str{$i}){
	 		$i++;
	 	}

	 	while ($i > $j){
	 		if ($str{$i-1} == " "){
	 		$i--;
	 		} else break;
	 	}

	 	while ($i > $j){
	 		$res.= $str{$j};
	 		$j++;
	 	}
	 	var_dump($res);
	}
	myTrim()
?>