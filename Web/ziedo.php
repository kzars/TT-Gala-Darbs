<?php
	  $query = "SELECT * FROM `charity`";
	  $result = mysqli_query($con,$query); 
?>
 <?php
	  $query = "SELECT * FROM `charity`";
	  $result = mysqli_query($con,$query); 
?>

<?php
	  while ($row = mysqli_fetch_row($result)) { ?>
				<div class="col-sm-4">
	  				<h3><?php echo $row[1]; ?></h3>
	  				<img src="../images/noimagefound.jpg">
	  					<?php echo $row[2]; ?>
	  					
	  			</div>
	  		
<?php } ?> 
