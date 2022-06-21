<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "petfinder";

$mysqli = new mysqli($host, $user, $pass, $dbname);
// Checking
if($mysqli->connect_error) {
    echo "Connect failed: " . $mysqli->connect_error;
    exit();
}