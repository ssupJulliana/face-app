<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HTML Form Elements</title>
</head>
<body>
<form>
	<input type="" name=""> 
	<hr>
	<select name="drpCars" size="4" multiple>
		<option value="Almera">Almera</option>
		<option value="Raize" selected>Raize</option>
		<option value="Hilux">Hilux</option>
		<option value="Land Cruiser">Land Cruiser</option>
		<option value="Audi">Audi</option>
		<option value="Camry">Camry</option>

	</select>

	<hr>

	<textarea name="textPost" rows="10 cols"30"></textarea>

	<hr>

	<button type="button">Click Me!</button>


	<hr>

	<fieldset>
		<legend>Personal Information: </legend>
		First Name: <input type="" name=""><br>
		<hr>
		Last Name: <input type="" name=""><br>
	</fieldset>

	<hr>
	<input type="text" name="dlistBrowsers" list="browsers">
	<datalist id="browsers">
		<option value="Google Chrome">
		<option value="Microsoft Edge">
		<option value="Internet Explorer">
		<option value="Opera">

	</datalist>
</form>
</body>
</html>