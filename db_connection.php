<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "school_maintenance";

// Create connection
$db_connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}
?>