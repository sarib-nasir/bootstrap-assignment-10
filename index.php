<?php include('includes/header.php');?>
<div class="background_wallpaper">
 	<div class="container ">
 		<div class="row justify-content-center">
 			<div class=" col-sm-4">
 				<form method="post" action="" class="form">
		 			<h2 class="text-capitalize heading123 text-white" >data entery</h2>
		 			<form class="form-inline">
		 				<div class="row">
		 					<div class="col">
		 						<label class="text-white">Roll No:</label>
				 				<input type="text" name="roll" value="" class="form-control form-control-sm opacity">
		 					</div>
		 				</div>
		 				
				 		<div class="row">
				 			<div class="col">
				 				<label class="text-white">Name:</label>
					 			<input type="text" name="name" value="" class="form-control form-control-sm opacity">
				 			</div>
				 		</div>
					 	
					 	<div class="row">
					 		<div class="col">
					 			<label class="text-white">Class:</label>
					 			<input type="text" name="class" value="" class="form-control form-control-sm opacity">
					 		</div>
					 	</div>

					 	<div class="form-group">
					 		<input type="submit" name="submit" value="submit" id="btn-1" class="btn btn-primary text-white">
					 		<a href="display.php" class=" btn btn-outline-primary check1 text-white">check list here</a>
					 	</div>	
		 			</form>
				</form>
 			</div>
 		</div>
 	</div>

 	
	<?php include('includes/footer.php'); ?>
 

<?php
if (isset($_POST['submit'])) {
	$rn = $_POST['roll'];
	$name = $_POST['name'];
	$cl = $_POST['class'];

	if ($rn!="" || $name!="" || $cl!="") {
		$query = "INSERT INTO RECORD VALUES('$rn','$name','$cl')";
		$data = mysqli_query($conn , $query);
		if ($data) {
			echo "<p class='text-center text-white'>data inserted into database</p>";
		}else{
			echo "<p class='text-center text-white'>failed to insert data</p>";
		}
	}else{
		echo "<p class='text-center text-white'>all fields are required</p>";
		exit();
	}

}
 ?>
</div>









