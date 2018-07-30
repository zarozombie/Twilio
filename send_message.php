<?php
include_once 'header.php';
?>

<body>
<a href="/Twilio/index.php">Home</a>

<?php
//------------------------------------------------------------------------------------------------------------------------------
	//Message template
		// Use the client to do fun stuff like send text messages!
		// $client->messages->create(
		//     // the number you'd like to send the message to
		// 	$number,
		//     array(
		//         // A Twilio phone number you purchased at twilio.com/console
		// 		'from' => $twilio_number,
		// 		// the body of the text message you'd like to send
		//         'body' => 'This is a test message to $name!'
		//     )
		// );

//------------------------------------------------------------------------------------------------------------------------------

// message to my phone number
?>
<hr>
<?php
$client->messages->create(
	$number,
    array(
		'from' => $twilio_number,
        'body' => 'Greetings! The current time is:' . $t .  ' HDXKKJWBTQ8OK41'
    )
);
?>
<center>
<h2>Message Sent!</h2>
</center>
<hr>

<?php
//------------------------------------------------------------------------------------------------------------------------------


	//message to +1 209 210 4311 or +44 7481 360673
	// $client->messages->create(
	// 	'+12092104311',
	//     array(
	// 		'from' => $twilio_number,
	// 		// 'body' => 'Here is a second text'
	// 		'body' => 'Greetings! The current time is:' . $t .  ' HDXKKJWBTQ8OK41'
	// 		// 'body' => 'HDXKKJWBTQ8OK41'
	//     )
	// );

	// Send an outbound text message to +1 209 210 4311 or +44 7481 360673 using a script run on your computer:

	// Your text message should say "Greetings! The current time is: XXXXXX HDXKKJWBTQ8OK41" using the current date and time.
//------------------------------------------------------------------------------------------------------------------------------
?>


</body>
</html>

