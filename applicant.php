<html>
<head>
	<title>Job Application</title>
</head>
<body>

	<h2>Job Application</h2>
	<form action="applicant-link.php" method="post" enctype="multipart/form-data">
		
		<table border="1">
		<caption><b>Job Application</b></caption>
			<tr>
				<td>Applicant Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Applicant Email</td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>Applicant Phone Number</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td>Address Details</td>
				<td><textarea rows="4" cols="34" name="address"></textarea></td>
			</tr>
			<tr>
				<td>Select Gender</td>
				<td>
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="other">Other
				</td>
			</tr>
			<tr>
				<td>Known Programing Language</td>
				<td>
				<input type="checkbox" name="language[]" value="c++">c++
				<input type="checkbox" name="language[]" value="python">python
				<input type="checkbox" name="language[]" value="php">php
				<input type="checkbox" name="language[]" value="java">java
				</td>
			</tr>
			<tr>
				<td>Select Your Working Experience</td>
				<td>
				<select name="experience">
				<?php 
				for($i=0; $i<=5; $i++) {
				?>
				<option value="<?php echo $i ?>"year><?php echo $i ?>Year</option>
				<?php } ?>
				</select>
				</td>
			</tr>
			<tr>
			<td>Upload Your Photo</td>
			<td><input type="file" name="photo" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>