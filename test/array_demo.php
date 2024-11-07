<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	
	// Three different declaration
	// Index Arrays
	/*$color = array("Red", "Green", "Blue");
	echo  $color[0]; */

	/*$pet = ["Dog", "Cat", "Pig"];
	echo $pet[2]; */

	/*$country[0] = "Philippines";
	$country[1] = "Japan";
	$country[2] = "Korea";
	$country[3] = "Russia";
	echo $country[2]; */

	//Associative Arrays
	/*$ages = array("Alejandro" => 22, "Buknoy" => 32, "Noy" => 28 );
	echo $ages['Alejandro']; */

	/*$sizes = ['small' => 10, 'medium' => 15, 'large' => 20];
	echo $sizes['small']; */

	/*$student['name'] = "Julliana";
	$student['grade'] = 96;
	$student['age'] = 20;

	echo $student['name'] . 'is ' . $student['age'] . 'grade' */

	//Multidimensional Arrays
	/*$contacts = array(
		array(
			'name' => 'Alejandro Faustino', 
			'email' => 'alejandrofstn@gmail.com' ,
			'sex' => 'Male'


		),

		array(
			'name' => 'Julliana Castaneda',
			'email' => 'jullianacastaneda@gmail.com',
			'sex' => 'Female'

		),

		array(
			'name' => 'Aiyah Lia Castaneda',
			'email' => 'Aiyahcastaneda@gmail.com',
			'sex' => 'Female'

		)


	); 

	echo $contacts[1]['email']; */


	/*$ages = array("Alejandro" => 22, "Buknoy" => 32, "Noy" => 28 );
	print_r($ages); // mas maganda to mas maikli
	echo '<br><br>';

	var_dump($ages); // eto makikita pa ang datatype
	echo '<br><br>';


	$student['name'] = "Julliana";
	$student['grade'] = 96;
	$student['age'] = 20;
	print_r($student);
	echo '<br><br>';

	var_dump($student); */

	//Foreach
	//$color = array("Red","Green", "Blue");
	/*
	foreach ($color as $key => $value) {
	echo $value . '<br>';
	}*/

	/*for($i=0; $i < count($color); $i++)
		echo $color[$i] . '<br>';

		// use foreach than that */



		// Associative Arrays
		/*$ages = array("Alejandro" => 22, "Buknoy" => 32, "Noy" => 28 );
		foreach ($ages as $key => $value) {
			echo $key . ' is '. $value . ' years old.  <br> ';
		} */




		$contacts = array(
		array(
			'name' => 'Alejandro Faustino', 
			'email' => 'alejandrofstn@gmail.com' ,
			'sex' => 'Male'


		),

		array(
			'name' => 'Julliana Castaneda',
			'email' => 'jullianacastaneda@gmail.com',
			'sex' => 'Female'

		)
	);

		/*foreach ($contacts as $keyContact => $valueContact) {
			foreach ($valueContact as $key => $value) {
				
				echo $value . '<br>';
			}
			echo '<br>';
		} */

		




?>
</body>
</html>