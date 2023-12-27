<?php
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    header("Location: index.php");
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
                <a href="home.php" class="menu-nav">Home</a>
                <a href="destinasi.php" class="menu-nav" style="color: aqua;">Destinasi</a>
                <a href="tiket.php" class="menu-nav">Tiket</a>
                <a href="contact.php" class="menu-nav">Contact</a>
            </div>
        </div>

    </nav>
    <!-- main -->


    <main class="main">
        <div class="main-display">
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Baron+Beach/@-8.1290121,110.5461109,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7bba970127106f:0xeab05f73030e85d5!8m2!3d-8.1288246!4d110.5487763!16s%2Fg%2F1218rl74?entry=ttu">Pantai Baron</a> <img class="image" src="Assets/baron.jpg">
                <p>Pantai Baron di Gunungkidul, Yogyakarta, adalah surga tropis yang memikat dengan keindahan alamnya yang menakjubkan. Terletak di wilayah pesisir selatan, pantai ini menyajikan panorama laut yang memukau, pasir putih yang lembut, dan ombak yang menyejukkan.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Pantai+Sepanjang/@-8.1366224,110.5453965,14z/data=!3m1!4b1!4m6!3m5!1s0x2e7bbaf4d43a504d:0xec67e4a2048c2008!8m2!3d-8.1366656!4d110.5659962!16s%2Fg%2F11hb88_zzs?entry=ttu">Pantai Sepanjang</a> <img class="image" src="Assets/sepanjang.jpg">
                <p>Pantai Sepanjang, terletak di Gunungkidul, memukau dengan garis pantainya yang panjang dan indah. Pasir putih bersih bersatu dengan ombak tenang, menciptakan pemandangan alami yang menakjubkan. Suasana tenang dan keindahan alam membuatnya menjadi destinasi pantai yang menenangkan dan memikat bagi pengunjung.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Krakal+Beach/@-8.1456758,110.5975531,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7bba30bb758649:0x763eccce027d3d8c!8m2!3d-8.145019!4d110.5998857!16s%2Fg%2F11b5qsxxt1?entry=ttu">Pantai Krakal</a> <img class="image" src="Assets/krakal.jpg">
                <p>Pantai Krakal di Gunungkidul memikat dengan pasir putihnya yang lembut dan ombak tenang. Tersembunyi di tengah tebing karst, pantai ini menawarkan panorama alam yang memesona. Suasana tenang dan keindahan alam menjadikan Krakal sebagai destinasi pantai yang menenangkan di Yogyakarta.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Pantai+Widodaren/@-8.1281023,110.5050167,15z/data=!3m1!4b1!4m6!3m5!1s0x2e7bbb6e56f175f5:0x9ec8caeea45a7aed!8m2!3d-8.128124!4d110.5234708!16s%2Fg%2F11l3555by1?entry=ttu">Pantai Widodaren</a> <img class="image" src="Assets/widodaren.jpg">
                <p>Pantai Widodaren, terletak di Gunungkidul, menyuguhkan keindahan alam tropis dengan pasir putih halus dan tebing karst yang megah. Air jernih dan ombak tenang menciptakan suasana tenang, ideal untuk bersantai. Pemandangan matahari terbenam yang spektakuler menambah pesona pantai ini sebagai destinasi wisata yang menenangkan.</p>
            </div>
        </div>
        <div class="main-display">
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Pantai+Kukup/@-8.133707,110.5521684,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7bbbcb37b998df:0x17ef5bd72de95303!8m2!3d-8.1337123!4d110.5547433!16s%2Fg%2F11hy9r8jgh?entry=ttu">Pantai Kukup</a> <img class="image" src="Assets/kukup.jpg">
                <p>Pantai Kukup, terletak di Gunungkidul, memukau dengan pasir putihnya yang lembut dan ombak tenang.Pemandangan karst khas daerah ini menambah pesona alamnya. Destinasi pantai yang tenang ini menjadi tempat ideal untuk bersantai dan menikmati keindahan alam yang memesona.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Pantai+Ngandong/@-8.1464177,110.6035659,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7bba251a7f6081:0x101b8bda010ec62f!8m2!3d-8.146423!4d110.6061408!16s%2Fg%2F11b8098ft2?entry=ttu">Pantai Ngandong</a> <img class="image" src="Assets/ngandong.jpg">
                <p>Pantai Ngandong, terletak di Gunungkidul, menawarkan pesona alam yang memesona dengan pasir putih lembut, ombak tenang, dan tebing karst yang indah. Keindahan alamnya membuat pantai ini menjadi tempat ideal untuk bersantai sambil menikmati pemandangan laut yang memukau di Pantai Selatan Yogyakarta.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Ngobaran+Beach/@-8.1186572,110.5000027,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7baff5f2c488cf:0xe486a1ea9b1e1804!8m2!3d-8.1184844!4d110.5028785!16s%2Fg%2F11x7vtp6d?entry=ttu">Pantai Ngobaran</a> <img class="image" src="Assets/ngobaran.jpg">
                <p>Pantai Ngobaran, terletak di Gunungkidul, menyajikan pesona alam yang menakjubkan dengan pasir putih, ombak tenang, dan batu karang unik. Desa nelayan yang ramah serta keindahan laut menjadikan Ngobaran sebagai destinasi pantai yang menenangkan dan menawan di Yogyakarta.</p>
            </div>
            <div class="card">
                <a href="https://www.google.co.id/maps/place/Ngrumput+Beach/@-8.1403397,110.5625241,14z/data=!3m1!4b1!4m6!3m5!1s0x2e7bba436390823f:0x142d3b53f187012b!8m2!3d-8.1403829!4d110.5831238!16s%2Fg%2F11b6gdhrk7?entry=ttu">Pantai Ngrumput</a> <img class="image" src="Assets/ngrumput.webp">
                <p>Pantai Ngrumput di Gunungkidul memikat dengan pasir putih lembut dan ombak tenang. Keindahan alamnya terpancar melalui tebing karst yang menjulang, menciptakan pemandangan spektakuler. Suasana tenang dan alami membuatnya tempat ideal untuk bersantai sambil menikmati keajaiban alam Gunungkidul.</p>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023 <?php echo $_SESSION['idP'] ?> <a class="logout" href="logout.php">Logout</a>
    </footer>

</body>

</html>