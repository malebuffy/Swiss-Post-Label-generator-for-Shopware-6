<?php

// Shopware Database credentials
$servername = "your host/server name";
$username = "shopware_database_username";
$password = "shopware_database_password";
$dbname = "shopware_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>