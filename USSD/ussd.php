<?php
header("Content-type:text/plane");

 require('..AfricasTalkingGateway.php');

 require('mysqli_connection.php');

$phone_number = $_POST['phoneNumber'];

$textFromMember = $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode = $_POST['serviceCode'];

if(empty($textFromMember)){

	$textFromMember = "0";

}else{

	$textFromMember = "0*".$textFromMember;

}

$inputArray = explode("*", $textFromMember);

$level = count($inputArray);

switch ($level) {

	case 1:

		$response = "CON Welcome to the NEMA (U) Limited";

	    $response .= "\n 1. Register";

	    $response .= "\n 2. Add a tree";

	    echo $response;

		break;

	case 2:		// text = 0*1  OR  0*2 

		 if($inputArray[1]   ==  1) {//wants to register// 

		 	echo "CON What is is your name?";



		 }elseif ($inputArray[1] == 2) {//wants to add a tree

		 	$checkmembers = $mysqli_connection->query("SELECT * FROM members WHERE PHONE_NUMBER = '$PHONE_NUMBER' ");

		 	if($checkmembers->num_rows == 0) 

		 		echo "END User with phone_number $phone_number has no account";

		 	else{

		 		while ($results = $checkmembers->fetch_assoc()) {

		 			echo "CON ".$results['name']."\n Enter the number of trees";

		 		}

		 	}
				
					  

		 
		 }else{

		 	echo "END Invalid option";

		 }
		  
		break;

	case 3: 

	     if($inputArray[1]   ==  1) {//he wants to register// // 0*1*

		 	$member_name = $inputArray[2];

		 	$savemember = $mysqli_connection->query("INSERT INTO members(PHONE_NUMBER,PERSON_NAME)VALUES('$PHONE_NUMBER','$PERSON_NAME')");

		 	if($saveUser){

		 		$message = "Hello ".$person_name." Thank you for registering with NEMA (U) ltd";		        
				$apikey     = "7c24837ad19e87b4f6c342f88458c3054d2870f92433e3786755c4c7b3c43125";			 
				$gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");

				$gateway->sendMessage($phone_number, $message); 

				echo "END Thank you for registering"; 

		 	}else{

		 		echo "END Failed to register ".$mysqli_connection->error;

		 	}


		 }elseif ($inputArray[1] == 2) {//he wants to add a tree// // 0*2*7837

		 	$number_of_trees = $inputArray[2];

		 	$checkmembers = $mysqli_connection->query("SELECT MEMBER_ID,PERSON_NAME FROM members WHERE PHONE_NUMBER = '$PHONE_NUMBER'");

		 	if($checkmembers->num_rows == 1){
		 
		 	while ($rows = $checkmembers->fetch_assoc()) {

		 		$member_id = $rows['id'];

		 	    $member_name = $rows['name'];

		 	    $sqliCon->query("INSERT INTO trees(member_id,number_of_trees)VALUES('$member_id','$number_of_trees')");

		 	    $message = "Hello $member_name, Thank you for conserving the Forests of Uganda. You have recorded $number_of_trees tree(s)";
			    $apikey     = "7c24837ad19e87b4f6c342f88458c3054d2870f92433e3786755c4c7b3c43125";			 
			    $gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");
			    $gateway->sendMessage($phone_number, $message);
		 	    echo "END $message";
		 		 
		 	}

		 }else{

		 	echo "END No member found";

		 }
	 
	}  

	 
		break;
	
	default:

		echo"The option selected is not valid";

		break;
}


