<?php

require('mysqli_connection.php');

$pName = $_POST['person_name'];
$phonenumber = $_POST['phone_number'];
$email = $_POST['email_address'];
$district = $_POST['district_id'];
$member_password = $_POST['member_password'];
$confirm_password = $_POST['confirm_password'];

if($member_password == $confirm_member_password){

	echo "they matched";
	
}else{

	echo " they didnot match";
	
}