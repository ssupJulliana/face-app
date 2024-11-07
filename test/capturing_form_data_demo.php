<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Data</title>
</head>
<body>
	<form method="post" action="capturing_form_data_receiver_demo.php">
		<label for="txtFirstName">First Name</label>
		<input type="text" name="txtFirstName" id="txtFirstName" autofocus> <br>
		
		<label for="txtLastName">Last Name</label>
		<input type="text" name="txtLastName" id="txtLastName"> <br>
	
		<input type="radio" name="radSex" id="radSex" value="Male" checked> 
		<label for="radMale">Male</label> 

		<input type="radio" name="radSex" id="radSex" value="Female"> 
		<label for="radFemale">Female</label> <br>
		<button type="submit" name="btnSend">Send</button>



	</form>
</body>
</html>