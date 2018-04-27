<?php require_once 'functions.php'; ?>
<?php require_once 'header.php'; ?>

<?php 
	if (isset($_GET) && key_exists('logout', $_GET)) {
    	session_destroy();
    	header('Location: /authorization.php');
    	exit;
	}
	if (isset($_POST) && !empty($_POST)) {
    	login($_POST);
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главная</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="container">
	

	<?php $descriptions = getDiscription(); ?>
	
		<?php foreach ($descriptions as $description) : ?>
			<div class="description col-lg-4">
				<div class="singleproduct">
					<a href="/product.php?title=<?= $description['title']; ?>&fullDescription=<?= $description['fullDescription']; ?>&description=<?= $description['description']; ?>&price=<?= $description['price'];?>">
						<h2><?php echo $description['title']; ?></h2>
					</a>
					<p><?php echo $description['description']; ?></p>
					<img src='images/gift.jpg' alt="">
					<p class="price"><?php echo $description['price'] ?></p>
				</div>
				
			</div>
		<?php endforeach; ?>
	
</body>
</html>