<?php include('includes/header.php');?>

	<?php
	$query = " SELECT * FROM record";
	$data = mysqli_query($conn,$query);
	$total = mysqli_num_rows($data);
	//$result = mysqli_fetch_assoc($data);
	//echo $total;
	?>
<div class="background_wallpaper">
	<div class="container ">
		<h2 class="text-center text-uppercase text-white" id="main-head">student list</h2>
	
		<table class="table table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Roll No</th>
					<th scope="col">Name</th>
					<th scope="col">Class</th>
					<th scope="col" colspan="2" class="text-center">Actions</th>
				</tr>
			</thead>
			<?php
				if ($total !="") {
					while ($result = mysqli_fetch_assoc($data)) {
						echo"<tr class='table123'>
								<td>".$result['rollno']."</td>
								<td>".$result['name']."</td>
								<td>".$result['class']."</td>
								<td><a href='update.php? roll=$result[rollno] & name=$result[name] & class=$result[class]'>update</a></td>
								<td><a href='delete.php?roll=$result[rollno]' onclick='return checkdelete();'>delete</a></td>
							</tr>";
					}
				}else{
					echo "sorry no record found";
				}
		 	?>
		</table>
	
		<a href="index.php" class="text-capitalize btn btn-secondary" id="btn-3">enter new data</a>
	</div>
</div>
	<?php include('includes/footer.php'); ?>

