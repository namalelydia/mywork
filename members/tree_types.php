<!DOCTYPE html>
<html>
<head>
	<title>TREE_TYPES</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<?php include 'header.php'; ?>


        <main class="py-4">
            <div class="container">
            	<h1>TREE_TYPES RECORDED</h1>
            	<hr>
            	<form method="POST" action="save_tree_type.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            		<label>Name</label><br>
            		<input type="text" name="tree_type_name" class="form-control">
            		<hr>

            		<button type="Submit" class="btn btn-success"> Save tree_type</button></div>

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12"></div>
            </div>
        </main>
         	</form>
         	<hr>
         	<table class="table">
         		<thead>
         			<th>ID</th> <th>Name</th>
         		</thead>
         		<tbody>
         			<?php require('read_tree_types.php')?>
         		</tbody>
         	</table>


</body>
</html>