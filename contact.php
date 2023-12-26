<!-- PHP -->
<?php
include("koneksi.php");
session_start();
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    header("Location: index.php");
}
$result = mysqli_query($con, "SELECT * FROM tiket")
?>

<html>

<head>
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
                <a href="home.php" class="menu-nav">Home</a>
                <a href="destinasi.php" class="menu-nav">Destinasi</a>
                <a href="tiket.php" class="menu-nav">Tiket</a>
                <a href="#" class="menu-nav" style="color: aqua;">Contact</a>
            </div>
        </div>

    </nav>
    <!-- main -->
    <main class="display-home">
        <div class="search">
            <h1>Informasi Lebih Lanjut</h1>
            <div class="tabel-tiket">
                <div>
                    <h3><a style="color: white;" href="wa.me/08222222222">WhatsApp</a></h3>
                    <h3><a style="color: white;" href="www.instagram.com">Instagram</a></h3>
                    <h3><a style="color: white;" href="www.facebook.com">Facebook</a></h3>

                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023
    </footer>

</body>

</html>