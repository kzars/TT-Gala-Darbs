<?php 
require('../db.php');
session_start();
require '../Web/init.php';
?>
<!DOCTYPE html>
<html lang="en">


<!-- Galva--> 
  <head>
    <meta charset="utf-8">
    <title>WOCH Shop</title>
	

    <link id="callCss" rel="stylesheet" href="themes/WOCHShop/bootstrap.min.css" media="screen"/>

  </head>
<!-- Galvas beigas-->
  


<body>
	<div class="container">
<div id="header">
<div class="container">
<div>
	<div class="span6"><?php echo $lang['hello'];?><strong> <?php echo $_SESSION['username']; ?> </strong></div> 
	<div class="navbar">
	<ul id="topMenu" class="nav pull-right"> 
	 <li class=""><a href="?lang=english"><?php echo $lang['english'];?></a></li>
	 <li class=""><a href="?lang=latvian"><?php echo $lang['latvian'];?></a></li>
	 <li class=""><a href="?lang=spain"><?php echo $lang['spain'];?></a></li>
	 </ul>
	 </div>
</div>


<!-- Logo -->
    <div>
    <a class="brand" href="index.php"><img src="/ttdarbs/images/WOCH3.jpg"/></a>
	</div>
<!-- /Logo -->


<!-- Navigācija-->
	
	<div id="logoArea" class="navbar">
	<div>	 
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="ziedojumi.php"><?php echo $lang['charity'];?></a></li>
	 <li class=""><a href="grozs.php"><?php echo $lang['shop'];?></a></li>
	 <li class=""> <a href="/ttdarbs/logout.php"><?php echo $lang['logout'];?></a></li>
    </ul>
  </div>
</div>
</div>

<div class="row">

<?php 
require('ziedo.php'); ?>
</div>
	
	


<!-- Apakša -->
		<div class="container">
		<div class="row">
			<div class="span3">
				<h5><?php echo $lang['information'];?></h5>  
			 </div>

			 
			<div id="socialMedia" class="span3 pull-right">
				<h5><?php echo $lang['social'];?></h5>
				<a href="#"><img width="60" height="60" src="themes/images/facebook.png" title="facebook" alt="facebook"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; WOCHShop</p>
	</div>
	
</div>
	

</body>
</html>