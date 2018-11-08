<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "";

$connection = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);

if ($connection->connect_error) {
	echo "Error";
	die("Connection Failed". $connection->connect_error);
}else{
	echo "Connected";
}		

?>