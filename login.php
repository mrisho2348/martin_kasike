<?php
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
    // redirect to kasike.html
    header("Location: kasike.html");
    exit();
  } else {
       header("Location: contact.php?error=Invalid email or password.");
    exit();
  }

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
