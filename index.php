<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WOCH</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="css/stylesheet.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 pull-left">
				<a href="index.php"><img src="images/WOCH3.jpg"></a>
			</div>
			<div class="col-sm-4 center">
			</div>
			<div class="col-sm-4 pull-right">
				<?php 
					include 'login.php';
				?>
			<a href="logout.php">Logout</a>
			|
			<a href="register.php">Register</a>
			</div>
		</div>
		<div class="row row-spaced "></div>
		<div class="row row-spaced row-gray"></div>
		<?php 
		if(!isset($_SESSION["username"])){
			echo 'not logged in';
		} else { ?>
		"<script>window.location = 'http://electic.lv/ttdarbs/Web/'  </script>"
		<?php header("Location: /ttdarbs/Web/index.html"); }?>
	</div>
</body>
</html>