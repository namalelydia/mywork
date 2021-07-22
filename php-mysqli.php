<?php

$host="localhost";
$username="root";
$password="";

$mysqli_connection = new mysqli("localhost","root","");

$mysqli_connection->query("CREATE  DATABASE IF NOT EXISTS nema_project");

if($mysqli_connection){

echo "database created";

}else{


	echo $mysqli_connection->error;


}

$mysqli_connection->query("CREATE DATABASE nema_project");

$result = mysqli_select_db($mysqli_connection,nema_project);

if($result){

	echo "database selected"; 

}else{

	echo "no selected database;
}


 $mysqli_connection->query("CREATE TABLE IF NOT EXISTS district(
   DISTRICTID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(DISTRICT-ID),
   DISTRICT-NAME VARCHAR(20) NOT NULL,UNIQUE);
   












