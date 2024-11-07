<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

	/*$grade = 70;

	if($grade > 74.4)
		echo 'Passed!';

	else
		echo 'Failed!'; */


		//Laderize if
		/*$grade = 72;

		if($grade > 100)
			echo 'Out of Range!';

		elseif($grade > 74.4)
			echo 'Passed!';

		elseif($grade > 64.4)
			echo 'Failed!';
		else
			echo 'Out of Range!'; */
		
		//nested if
		/*$sex = 'male';
		$age = 18;

		if($sex == 'female'){
			if($age == 18)
				echo 'Debuntant';

			else
				echo 'Not Debuntant';
		}
		elseif ($sex == 'male'){
			if ($age == 21)
				echo 'Debuntant';
			else
				echo ' Not Debuntant';
		}
		else
			echo 'Invalied Sex!'; */

			// Laderize if with logical Operator
			/*$sex = 'female';
			$age = 21;

			if($sex == 'female' and $age == 18)
				echo 'Debutant';
			elseif($sex == 'male' && $age ==21)
				echo 'Debutant';
				else 
					echo 'Not Debutant'; */


			$colorCode = 'O';

			/*if(strtoupper($colorCode) == 'R')
				echo 'Red';
			elseif($colorCode == 'G')
				echo 'Green';
			elseif($coloCode == 'B')
				echo 'Blue';
			else
				echo 'Unknown Color'; */

				switch(strtoupper($colorCode)) {
					case 'R';
					echo 'Red';
					break;
					case 'O';
					echo 'Orange';
					break;
					default:
					echo 'Unknown Color';
				}



?>


</body>
</html>