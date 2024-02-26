<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h2>Edit Contact</h2>
    <?php
    // Include database connection
    include 'db.php';

    // Check if contact ID is provided
    if(isset($_GET['id'])) {
        $contact_id = $_GET['id'];

        // Fetch contact details from the database
        $query = "SELECT * FROM contacts WHERE id = $contact_id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            $contact = mysqli_fetch_assoc($result);
            ?>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                <label>Name:</label><br>
                <input type="text" name="name" value="<?= $contact['name'] ?>" required><br>
                <label>Number:</label><br>
                <input type="text" name="number" value="<?= $contact['number'] ?>" required><br>
                <label>Email:</label><br>
                <input type="email" name="email" value="<?= $contact['email'] ?>" required><br>
                <label>Address:</label><br>
                <input type="text" name="address" value="<?= $contact['address'] ?>" required><br>
                <label>Note:</label><br>
                <textarea name="note"><?= $contact['note'] ?></textarea><br>
                <button type="submit" name="submit">Update Contact</button>
            </form>
            <?php
        } else {
            echo "Contact not found.";
        }
    } else {
        echo "Contact ID not provided.";
    }
    ?>
</body>
</html>
