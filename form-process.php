<?php 

error_reporting(0);
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);


$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
/*if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}*/

// Phone Number
if (empty($_POST["phone"])) {
    $errorMSG .= "Number is required ";
} else {
    $phone_number = $_POST["phone"];
}

  MSG SUBJECT
if (empty($_POST["subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $subject = $_POST["subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

$EmailTo = "careers@bhavnapanwar.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
/*if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "We Will Get Back To You Soon";
    } else {
        echo $errorMSG;
    }
}

*/// redirect to success page
if ($success && $errorMSG == ""){
   echo "Thank You! Your message has been sent.";
}else{
    if($errorMSG == ""){
        echo "We Will Get Back To You Soon"; // 
    } else {
         echo "We Will Get Back To You Soon";
    }
}


?>