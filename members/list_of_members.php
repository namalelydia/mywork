<!DOCTYPE html>
<html>

<?php require('mysqli_connection.php') ?>

<head>
	<meta charset="utf-8">
	<title>MEMBERS</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">

</head>
<body>
		<?php include 'header.php'; 

			$members = $mysqli_connection->query("SELECT MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD FROM users");

		?> 

		<main class ="py-4">
			<div class ="container">

				<h2>list of members</h2>
				<hr>

            <table class="table table-striped table-hover">
            	<thead>
            		<th>ID</th>
            		<th>NAME</th>
            		<th>PHONE</th>
            		<th>EMAIL</th>
            		<th>DISTRICT</th>
            	</thead>
            	<tbody>
            		
            		<?php

            			foreach($users as $key => $value){

            				$id = $value["ID"];
            				$name = $value["NAME"];
            				$phone = $value["PHONE_NUMBER"];
            				$email = $value["EMAIL"];
            				$district = $value["DISTRICT_NAME"];

            				echo "

            				<tr>
            					
            				<td>$id</td>
            				<td>$name</td>
            				<td>$phone</td>
            				<td>$email</td>
            				<td>$district</td>

            				</tr>"


            			                               };
            		?>
            	</tbody>
            </table>
			</div>
		</main>
</body>
</html>