<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data (Received)</title>
</head>
<body>
	<?php
		
		//use $_GET is you use get method on your form
		/*$firstname = $_GET['txtFirstName'];
		$lastname =  $_GET['txtLastName'];
		$sex = $_GET['radSex'];

		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else 
			echo "Hello, Ma'am $firstname $lastname"; */



			// use $_Post is you use post method on your form
		/*$firstname = $_POST['txtFirstName'];
		$lastname =  $_POST['txtLastName'];
		$sex = $_POST['radSex'];

		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else 
			echo "Hello, Ma'am $firstname $lastname"; */

		// You can use request even that you are using either get or post on the other form
		$firstname = $_REQUEST['txtFirstName'];
		$lastname =  $_REQUEST['txtLastName'];
		$sex = $_REQUEST['radSex'];

		if ($sex == 'Male') 
			echo "Hello, Sir $firstname $lastname";
		else 
			echo "Hello, Ma'am $firstname $lastname";


		


	?>
</body>
</html>