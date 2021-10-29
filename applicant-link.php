<html>
	<a href="applicant.php">Back to submit form</a>
	<br>
</html>
<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	
	//echo "<pre>";
	//print_r ($_POST);
	
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$phone = $_POST['phone'];
	$addr = $_POST['address'];
	$gen = $_POST['gender'];
	$langs = implode(',', $_POST['language']);
	$exp = $_POST['experience'];
	$imgName = $_FILES['photo']['name'];
	
	
	if(isset($_POST['submit'])){
	$sql ="insert into job_form(name, mail, phone, address, gender, language, experience, photo_file) values('$name', '$email', '$phone', '$addr', '$gen', '$langs', '$exp', '$imgName')";
	$qry = $conn -> query($sql);
	
	if($qry){
		$_SESSION['message'] = 'Data saved successfully';
		
		$moveTo = "allImages/".$imgName;
		move_uploaded_file($_FILES['photo']['tmp_name'], $moveTo);
	}
	else{
		$_SESSION['message'] = 'Something is wrong';
	}
	}
	
	if(isset($_POST['update'])){
		$sql = "update job_form set name='$name', mail='$email', phone='$phone', address='$addr', gender='$gen', language='$langs', experience='$exp', photo_file='$imgName' where id =".$_POST['jid'];
		
		$qry = $conn->query($sql);
		
		if($qry){
			$_SESSION['message'] = 'Data Updated';
		}
		else{
			$_SESSION['message'] = 'Something Wrong';
		}
	}
	
	
	header('location:applicant-list.php');
?>