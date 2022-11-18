<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$mobile = $_POST["mobile"];
$category = filter_input(INPUT_POST, "category", FILTER_VALIDATE_INT);

include('connection.php');

$sql = "INSERT INTO users (firstname, lastname, email, mobile, category) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssssi", $firstname, $lastname, $email, $mobile, $category);

mysqli_stmt_execute($stmt);

echo "Record saved in database";

?>