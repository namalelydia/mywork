<?php

require('mysqli_connection.php');
$pName = $_POST['person_name'];
$phonenumber = $_POST['phone_number'];
$email = $_POST['email_address'];
$district = $_POST['district_id'];
$member_password = md5$_POST['member_password'];
$confirm_member_password = md5$_POST['confirm_member_password'];

if($member_password != $confirm_member_password){
	echo "password didnot match";
	exit();
}

$mysqli_connection->query("INSERT INTO members(PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD)VALUES('$pName','$email','$phonenumber','$district','$member_password')");

$message = "hello".$pName."thank yuo for creating an account wiyh climate change uganda.You wil login with your email and password ,our team leader will contact you shortly for more information";
$username = "sandbox";
$apikey = "   "
$recipients = "256703777117";//$ or pNumber
$gateway = new AfricasTalkingGateway($username,$apikey,"sandbox");
$gateway->sendmessage($recipients,"it has worked now");

header("location:list of members.php");