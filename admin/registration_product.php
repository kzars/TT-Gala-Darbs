
<?php
	require('db.php');
   // ja forma tiek submitota, datus pievieno datubāzei. 
     if (isset($_POST['apraksts'])){
		 
		 //ceļš kur glabāsies bildes
		 $target = "images/".basename($_FILES['bilde']['name']);
		 $bilde = $_FILES['bilde']['name'];
		 $bildepath = "../admin/images/" .$bilde;
		 
		 
		$name = stripslashes($_REQUEST['apraksts']); // izņēmam ārā iespējamos backslash
		$name = mysqli_real_escape_string($con,$name);
		$producer = stripslashes($_REQUEST['razotajs']);
		$producer = mysqli_real_escape_string($con,$producer);
		$description = stripslashes($_REQUEST['apraksts2']);
		$description = mysqli_real_escape_string($con,$description);
		$price= stripslashes($_REQUEST['cena']);
		$price= mysqli_real_escape_string($con,$price);
		$quantity = stripslashes($_REQUEST['daudzums']);
		$quantity = mysqli_real_escape_string($con,$quantity);
		
		
		
        $query = "INSERT into `products` (name, producer, description, price, quantity, imagepath) VALUES ('$name', '$producer', '$description', '$price', '$quantity', '$bildepath')";
        $result = mysqli_query($con,$query);
		
		//pārvieto bildi uz mapi
		
				if (move_uploaded_file($_FILES['bilde']['tmp_name'], $target) ) 
					/* (move_uploaded_file($_FILES["image"]["tmp_name"], $target. $_FILES["image"]["name"]))  */ 
				/* (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) */
		{
			echo "<div class='form'><h3>Bilde tikusi veiksmīgi augšupielādēta</h3><br/><a href='index.php'>Atgriezties</a></div>";
			echo "<pre>"; 
			print_r($_FILES);
		} else{
			echo "<div class='form'><h3>Problēmas ar bildes augšupielādi</h3><br/><a href='index.php'>Atgriezties</a></div>";
			echo "<pre>"; 
			print_r($_FILES);
		}
		
        if($result){
            echo "<div class='form'><h3>Prece pievienota veiksmīgi</h3><br/><a href='index.php'>Atgriezties</a></div>";
        }
    }else{
		
	}		
		
		
		
		
		
?>

<div class="form">
<h1>Pievienot produktu</h1>
<form name="produkts" action="" method="post" enctype="multipart/form-data">
<input type="text" name="apraksts" placeholder="Produkta apraksts" required />
<input type="text" name="razotajs" placeholder="Ražotājs" required />
<input type="text" name="apraksts2" placeholder="Apraksts" required />
<input type="number" name="cena" placeholder="Cena" required />
<input type="number" name="daudzums" placeholder="Daudzums" required />
<input type="hidden" name="size" value="1000000">
<input type="file" name="bilde"  />
<input type="submit" name="submit" value="Pievienot" />
</form>
</div>





</body>
</html>

