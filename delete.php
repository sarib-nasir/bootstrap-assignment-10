<?php include('includes/header.php');?>
	<?php
		$rollno = $_GET['roll'];
		//$query = "DELETE FORM RECORD WHERE ROLLNO='$rollno'";
		$query = "DELETE FROM `record` WHERE rollno='".$rollno."'";
		$data = mysqli_query($conn,$query);
		if ($data) {
			header('location:display.php');
		}else{
			echo "sorry delete process failed";
		}

	 ?>
<?php include('includes/footer.php'); ?>

























