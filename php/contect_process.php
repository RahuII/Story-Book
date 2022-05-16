<?php
session_start();
// header('location:signUp.php');

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "wt", "wt", "storybook");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$name =  $_REQUEST['name'];
$email = $_REQUEST['email'];
$txt = $_REQUEST['txt'];

$sql = "INSERT INTO request  VALUES ('$name','$email','$txt')";
if (mysqli_query($conn, $sql)) {
    $_SESSION['status'] = "Request sand Successfully";
    header("Location: ../contactPage.php");
} else {
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>

<!-- hello -->