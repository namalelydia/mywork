
<!DOCTYPE html>
<html>

<?php require('mysqli_connection.php') ?>

<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">

</head>
<body>
		<?php include 'header.php'; ?> 

		<main class ="py-4">
			<div class ="container">

				<h2>Create an account</h2>
				<hr>

				<form method ="POST" action="save_member.php">
					<div class="row">
						<div class="col-md-6">
							<lable>Name</lable><br>
							<input type="text" name="person_name" class="form-control" required><br>

              <lable>phone_number</lable><br>
							<input type="text" name="phone_number" class="form-control" required><br>

              
              <lable>email</lable><br>
							<input type="email" name="email_address" class="form-control"required><br>
							<br>

							<lable>district</lable><br>
							<input type="district" name="district" class="form-control" required><br>
              
             <label>Password</label><br>
            <input type="Password" name="member_password" class="form-control" required>
            <br>
            <br>
            <label>Confirm  Password</label><br>
            <input type="password" name="confirm_user_password" class="form-control">
            

            <hr>

            <button type="submit" class="btn btn-success">Register</button>

						</div>
					</div>
				</form>
			</div>
		</main>
	</body>
	</html>

		
            			
    