<?php require_once 'functions.php'; ?>
<?php require_once 'header.php'; ?>

<?php
	if (isset($_SESSION['access']) && !$_SESSION['access']) {
		 header('Location: /authorization.php');
		 echo "hello";
	 	exit;
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="col-lg-4 ml-auto mr-auto">
		<form method="POST" action="/">
		
		<?php $description = $_GET; ?>
		<p>
			<label for="product">Товар</label>
			<input name="product" type="text" placeholder="Название товара" value=<?php echo $description['title'];?>>
		</p>
		<p>
			<label for="description">Описание</label>
			<input name="description" type="text" placeholder="Описание" value=<?php echo $description['description'];?>>
		</p>
		<p>
			<label for="prices">Цена</label>
			<input name="prices" type="text" placeholder="Цена" value=<?php echo $description['price'];?>>
		</p>
		<p>
			<label for="email">Ваш email</label>
		<input name="email" type="email" placeholder="pochta@gmail.com" value="">
		</p>
		<p>
			<a href="">
			<input type="submit"  method=<?php myMail(); ?> value="Отправить заказ">
		</a>
		</p>
		
		</form>
	</div>
	
	
</body>
</html>