<?php

$host = "localhost";
$dbname = "new-db";
$username = "root";
$password = "1234";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
die("Connection error: " . mysqli_connect_errno());
}

?>