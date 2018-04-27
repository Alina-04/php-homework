<?php require_once 'functions.php'; ?>
<?php require_once 'header.php'; ?>

<?php
	if (isset($_SESSION['access']) && $_SESSION['access']) {
	    header('Location: /accessdenied.php');
	    exit;
	}
	if (isset($_POST) && !empty($_POST)) {
    	login($_POST);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorization</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="col-lg-4 ml-auto mr-auto">
		<h2>Авторизация</h2>
	<p>При первом входе введите, пожалуйста, все данные</p>	
	<form action="/" method="POST">
		<p>
			<label for="myName">Имя</label>
			<input name="myName" type="text" placeholder="Имя" value="">
		</p>
		<p>
			<label for="phoneNumber">Телефон</label>
			<input name="phoneNumber" type="tel" placeholder="0123456789" value="">
		</p>
		<p>
			<label for="mail">Почта</label>
			<input name="mail" type="text" placeholder="pochta@gmail.com" value="">
		</p>
		<p>
			<label for="login">Логин</label>
			<input name="login" type="text" value="">
		</p>
		<p>
			<label for="password">Пароль</label>
			<input name="password" type="password" value="">
		</p>
		<p>
			<input type="submit">
		</p>
		
	</form>
	</div>
	
</body>
</html>