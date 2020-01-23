<?php
// 4 variables to connect to the $database_in_use
$host = "localhost";
$username = "root";
$user_pass = "password";
$database_in_use = "jokedatabase";


//create a database connection instance
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

//if there are any vlaues in table, display them one at a time
if ($mysqli->connect_errno){
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
