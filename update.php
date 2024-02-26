<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $note = $_POST['note'];

    // Update contact in database
    $query = "UPDATE contacts SET name='$name', number='$number', email='$email', address='$address', note='$note' WHERE id='$id'";
    if(mysqli_query($conn, $query)) {
        // Redirect back to list page
        header("Location: list.php");
        exit();
    } else {
        echo "Error updating contact: " . mysqli_error($conn);
    }
} else {
    // Redirect to list page if form is not submitted
    header("Location: list.php");
    exit();
}

// Close database connection
mysqli_close($conn);
?>
