<?php
	if(isset($_POST["submit"]))
	{
		session_start();
		$session['img']=$_post["fileToUpload"];
		header("Location:animals.php");
	}
?>
<html>
	<body style="background-color:lightblue;">
	<head>
	    <title>Pixel6 Assignment</title>
	</head>
	<form method="post" action="animals.php">
	<center>
	<table>
		<tr>
			<td><b>Name</b>  </td><td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><b>Category</b>  </td>
			<td>
				<input type="radio" name="category" value="Herbivores">Herbivores<br>
				<input type="radio" name="category" value="Omnivores">Omnivores<br>
				<input type="radio" name="category" value="Carnivores">Carnivores
			</td>
		</tr>
		<tr>
			<td><b>Select image to upload:</b></td>
			<td><input type="file" name="fileToUpload" id="fileToUpload">
				  <input type="submit" value="Upload Image" name="submit">
			</td>
		</tr>
		<tr>
			<td><b>Description</b>  </td><td><Textarea name="textarea" rows="2" cols="40"></Textarea></td>
		</tr>
		<tr>
			<td><b>Life Expectancy</b>  </td>
			<td>
				<select name="lifeExpectancy" size="1">
				<option>0-1 year</option>
				<option>1-5 year</option>
				<option>5-10 year</option>
				<option>10+ year</option>
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" name="Submit" value="Submit"></center></td>
		</tr>
		
	</table>
	</center>
	</form>
	</body>
</html>