<!DOCTYPE html>
<html>
<head>
	<title>Twilio API Test</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		$t=time();
		$date = date("Y-m-d",$t);
	?>

</head>

<body>
	<center>
		<h1>
		Twilio API Test
		</h1>
		<hr>
		<h2>
			This is the current time
		</h2>
		<?php
			echo date("y-m-d",$t);
		?>
		<hr>
	</center>
	<?php
		include_once 'header.php';
	?>


</body>
</html>
