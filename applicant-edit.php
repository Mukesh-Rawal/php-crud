<?php
	$conn = mysqli_connect('localhost', 'root', '', 'bachup_data');
	
	$sql = "select * from job_form where id=".$_GET['jid'];
	
	$qry = $conn->query($sql);
	
	$result = mysqli_fetch_assoc($qry);
	
	$langs = explode(',', $result['language']);
?>
<html>
<head>
	<title>Job Application Edit</title>
</head>
<body>

	<h2>Edit Job Application</h2>
	<form action="applicant-link.php" method="post" enctype="multipart/form-data">
		
		<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
		
		<table border="1">
		<caption><b>Job Application</b></caption>
			<tr>
				<td>Applicant Name</td>
				<td><input type="text" name="name" value="<?php echo $result['name'] ?>"></td>
			</tr>
			<tr>
				<td>Applicant Email</td>
				<td><input type="text" name="mail" value="<?php echo $result['mail'] ?>"></td>
			</tr>
			<tr>
				<td>Applicant Phone Number</td>
				<td><input type="text" name="phone" value="<?php echo $result['phone'] ?>"></td>
			</tr>
			<tr>
				<td>Address Details</td>
				<td><textarea rows="4" cols="34" name="address"><?php echo $result['address'] ?></textarea></td>
			</tr>
			<tr>
				<td>Select Gender</td>
				<td>
				<input type="radio" name="gender" value="male" <?php echo ($result['gender'] == 'male') ? 'checked' : '' ?>>Male
				<input type="radio" name="gender" value="female" <?php echo ($result['gender'] == 'female') ? 'checked' : '' ?>>Female
				<input type="radio" name="gender" value="other" <?php echo ($result['gender'] == 'other') ? 'checked' : '' ?>>Other
				</td>
			</tr>
			<tr>
				<td>Known Programing Language</td>
				<td>
				<input type="checkbox" name="language[]" value="c++" <?php echo (in_array('c++', $langs)) ? 'checked' : '' ?>>c++
				<input type="checkbox" name="language[]" value="python" <?php echo (in_array('python', $langs)) ? 'checked' : '' ?>>python
				<input type="checkbox" name="language[]" value="php" <?php echo (in_array('php', $langs)) ? 'checked' : '' ?>>php
				<input type="checkbox" name="language[]" value="java" <?php echo (in_array('java', $langs)) ? 'checked' : '' ?>>java
				</td>
			</tr>
			<tr>
				<td>Select Your Working Experience</td>
				<td>
				<select name="experience">
				<?php 
				for($i=0; $i<=5; $i++) {
				?>
				<option value="<?php echo $i ?>"year <?php echo ($result['experience'] == $i ) ? 'selected' : '' ?>><?php echo $i ?>Year</option>
				<?php } ?>
				</select>
				</td>
			</tr>
			<tr>
			<td>Upload Your Photo</td>
			<td><input type="file" name="photo" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>