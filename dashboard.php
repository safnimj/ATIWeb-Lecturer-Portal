<?php
// dashboard.php
// Check if the lecturer is logged in and display the dashboard

// Start the session
session_start();

// Check if the lecturer is not logged in, redirect to login.php
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Display dashboard with lecturer details
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h2>Lecturer Dashboard </h2>
    <br>
    <h1>Welcome, <?php echo $_SESSION['email']; ?>!</h1>
    <!-- Add other dashboard content here -->
<p>
<a href="logout.php" class="logout-button">Logout</a>

</body>
</html>
<?php include('footer.php'); ?>