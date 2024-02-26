<?php
// Include database connection
include 'db.php';

// Delete selected contacts
if (isset($_POST['delete'])) {
    $ids = implode(",", $_POST['delete']);
    $query = "DELETE FROM contacts WHERE id IN ($ids)";
    mysqli_query($conn, $query);
}

// Redirect to list page
header("Location: list.php");
exit();
?>
