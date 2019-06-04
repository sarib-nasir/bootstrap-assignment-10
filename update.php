<?php include('includes/header.php');?>
<div class="background_wallpaper">
 	<div class="container ">
 		<div class="row justify-content-center">
 			<div class=" col-sm-4">
 				<form method="post" action="" class="form">
		 			<h2 class="text-capitalize heading123 text-white">update entery</h2>
		 			<form class="form-inline">
		 				<div class="row">
		 					<div class="col">
		 						<label class="text-white">Roll No:</label>
				 				<input type="text" name="roll" value="<?php echo $_GET['roll'];?>
" class="form-control form-control-sm opacity">
		 					</div>
		 				</div>
		 				
				 		<div class="row">
				 			<div class="col">
				 				<label class="text-white">Name:</label>
					 			<input type="text" name="name" value="<?php echo $_GET['name'];?>" class="form-control form-control-sm opacity">
				 			</div>
				 		</div>
					 	
					 	<div class="row">
					 		<div class="col">
					 			<label class="text-white">Class:</label>
					 			<input type="text" name="class" value="<?php echo $_GET['class'];?>" class="form-control form-control-sm opacity">
					 		</div>
					 	</div>

					 	<div class="form-group">
					 		<input type="submit" name="submit" value="update" id="btn-2" class="btn btn-primary">
					 		<a href="display.php" class="  btn btn-outline-primary check1 text-white">check list here</a>
					 	</div>	
		 			</form>
				</form>
 			</div>
 		</div>
 	</div>

	<?php include('includes/footer.php'); ?>

<?php
if (isset($_POST['submit'])) {
	
	$rollno = $_POST['roll'];
	$name = $_POST['name'];
	$class = $_POST['class'];
	//$query = "UPDATE record SET name='$name' , class='$class' WHERE roll='$rollno'";
	$query = "UPDATE `record` SET `name`='".$name."',`class`='".$class."' WHERE `rollno`='".$rollno."'";
	$data = mysqli_query($conn,$query);
	if ($data) {
		echo "<span class='container text-white'><p class=text-center>update successful</p></span>";
	}else{
		echo "<span class='container text-white'><p class=text-center>failed to update record</p></span>";
	}

}else{
	echo "<p class='text-center text-white'>failed</p>";
}	
/*$_GET['roll'];
	$_GET['name'];
	$_GET['class'];*/

 ?>
</div>










