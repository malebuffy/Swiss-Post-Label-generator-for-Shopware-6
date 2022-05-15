<?php

// Login Database credentials
$sname= "your host/server name";
$unmae= "login_database_username";
$password = "login_database_password";
$db_name = "login_database_name";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection to the login database failed!";

}