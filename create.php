<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Contact</h2>
        <form id="contactForm" action="create_process.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <textarea class="form-control" id="note" name="note"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add Contact</button>
        </form>
    </div>

    <!-- JavaScript to display dialog box -->
    <script>
        // Function to display dialog box
        function showDialog(message) {
            alert(message);
        }

        // Check if form submission was successful
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            var form = this;
            var formData = new FormData(form);

            // Send form data using AJAX
            fetch(form.action, {
                method: form.method,
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Data insertion successful, show dialog box
                    showDialog("Data stored successfully");
                } else {
                    // Data insertion failed, show error message
                    showDialog("Error: Data could not be stored");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Show error message
                showDialog("An error occurred. Please try again.");
            });
        });
    </script>
</body>
</html>
