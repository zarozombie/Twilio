<?php
    require __DIR__ . '..\..\..\php\vendor\autoload.php';
    require '../twilio_config.php';
    use Twilio\Twiml;
    session_start();

    global $number;
    global $name;

    $counter = $_SESSION['counter'];
    if(!strlen($counter)) {
        $counter = 0;
    } 
    $counter++;
    $_SESSION['counter'] = $counter;

    $list1 = $_SESSION["list1"];
        // $list2 = $_SESSION["list2"];
        
        // if($list1 == NULL){
        //     $list1 = "orange";
        // }

    $list1 = array("orange","banana","apple");
    $_SESSION['list1'] = $list1;

        // $list2 = "banana";
        // $_SESSION['list2'] = $list2;

    // //There are quite a few ways to work with dynamic arrays in PHP. Initialise an array:
    // $array = array();

    // //Add to an array:
    // $array[] = "item";
    // $array[$key] = "item";
    // array_push($array, "item", "another item");
    
    // //Remove from an array:
    // $item = array_pop($array);
    // $item = array_shift($array);
    // unset($array[$key]);


    if($_POST['Body']=='ADD'){
        $add = new Twiml;
        $add->message("You have Pressed ADD Enter an Item ADD");
        print $add;
    }elseif($_POST['Body']=='REMOVE'){
        $del = new Twiml;
        $del->message("You have Pressed REMOVE Enter an Item to remove");
        print $del;
    }elseif($_POST['Body']=='LIST'){
        $list = new Twiml;
        $list->message($list1[0]. '\n' . $list1[1]. "%0a" .$list1[2]);
        print $list;
    }else{
    
    // array_push($stack, "apple", "raspberry");
    $response = new Twiml;
    //send multiple messages for to-do list
    // for ($x = 1; $x <= 2; $x++) {
    //     $response->message($_SESSION['list'.(string)$x]);
    // } 
    $response->message("Please press ADD, REMOVE or LIST");
    // $response->message("This conversation is " . $_SESSION['counter'] . " messages in");
    print $response;
    }
?>


