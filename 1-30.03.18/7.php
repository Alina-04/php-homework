<?php

	// Создайте переменную $day, присвойте ей любое числовое значение. С помощью конструкции switch выведите фразу “Это рабочий день”, если переменной $day попадает в диапазон чисел от 1 до 5 включительно. Выведите фразу “Это выходной день”, если значение $day равно числам 6 или 7, и на конец выведите фразу “Неизвестный день” если значение $day не попадает в диапазон чисел от 1 до 7 включительно. 


	$day = 8;

	switch ($day) {
		case '1':
			echo "Это рабочий день";
			break;
		case '2':
			echo "Это рабочий день";
			break;
		case '3':
			echo "Это рабочий день";
			break;
		case '4':
			echo "Это рабочий день";
			break;
		case '5':
			echo "Это рабочий день";
			break;
		case '6':
			echo "Это выходной день";
			break;
		case '7':
			echo "Это выходной день";
			break;
		
		default:
			echo "Неизвестный день";
			break;
	}
?>