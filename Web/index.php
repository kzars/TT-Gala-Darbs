<?php 
session_start();
require '../Web/init.php';
if ($_SESSION['username']==NULL)
	{
	header("Location: /ttdarbs/index.php");
	}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Galva--> 
  <head>
    <meta charset="utf-8">
    <title>WOCH Shop</title>
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/WOCHShop/bootstrap.min.css" media="screen"/>

  </head>
<!-- Galvas beigas-->
  


<body>
	<div class="container">
<div id="header">
<div class="container">
<div>
	<div class="span6"><?php echo $lang['hello'];?><strong> <?php echo $_SESSION['username']; ?> </strong></div> 
</div>


<!-- Navigācija-->
<div id="logoArea" class="navbar">

  <div>
    <a class="brand" href="index.php"><img src="/ttdarbs/images/WOCH3.jpg"/></a>
		
		 
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="ziedojumi.php"><?php echo $lang['charity'];?></a></li>
	 <li class=""><a href="grozs.php"><?php echo $lang['shop'];?></a></li>
	 <li class=""><a href="?lang=english"><?php echo $lang['english'];?></a></li>
	 <li class=""><a href="?lang=latvian"><?php echo $lang['latvian'];?></a></li>
	 <li class=""><a href="?lang=spain"><?php echo $lang['spain'];?></a></li>
	 <li class=""> <a href="/ttdarbs/logout.php"><?php echo $lang['logout'];?></a></li>

    </ul>
  </div>
</div>
</div>

<div>
	<div class="center">
		<h3>Par mums</h3>
	<p>Mēs esam uzņēmums, kas piedāvā saviem klientiem telefona lādētājus, kurus ir iespējams uzlādēt ar saules enerģiju. Ir pieejami dažādi lādētāju modeļi ar dažādiem tehniskiem parametriem un dizaina risinājumiem. Viena produkta cenā ir iekļauta arī summa (5 eiro), kas tiek ziedota labdarībai. Pēc pircēja vēlmes šo summu ir iespējams arī palielināt, šajā gadījumā ziedošanai tiek nodota summa, kuru nosaka pats pircējs. Pirkšanas brīdī klientam ir iespēja ne tikai regulēt ziedojuma apjomu, bet arī izvēlēties labdarības projektu, kuram tiks pārskaitīta nauda.
	</p>
</div>
<img src="../images/product.png" class="img-responsive center-block" >
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