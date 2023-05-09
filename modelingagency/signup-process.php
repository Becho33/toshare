<?php
// Get the form data
$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$date_of_birth = $_POST['date_of_birth'];
$membership_type = $_POST['membership_type'];

// Create a database connection
$conn = mysqli_connect('localhost', 'username', 'password', 'aovmembers');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the form data into the database
$sql = "INSERT INTO members (name, age, sex, date_of_birth, membership_type) VALUES ('$name', '$age', '$sex', '$date_of_birth', '$membership_type')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
