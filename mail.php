<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['subject'];

$to = "youremail@mail.com";
$subject = "Gmedia";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n subject =" . $subject;
$headers = "From: noreply@madhufire.com" . "\r\n" .
"CC: madhujalagari143@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>