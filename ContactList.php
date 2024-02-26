<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background color */
            background-image: url('logo.jpg'); /* Replace 'logo.jpg' with your image path */
            background-size: cover; /* Cover the entire background with the image */
            background-repeat: no-repeat; /* Do not repeat the background image */
            background-attachment: fixed;
        }
        .navbar {
            background-color: #343a40; /* Dark background color for the navbar */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff; /* White text color for navbar elements */
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #ccc; /* Light gray text color on hover */
        }
        .container {
            padding-top: 20px; /* Add some top padding to the content */
        }
        .navbar-nav .nav-link {
            color: #fff; /* White text color for navbar links */
            margin-right: 10px; /* Add right margin for spacing between links */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Navbar brand (you can place your logo or text here) -->
            <a class="navbar-brand" href="#"></a>
            <!-- Toggler button for mobile view -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navigation links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Create User link -->
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create User</a>
                    </li>
                    <!-- List of Users link -->
                    <li class="nav-item">
                        <a class="nav-link" href="list.php">List of Users</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="container mt-5">
        <!-- Your content here -->
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
