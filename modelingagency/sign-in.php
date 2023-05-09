<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];

  // Establish database connection
  $servername = "localhost";
  $db_username = "username";
  $db_password = "password";
  $dbname = "aovmembers";
  $conn = mysqli_connect($servername, $db_username, $db_password, $dbname);

  // Check if connection is successful
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Prepare and execute SQL query to check if username exists in database
  $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username=?");
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  // Check if username exists in database
  if (mysqli_num_rows($result) > 0) {
    // Username exists in database
    echo "Username already registered.";
  } else {
    // Username does not exist in database
    echo "Username not registered.";
  }

  // Close database connection
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>
