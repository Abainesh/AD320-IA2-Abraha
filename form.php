<?php
//stores the URL the request is sent to
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// define variables and initialize with empty values
$nameErr = $emailErr = "";
$name = $email =  $phoneNumber = $stateOfResidency = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_GET["name"];
        echo "Name: $name<br />";
    }

    if (empty($_GET["email"])) {
        $emaillErr = "Missing";
    }
    else {
        $email = $_GET["email"];
        echo "Email: $email<br />";
    }

    if (empty($_GET["phoneNumber"]))  {
        $phoneNumber = "";
    }
    else {
       $phoneNumber = $_GET["phoneNumber"];
        echo "Phone: $phoneNumber<br />";
    }
     if (empty($_GET["stateOfResidency"]))  {
        $stateOfResidency = "";
    }
    else {
        $stateOfResidency = $_GET["stateOfResidency"];
        echo "State: $stateOfResidency<br />";
    }
}

    //echo "Name: $name<br />";
        
    //echo "Email: $email<br />";
        
    //echo "Phone: $phoneNumber<br />";
        
    //echo "State: $stateOfResidency<br />";
    
?>

