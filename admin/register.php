<?php
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>WOCH</title>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="../css/stylesheet.css" />
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 pull-left">
				<a href="index.php"><img src="../images/WOCH3.jpg"></a>
			</div>
			<div class="col-sm-4 center">
			</div>
			<div class="col-sm-4 pull-right">
			</div>
		</div>
		<div class="row row-spaced "></div>
		<div class="row row-spaced row-gray"></div>
		<?php 
			if ($_SESSION['role']=="admin") {include 'registration.php';}
			else  { echo "Lūdzu ielogojies kā admin lietotājs, citādi nevar veikt izmaiņas." ?> <a style="btn btn-info btn-xs" href="index.php">Atgriezties</a> <?php } ?>
	</div>
</body>
</html>