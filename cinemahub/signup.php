<?php
include 'config.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username, email, password) 
        VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "Signup successful! <a href='login.html'>Go to Login</a>";
} else {
    echo "Username already exists.";
}
?>
