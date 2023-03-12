<?php
session_start();
include "connection.php";

// define variables and set to empty values
$email = $password = "";

// check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
  $email = test_input($_POST["logema"]);
  $password = test_input($_POST["logpas"]);

  // establish a connection to the database

  // prepare and execute query to check user data
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  // check if query returns a row
  if (mysqli_num_rows($result) == 1) {
    // check if email and password are admin credentials
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] == 'admin@gmail.com' && $row['password'] == 'admin123') {
      // set session variable and redirect to kasike.html
      $_SESSION['admin'] = true;
      header("Location: kasike.html");
      exit();
    }
  }
  // if user is not admin or credentials are invalid, redirect to contact.php with error message
  header("Location: contact.php?error=Invalid email or password.");
  exit();

  mysqli_close($conn);
}

// function to sanitize input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>