<?php

	// удалите переменную $age


	$name = 'Алина';
	$age = 33;
		echo('Меня зовут, '.$name .".<br />" .' Мой возраст ' .$age .' года'.".<br />");
		unset($age);
		if ($age != true) {
			echo'удалена';
		} else
			echo "упс";
?>