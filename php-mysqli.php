<?php

$mysqli-connection = new mysqli("localhost","root","");

$sql string= $mysqli-connection ->query("CREATE DATABASE internship");

if ($sql string ){

echo ("created DATABASE");

}else{

	echo $mysqli-connection->error;
}