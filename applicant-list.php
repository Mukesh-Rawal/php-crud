<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	$sql = "select * from job_form";
	$qry = $conn->query($sql);
	
	session_start();
	if (isset($_SESSION['message'])){
		$msg = $_SESSION['message'];
	}
	else{
		$msg = '';
	}
?>
<html>
	<head>
	<title>Applicant Details</title>
	</head>
	<body>
		<a href="applicant.php">Back to the form</a>
		<table border="1">
		<caption>Applicant List</caption>
		<caption style="color:red"><h2><?php echo $msg ?></h2></caption>
		
		<tr>
			<td>S.No</td>
			<td>Name</td>
			<td>Mail</td>
			<td>Address</td>
			<td>Gender</td>
			<td>Languages</td>
			<td>Experience</td>
			<td>Action</td>
		</tr>
		
		<?php 
		while($result = mysqli_fetch_assoc($qry)){
		?>
		<tr>
			<td><?php echo $result['id'] ?></td>
			<td><?php echo $result['name'] ?></td>
			<td><?php echo $result['mail'] ?></td>
			<td><?php echo $result['address'] ?></td>
			<td><?php echo $result['gender'] ?></td>
			<td><?php echo $result['language'] ?></td>
			<td><?php echo $result['experience'] ?></td>
			<td><a href="applicant-edit.php?jid=<?php echo $result['id'] ?>">Edit</a> | <a href="applicant-delete.php?aid=<?php echo $result['id'] ?>">Delete</a> | <a href="applicant-view.php?rid=<?php echo $result['id'] ?>">View</a></td>
		</tr>
		<?php } ?>
		</table>
	</body>
</html>