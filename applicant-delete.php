<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	
	$sql = "delete from job_form where id =".$_GET['aid'];
	
	$qry = $conn -> query($sql);
	
	header('location:applicant-list.php');
	
	//session_start();
	//session_destroy();
	
	session_start();
	if (isset($_SESSION['message'])){
		$msg = $_SESSION['message'];
	}
	else{
		$msg = '';
	}
	
?>