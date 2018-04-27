<?php
	session_start();

	const LOGIN = "login";
	const PASSWORD = "password";

	
	function login(array $post){

		$log = null;
		if (isset($post['login']) && isset($post['password'])) {
			if ($post['login'] == LOGIN && ($post['password']) === PASSWORD) {
				$log = true;
			}
		}
		if ($log) {
			$SESSION['access'] = true;
			$SESSION['login'] = $post['login'];
			header('Location: /');
			exit;
		} else {
			$SESSION['access'] = false;
			header('Location: /accessdenied.php');
			exit;
			
		}
	}

	function hello(){
		if (isset($SESSION['login'])) {
			echo "Привет, вы вошли!";
		}
	}

	function getDiscription(){
		$arr = [];
		for ($i = 1; $i <= 6; $i++) { 
			$arr[] = [
				'title' => 'gift'.$i,
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'.$i,
				'fullDescription' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quas facere explicabo libero, nam fugiat repellat ratione nemo, incidunt accusamus suscipit officiis nulla animi est nobis vitae tempore dolore odio.'.$i,
				'img' => 'images/gift.jpg',
				'price' => $i.'100'.' грн',

			];
		}
		return $arr;
	}

	function myMail(){


		$to      = 'nobody@gmail.com';
		$subject = 'order';
		$message = 'my order';
		$headers = 'From: pochta@gmail.com' . "\r\n" .
		    'Reply-To: pochta@gmail.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

	}
?>