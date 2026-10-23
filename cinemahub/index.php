<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CinemaHub</title>
<link rel="stylesheet" href="ext.css">
</head>
<body>
<header>
<h1>CinemaHub</h1>
<nav>
<a href="index.php">Home</a>
<a href="movies.html">Movies</a>
<a href="genres.html">Genres</a>
<a href="about.html">About</a>
<a href="contact.html">Contact</a>
<a href="logout.php">Logout</a>
</nav>
</header>
<h2 class="page-title">Trending Now</h2>
<div class="card-container">
<div class="card">
<img src="inception.jpg" alt="Inception" height = "250" width = "150">
<p>Inception</p>
</div>
<div class="card">
<img src="avatar.jpg" alt="Avatar"  height = "250" width = "150">
<p>Avatar</p>
</div>
<div class="card">
<img src="interstellar.jpg" alt="Interstellar"  height = "250" width = "150">
<p>Interstellar</p>
</div>
<div class="card">
<img src="joker.jpg" alt="Joker"  height = "250" width = "150">
<p>Joker</p>
</div>
<div class="card">
<img src="wol.jpg" alt="Deadpool and Wolverin"  height = "250" width = "150">
<p>Deadpool and Wolverin</p>
</div>
<div class="card">
<img src="money.jpg" alt="Money Heist"  height = "250" width = "150">
<p>Money Heist</p>
</div>
</div>
<footer>
<p>&copy; 2025 CinemaHub. All Rights Reserved.</p>
</footer>
</body>
</html>
