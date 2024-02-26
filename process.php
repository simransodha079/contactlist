<?php
// Include database connection
include 'db.php';

// Check if form is submitted
if(isset($_POST['delete'])) {
    // Retrieve the IDs of contacts to delete
    $delete_ids = $_POST['delete'];

    // Prepare the delete query
    $placeholders = implode(',', array_fill(0, count($delete_ids), '?'));
    $query = "DELETE FROM contacts WHERE id IN ($placeholders)";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        // Bind parameters
        foreach ($delete_ids as $key => $id) {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Redirect back to list page
        header("Location: list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If form is not submitted, redirect back to list page
    header("Location: list.php");
    exit();
}

// Close database connection
mysqli_close($conn);
?>
