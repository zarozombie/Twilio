<!DOCTYPE html>
<html>

<head>
    <title>Testing Twilio API</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    
    <?php
        // Twilio SDK
        require __DIR__ . '..\..\..\php\vendor\autoload.php';
        require '../twilio_config.php';
        // Use the REST API Client to make requests to the Twilio REST API
        use Twilio\Rest\Client;
        use Twilio\Twiml;
        //------------------------------------------------------------------------------------------------------------------------------
        // Your Account SID and Auth Token from twilio.com/console
        global $sid;
        global $token;
        global $number;
        global $twilio_number;

        $client = new Client($sid, $token);
        $t=time();
        $date = date("Y-m-d",$t); 
    ?>

    <h2>
        <center>
            Links
        </center>
    </h2>
    <a href="/Twilio/index.php">Home</a><br>
    <a href="/Twilio/send_message.php">send SMS message</a><br>
    <a href="/Twilio/web_hook.php">receive text messages in a web application using a Twilio </a><br>
    <a href="/Twilio/template.php">Twilio template webpage</a>
    <style>
        body{
            background-color:lightblue;
        }
    </style>
</head>
