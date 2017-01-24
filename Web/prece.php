<?php
	  $query = "SELECT * FROM `products`";
	  $result = mysqli_query($con,$query); 
?>
 <?php
	  $query = "SELECT * FROM `products`";
	  $result = mysqli_query($con,$query); 

?>

<?php
	 while ($row = mysqli_fetch_row($result)) { ?>

				<div class="col-sm-4">
	  				<h3><?php echo $row[1]; ?></h3>
					<img src="<?=$row[6]?>" width="175" height="200" />
	  				<p>Ražotājs: <?php echo $row[2]; ?></p>
					<p>Apraksts:	<?php echo $row[3]; ?></p>
					<p>Cena:	<?php echo $row[4]; ?> €</p>
	  					
	  			</div>
				
		
	  		
<?php } ?>




