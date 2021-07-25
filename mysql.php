<?php

$mysqli_connection =new mysqli("localhost","root","");

$mysqli_connection->query("CREATE DATABASE IF NOT EXISTS climate_change_forum");

mysql_select_db($mysqli_connection,"climate_change_forum");


$mysqli_connection->query("CREATE TABLE IF NOT EXISTS districts(ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),NAME VARCHAR(20) NOT NULL UNIQUE");

$mysqli_connection->query("INSERT INTO  districts(ID,NAME)VALUES('011','mubende')");

if($mysqli_connection){

	echo "inserted successfully";

}else{

	echo "$mysqli_connection->error";
}

$mysqli_connection->query("INSERT INTO  districts(ID,NAME)VALUES('012','kira')");
$mysqli_connection->query("INSERT INTO  districts(ID,NAME)VALUES('013','mityana')");
$mysqli_connection->query("INSERT INTO  districts(ID,NAME)VALUES('014','buloba')");
$mysqli_connection->query("INSERT INTO  districts(ID,NAME)VALUES('015','wakiso')");

$mysqli_connection->query(UPDATE districts SET NAME = 'kotido' WHERE ID='014');

if($mysqli_connection){

	echo "table districts updated";
}else{

	echo "table not updated";
}

$mysqli_connection->query("DELETE FROM districts WHERE ID='015');


$mysqli_connection->query(" CREATE TABLE IF NOT EXISTS members(ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),NAME VARCHAR(20) NOT NULL UNIQUE)");

$mysqli_connection->query("CREATE TABLE IF NOT EXISTS  tree_types(ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),TYPE_NAME VARCHAR(20) NOT NULL UNIQUE");

if($mysqli_connection){

	echo "table tree_types created";

}else{

	echo "table doesnt exists";
}

$mysqli_connection->query("INSERT INTO tree_types(ID,TREE_NAME)VALUES('001','musizi')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TREE_NAME)VALUES('002','nsujju')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TREE_NAME)VALUES('003','mutuba')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TREE_NAME)VALUES('004','musambya');

if($mysqli_connection){

	echo "insert successful";
}else{

	echo "insert unsuccessful";
}