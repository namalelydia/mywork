<?php

$sql_connection = new mysqli("localhost","root","");

$sql_connection->query("CREATE DATABASE IF NOT EXISTS nema");

mysqli_select_db($sql_connection,'nema');

$sql_connection->query("CREATE TABLE IF NOT EXISTS district(DISTRICTID int(11) NOT NULL AUTO-INCREMENT ,PRIMARY KEY(DISTRICTID), DISTRICTNAME  VARCHAR(20) NOT NULL UNIQUE)");

if($sql_connection){

	echo "table created";
}else{

	echo "table not created";
}
