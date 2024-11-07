<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Types Demo</title>
</head>
<body>
	<form>
		<label for="txtFirstName">First Name: </label>
	<input type="text" name="txtFirstName" id="txtFirstName" autofocus required ><br>

	<label for="txtLastName">Last Name: </label>
	<input type="text" name="txtLastName" id="txtLastName" ><br>


	<label for="txtPassword">Password: </label>
	<input type="Password" name="txtPassword" id="txtPassword" required ><br>
	
	<input type="submit" name="btnSave" value="Send">
	<!-- <button type="Submit">Send</button> -->
	<input type="Reset" name=""> <br>

	<input type="radio" name="radSex" id="radMale" value="Male" checked>
	<label for="radMale">Male</label> <br>

	
	<input type="radio" name="radSex" id="radFemale" value="Female">
	<label for="radFemale">Female</label> <br>

	<input type="checkbox" name="chkCars" id="chkBike" value="Bike"> 
	<label for="chkBike">I have a Bike.</label> <br>

	<input type="checkbox" name="chkCars" id="chkCar" value="Car"> 
	<label for="chkCar">I have a Car.</label> <br>

	<input type="checkbox" name="chkCars" id="chkMotor" value="Motor"> 
	<label for="chkMotor">I have a Motor.</label> <br>


	<label for="clrTheme">Select a Color: </label>
	<input type="color" name="clrTheme" id="clrTheme"> <br>

	<label for="dtpBirthday">Birthday:</label>
	<input type="date" name="dtpBirthday" id="dtpBirthday" value="2000-01-01"> <br>

	<label for="txtEmail">Email Address:</label>
	<input type="email" name="txtEmail" id="txtEmail"> <br>

	<label for="filPhoto">Select a File:</label>
	<input type="file" name="filPhoto" id="filPhoto"> <br>

	<label for="txtNumber">Enter Quantity:</label>
	<input type="number" name="txtNumber" id="txtNumber" min="2" max="9"> <br>

	<label for="txtVolume">Select Volume:</label>
	<input type="range" name="txtvolume" id="txtvolume" min="0" max="50"> <br>

	<label for="txttelephone">Enter Telephone Number:</label>
	<input type="tel" name="txttelephone" id="txttelephone" pattern="[0-9]{3}[0-9]{2}[0-9]{3}" maxlength="10"> <br>

	<label for="txtTime">Select Time:</label>
	<input type="time" name="txtTime" id="txtTime"> <br>

	<label for="txtURL">Add URL:</label>
	<input type="url" name="txtURL" id="URL" > <br>



	</form>
</body>
</html>