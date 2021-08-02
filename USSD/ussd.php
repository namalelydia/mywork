<?php
header("content-type:text/plane");

$phone_number = $_POST['phonenumber'];

$textfromuser = $_POST['text'];

$sessionID = $_POST['sessionid'];

$serviceCode = $_POST['servicecode'];

$inputArray = explode("*",$textfromuser);



if(empty($inputArray)){

	$response = "CON welcome to the climate (U) Limited";

	$response .= -"\n 1.register";

	$response .= -"\n 2.Add a tree";





}