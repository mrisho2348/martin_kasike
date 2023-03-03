<?php
include "connection.php";

// Check if the submit button was clicked
if (isset($_POST['submit'])) {

  // Get the email address from the form
  $email = $_POST['email'];

  // Validate the email address (optional)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location:portfollio.php?error=Invalid email address');
    die();
    }

  // Check if the connection was successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Prepare a SELECT query to check if the email already exists in the database
  $sql = "SELECT * FROM subscribers WHERE email='$email'";

  // Execute the SELECT query
  $result = mysqli_query($conn, $sql);

  // Check if the SELECT query was successful
  if ($result) {
    // Check if the email already exists in the database
    if (mysqli_num_rows($result) > 0) {
      // Email already exists, display an error message
      header('Location:portfollio.php?error=Email already exists change or use another email');
    } else {
      // Email doesn't exist, insert it into the database
      $sql = "INSERT INTO subscribers (email) VALUES ('$email')";
      if (mysqli_query($conn, $sql)) {
        // Return a thank you message
        header('Location: portfollio.php?success=Thank you for subscribing to our channel!');
      } else {
        // Display an error message if the INSERT query fails
        header('Location: portfollio.php?error=Error: ' . mysqli_error($conn));
      }
    }
  } else {
    // Display an error message if the SELECT query fails
    header('Location: portfollio.php?error=Error: ' . mysqli_error($conn));
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
