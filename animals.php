<?php
	session_start();
	
	echo $_POST["name"];
	$_SESSION["img"] = $_POST["fileToUpload"];
	
?>

<html>
<body>
	<img src="<?php  $_SESSION["img"].jpg; ?>" height="200" width="200"/>
</body>
</html>