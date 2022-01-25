<?php

$server = "us-cdbr-east-05.cleardb.net";
$username = "b7673f705fa0e9";
$password = "b00d438d";
$database = "heroku_916113dc74beb91";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn) { // If check Connection
    die("<script>alert('Connection Failed')</script>");
}

?>