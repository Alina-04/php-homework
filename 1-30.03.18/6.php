<?php 

	// Создайте переменную $age и присвойте ей произвольное число, напишите конструкцию if которая выводит фразу “Вам еще работать и работать” если значение переменной $age попадает в диапазон от 18 до 59. Расширьте конструкцию if выводя фразу “Вам пора на пенсию”, если значение переменной больше 59. Далее расширьте конструкцию и выводите фразу “Вам еще рано работать” если значение переменной $age попадает в диапазон от 1 до 17 включительно. И наконец дополните конструкцию таким образом чтоб на экран вывелась фраза “Неизвестный возраст” если значение переменной $age не попадает ни в один диапазон.


	$age = 100;
		if ($age >= 18 & $age <= 59) {
			echo "Вам еще работать и работать";
		} 
		else if ($age >=1 & $age <=17) {
			echo "Вам еще рано работать";
		} 
		else if ($age >=60 & $age <=110) {
			echo "Вам пора на пенсию";
		} 
		else {
			echo "Неизвестный возраст";
		}
		
		

?>