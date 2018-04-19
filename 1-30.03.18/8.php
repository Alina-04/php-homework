<?php

	// Создайте массив $bmw с ячейками “model”, “speed”, “doors”, “year”. Заполните ячейки значениями “X5”, 120, 5, 2006.
	// Создайте массивы $toyota и $opel аналогичные массиву $bmw и заполните их - $toyota “Carina”, 130, 4, 2007
	// $opel “Corsa”, 140, 5, 2007
	// Выведите значение всех трех массивов в виде:
	// name - model - speed - doors - year


	$bmw = [
		'model' => 'x5',
		'speed' => 120,
		'doors' => 5,
		'year' => 2006,
	];

	$opel = [
		'model' => 'Corsa',
		'speed' => 140,
		'doors' => 5,
		'year' => 2007,
	];

	$toyota = [
		'model' => 'Carina',
		'speed' => 130,
		'doors' => 4,
		'year' => 2007,
	];

	print($bmw['model'].'-'.$bmw['speed'].'-'.$bmw['doors'].'-'.$bmw['year']."<br />");
	print($opel['model'].'-'.$bmw['speed'].'-'.$bmw['doors'].'-'.$bmw['year']."<br />");
	print($toyota['model'].'-'.$bmw['speed'].'-'.$bmw['doors'].'-'.$bmw['year']);
?>