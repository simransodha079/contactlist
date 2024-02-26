<?php
// Include database connection
include 'db.php';

// Retrieve form data
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$address = $_POST['address'];
$note = $_POST['note'];

// Insert data into database
$query = "INSERT INTO contacts (name, number, email, address, note) VALUES ('$name', '$number', '$email', '$address', '$note')";
mysqli_query($conn, $query);

// Redirect to create page
header("Location: create.php");
exit();
?>
