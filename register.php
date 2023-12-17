<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <h2>Lecturer Registration</h2>
    <form action="register_process.php" method="post">
        <!-- Input field for Name -->
        <label for="name">Name in full:</label>
        <input type="text" name="name" required>

        <!-- Input field for Email -->
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <!-- Input field for Designation -->
        <label for="designation">Designation:</label>
        <select name="designation" required>
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select>

        <!-- Dropdown for Course options (fetching from the Course table) -->
        <label for="course">Course:</label>
        <select name="course" required>
            <?php
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

            // Fetch course options from the Course table
            $sql = "SELECT CourseID, Title FROM Course";
            $result = mysqli_query($conn, $sql);

            // Display course options in the dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='{$row['CourseID']}'>{$row['Title']}</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>

        <!-- Input field for Gender -->
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <!-- Input field for Password -->
        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <!-- Submit button -->
        <input type="submit" value="Register">
    </form>
</body>
</html>
<?php include('footer.php'); ?>