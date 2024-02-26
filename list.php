<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
    <style>
        body {
            text-align: center; /* Align all content in the center */
        }
        h2 {
            margin-top: 50px; /* Adjust as needed */
        }
        table {
            margin: 0 auto; /* This will center-align the table */
            font-size: 20px; /* Increase text size */
        }
        button[type="submit"] {
            margin-top: 20px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <h2>Contact List</h2>
    <form method="POST" action="process.php">
        <table border="1">
            <thead>
                <tr>
                    <th>Select</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Note</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Include database connection
                include 'db.php';

                // Fetch all contacts from database
                $query = "SELECT * FROM contacts";
                $result = mysqli_query($conn, $query);

                // Display contacts
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='delete[]' value='".$row['id']."'></td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['number']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['note']."</td>";
                    echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <button type="submit">Delete Selected</button>
    </form>
</body>
</html>
