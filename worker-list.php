<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	
	$sql = "select * from worker_form";
	
	$qry = $conn->query($sql);
	
	session_start();
	if (isset($_SESSION['message'])){
		$msg = $_SESSION['message'];
	}
	else {
		$msg = '';
	}

?>
<html>
<head>
	<title>Worker List</title>
</head>
<body>
	<a href="worker.php">Back to the form</a>
	
		<table border="1">
		<caption>Workers Info</caption>
		<caption style="color:green"><h2><?php echo $msg ?></h2></caption>
			<tr>
				<Td>S.No</td>
				<td>Name</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Gender</td>
				<td>Address</td>
				<td>Work Field</td>
				<td>Experience</td>
				<td>Action</td>
			</tr>
			<?php
			while($result = mysqli_fetch_assoc($qry)) {
			?>
			<tr>
				<td><?php echo $result['id'] ?></td>
				<td><?php echo $result['full_name'] ?></td>
				<td><?php echo $result['email'] ?></td>
				<td><?php echo $result['phone'] ?></td>
				<td><?php echo $result['gender'] ?></td>
				<td><?php echo $result['address'] ?></td>
				<td><?php echo $result['work_field'] ?></td> 
				<td><?php echo $result['experience'] ?></td>
				<td><a href="worker-edit.php?wid=<?php echo $result['id'] ?>">Edit</a> | <a href="worker-delete.php?wid=<?php echo $result['id'] ?>">Delete</a> | <a href="worker-view.php?id=<?php echo $result['id'] ?>">View</a></td>
			</tr>
			<?php } ?>
	
		</table>


</body>

</html>