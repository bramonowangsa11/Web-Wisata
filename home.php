<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Gunungkidul</title>
    <link rel="stylesheet" href="./Style/mystyle.css">
</head>

<body background="Assets/gambar5.jpg">
    <!-- navbar -->
    <nav class="nav">
        <div class="navbar">
            <div class="logo">
                Gunungkidul
            </div>
            <div class="menu">
                <a href="home.php" class="menu-nav" style="color: aqua;">Home</a>
                <a href="destinasi.php" class="menu-nav">Destinasi</a>
                <a href="tiket.php" class="menu-nav">Tiket</a>
                <a href="contact.php" class="menu-nav">Contact</a>
            </div>
        </div>
    </nav>
    <!-- main -->
    <main class="display-home">
        <H1 class="h1">PESONA GUNUNGKIDUL</H1>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023 <?php echo $_SESSION['idP'] ?> <a class="logout" href="logout.php">Logout</a>
    </footer>

</body>

</html>