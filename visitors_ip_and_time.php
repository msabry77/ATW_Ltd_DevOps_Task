<?php

$servername = "localhost";
$username = "msabry";
$password = "msabry";
$database = "php_db";
//Connect to the MySQL database

$mysqli = new mysqli($servername , $username, $password, $database);

// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
       exit();
     }

// Get the visitor's IP address
$ip_address = $_SERVER['REMOTE_ADDR'];

//to get the local time 
date_default_timezone_set("Africa/Cairo");

//Get the current time
$time = date('Y-m-d H:i:s');

// Insert the visitor's IP address and time into the `visitors` table
$sql = "INSERT INTO `visitors` (`ip_address`, `time`) VALUES ('$ip_address', '$time')";
if ($mysqli->query($sql) === TRUE) {
   echo "New record created successfully <br> ";
    } else {
       echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

//Display a message that includes the visitor's IP address and current time
	echo "Your IP address is " . $ip_address . "<br> and the current time is " . $time ;
?>
