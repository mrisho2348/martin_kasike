<?php
session_start();
include "connection.php";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {

  // Get the form data and sanitize it
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  // Validate the form data (you should add your own validation code here)

  // Connect to the database

  // Check if the connection was successful
  if (!$conn) {
    die('Error connecting to the database');
  }

  // Check if the email already exists in the database
  $check_query = "SELECT * FROM `messages` WHERE `email` = '$email'";
  $check_result = mysqli_query($conn, $check_query);
  
  if (mysqli_num_rows($check_result) > 0) {
    // If email already exists, show an error message
    $error = "Email already exists. Please use a different email address.";
  } else {
    // Insert the data into the database
    $query = "INSERT INTO `messages` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
      $success = 'Message sent successfully';
    } else {
      die("Connection failed: " . mysqli_connect_error());
    }
  }

  // Close the database connection
  mysqli_close($conn);

  // Redirect to the HTML file
  header('Location: cont.php?success=' . urlencode($success) . '&error=' . urlencode($error));
  exit();
}

?>
