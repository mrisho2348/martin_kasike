<?php
session_start();
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    // Sanitize the input data to prevent SQL injection attacks
    $fullname = filter_input(INPUT_POST, 'logname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'logemail', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'logpass', FILTER_SANITIZE_STRING);

    // Check if all fields are filled
    if (!empty($fullname) && !empty($email) && !empty($password)) {
        // Create a new database connection
        // $mysqli = mysqli_connect("db_host", "db_user", "db_password", "db_name");

        // Check if there was an error connecting to the database
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Check if the email already exists in the database
        $stmt = mysqli_prepare($conn, "SELECT * FROM `users` WHERE `email` = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $num_rows = mysqli_stmt_num_rows($stmt);
        mysqli_stmt_close($stmt);

        if ($num_rows > 0) {
            // If email already exists, show an error message
            header("Location: contact.php?error=Email already exists. Please use a different email address.");
            exit();
        } else {
            // Prepare the SQL statement to insert the data into the database
            $stmt = mysqli_prepare($conn, "INSERT INTO `users` (`fullname`,`email`,`password`) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $fullname, $email, $password);

            // Execute the SQL statement
            if (!mysqli_stmt_execute($stmt)) {
              header("Location: contact.php?error=Failed to process your information. Please try again later.");
              exit();
            } else {
                header("Location: contact.php?success=your information processed successfully.");
            }

            // Close the database connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    } else {
        // If any of the fields is empty, show an error message
        header("Location: contact.php?error=Please fill all the information.");
        exit();
    }
}

?>
