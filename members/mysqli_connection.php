<?php

$mysqli_connection = new mysqli("localhost","root","");

$mysqli_connection->query("CREATE DATABASE IF NOT EXISTS climate");

mysqli_select_db($mysqli_connection,"climate");

$string = $mysqli_connection->query("CREATE TABLE districts(DISTRICT_ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(DISTRICT_ID),NAME VARCHAR(20) NOT NULL UNIQUE)");

$insert = $mysqli_connection->query("INSERT INTO districts(NAME) VALUES ('KAYUNGA')");
$insert = $mysqli_connection->query("INSERT INTO districts(NAME) VALUES ('WAKISO')");
$insert = $mysqli_connection->query("INSERT INTO districts(NAME) VALUES ('KIREKA')");
$insert = $mysqli_connection->query("INSERT INTO districts(NAME) VALUES ('KIRA')");


 $string=$mysqli_connection->query("CREATE TABLE IF NOT EXISTS tree_types(TREETYPE_ID INT(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(TREETYPE_ID),NAME VARCHAR(20) NOT NULL UNIQUE)");

$mysqli_connection->query("INSERT INTO tree_types(ID,TYPE_NAME)VALUES('01','MUTUBA')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TYPE_NAME)VALUES('02','EUCALPTUS')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TYPE_NAME)VALUES('03','MUSAMBYA')");
$mysqli_connection->query("INSERT INTO tree_types(ID,TYPE_NAME)VALUES('04','DODO')");


$string = $mysqli_connection->query("CREATE TABLE IF NOT EXISTS  members(MEMBER_ID INT(11) NOT NULL AUTO_INCREMENT ,PRIMARY KEY(MEMBER_ID),PERSON_NAME VARCHAR(20) NOT NULL,EMAIL_ADDRESS VARCHAR(30) NOT NULL UNIQUE,PHONE_NUMBER VARCHAR(11) NOT NULL UNIQUE,DISTRICT_ID INT(11) NOT NULL,PASSWORD INT(100) NOT NULL,FOREIGN KEY(DISTRICT_ID) REFERENCES districts(DISTRICT_ID))");

$mysqli_connection->query("INSERT INTO members(MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD)VALUES('1','JOLLY','jolly@gmail.com','0703777171','3','1234')");

$mysqli_connection->query("INSERT INTO members(MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD)VALUES('2','JOSEPH','joseph@gmail.com','0703777345','7','8888')");


$mysqli_connection->query("INSERT INTO members(MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD)VALUES('3','LYDIA','lydia@gmail.com','0704567171','6','6464')");
if($mysqli_connection){

	echo "insertion successful";
}else{

	echo "unsuccessful";
}


$mysqli_connection->query("INSERT INTO members(MEMBER_ID,PERSON_NAME,EMAIL_ADDRESS,PHONE_NUMBER,DISTRICT_ID,PASSWORD)VALUES('4','LIPSON','lipson@gmail.com','0756789453','5','1278')");
	





	