<?php

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$mobile = $_POST["mobile"];
$category = filter_input(INPUT_POST, "category", FILTER_VALIDATE_INT);

include('connection.php');

$sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', email='$email', mobile='$mobile', category='$category' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>