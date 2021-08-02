<html></!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>climate</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>

 <?php include 'header.php'; ?>
 
<main class="py-4">
            <div class="container">

            	<h1> Districts Involved</h1>
            	<hr>

            	<form method="POST" action="save_district.php">

            		<div class="row">
            			<div class = "col-md-6 col-lg-6 col-sm-12 col-xs-12">

            				<label>NAME</label><br>
            				<input type="text" name="district_name" class="form-control">
            				<br>
            				<br>
            				
                            <button type="submit" class="btn btn-success">Save district</button>
            			 
            			</div>
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            			 
            			</div>
            		</div> 
        </main>           		

            	</form>

            	<hr>

            	<table >
            		<thead>
                        <tr>
            			<th>DISTRICT_ID</th> <th>DISTRICT_NAME </th>
                    </tr>
            		</thead>

            		<tbody>

            			 <tr><?php require('read_districts.php') ?></tr>

            		</tbody>
            	</table>


            </body>
</html>>