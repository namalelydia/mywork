<?php

require('mysqli_connection.php');
require('../africastalking_gateway.php');

$member = $_POST['member_id']
$pName = $_POST['person_name'];
$phonenumber = $_POST['phone_number'];
$email = $_POST['email_address'];
$district = $_POST['district_id'];
$member_password = md5$_POST['member_password'];
$confirm_password = md5$_POST['confirm_password'];

if($member_password != $confirm_member_password){

	echo " they didnot match";
	exit();
	
}
sql_connection->query("INSERT INTO members(MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD) VALUES('$member','$pName','$email','$phonenumber','$district','$member_password')");

header("location:list_of_members.php");