<?php
// login_process.php
// Handle login and redirect to dashboard.php on success

// Connect to the database (Add your database connection code here)
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "ATIWEB";

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



// Retrieve form data
$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve lecturer data based on email
$sql = "SELECT * FROM Lecturer WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);

// Check if lecturer exists and verify the password
if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['Password'])) {
        // Start a session and store lecturer details
        session_start();
        $_SESSION['email'] = $row['Email'];

        // Redirect to dashboard.php
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid password!";
    }
} else {
    echo "Lecturer not found!";
}

// Close the database connection
mysqli_close($conn);
?>
