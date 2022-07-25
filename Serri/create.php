<?php

require_once "db_connect.php";

$email = $_POST["email"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];

$sql = "INSERT INTO users (f_name, l_name, email) VALUES ('$fname','$lname','$email')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "User has been created";
} else {
    echo "Error";
}