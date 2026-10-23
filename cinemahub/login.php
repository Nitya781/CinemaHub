<?php
session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users 
        WHERE username='$username' 
        AND password='$password'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
if ($user) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
    exit();
} else {
    echo "Incorrect username or password. <a href='login.html'>Try Again</a>";
}
?>
