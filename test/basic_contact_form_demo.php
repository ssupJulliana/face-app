<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Contact Form </title>
</head>
<body>
	<h2>Basic Contact Form</h2><hr>
	<form method="post">

		<label for="txtName">Name: <sup style="color:darkred;">*</sup></label> <br>
		<input type="text" name="txtName" id="txtName" autofocus required><br>


		<label for="txtEmail">Email: <sup style="color:darkred;">*</sup></label> <br>
		<input type="email" name="txtEmail" id="txtExamil"  required><br>

		<label for="txtSubject">Subject: <sup style="color:darkred;">*</sup></label> <br>
		<input type="text" name="txtSubject" id="txtSubject" required><br>

		<label for="txtMessage">Message: <sup style="color:darkred;">*</sup></label> <br>
		<textarea name="txtMessage" id="txtMessage" rows="5" cols="30" required></textarea> <br>
		
		<button type="submit" name="btnSend">Send</button>


	</form>
	<hr>

	<?php if(isset($_REQUEST['btnSend'])): ?>
			

	<h2>Thank You!</h2>
	<p>Here is the information you have submitted: </p>
	<?php

		$name = $_REQUEST['txtName'];
		$email = $_REQUEST['txtEmail'];
		$subject = $_REQUEST['txtSubject'];
		$message = $_REQUEST['txtMessage'];

		?>
		<ul> 
			<li><b>Name: </b><?php echo $name; ?> </li>
				<li><b>Email: </b><?php echo $email; ?> </li>
					<li><b>Subject: </b><?php echo $subject; ?> </li>
						<li><b>Message: </b><?php echo $message; ?> </li>
		</ul>

	<?php endif; ?>



</body>
</html>