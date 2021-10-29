<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	
	$sql = "select * from worker_form where id =".$_GET['id'];
	
	$qry = $conn->query($sql);
	
	$result = mysqli_fetch_assoc($qry);
	
	/*echo "<pre>";
	print_r ($result);*/

?>
<html>
	<body>
		<table style="margin:center">
			<tr><img src="allImages/<?php echo $result['photo_file'] ?>" height="300" width="300"></tr>
			<tr><h2><?php echo $result['full_name'] ?></h2></tr>
			<tr><h2><?php echo $result['email'] ?></h2></tr>
			<tr><h2><?php echo $result['phone'] ?></h2></tr>
			<tr><h2><?php echo $result['address'] ?></h2></tr>
			<tr><h2><?php echo $result['gender'] ?></h2></tr>
			<tr><h2><?php echo $result['work_field'] ?></h2></tr>
			<tr><h2><?php echo $result['experience'] ?></h2></tr>
		</table>
	</body>
</html>