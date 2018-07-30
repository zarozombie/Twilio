<?php
    require __DIR__ . '..\..\..\php\vendor\autoload.php';
    use Twilio\Twiml;
    $response = new Twiml;
    $response->message("Hi! It looks like your phone number was born in " . $_POST['FromCountry']);
    print $response;
?>