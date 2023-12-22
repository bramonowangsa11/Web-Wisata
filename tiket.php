<!-- PHP -->
<?php
include("koneksi.php");
session_start();
if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
    header("Location: index.php");
    die();
}
//$result = mysqli_query($con, "SELECT * FROM destinasi")
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
                <a href="tiket.php" class="menu-nav" style="color: green;">Tiket</a>
                <a href="#" class="menu-nav">Bantuan</a>
            </div>
        </div>

    </nav>
    <!-- main -->
    <main class="main-display-homepage">
        <div class="search">
            Cari Tiket
            <div>
                <form action="" method="GET">
                    <input class="search-bar" type="text" name="search-bar" placeholder="cari tiket destinasi">
                </form>
            </div>
            <div class="tabel-tiket">
                <?php
                if (isset($_GET['search-bar'])) :
                    $search = $_GET['search-bar'];
                    $result = mysqli_query($con, "SELECT * FROM destinasi WHERE nama_destinasi LIKE'%$search%'");
                ?>
                    <!-- menampilkan data yang dicari -->
                    <?php if ($result->num_rows > 0) : ?>
                        <table width='80%' border="1" align="center">
                            <tr>
                                <th>Id</th>
                                <th>Nama Destinasi</th>
                                <th>Tipe Tiket</th>
                                <th>Harga Tiket</th>
                                <th>Tiket</th>
                            </tr>
                            <?php
                            while ($data = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $data['id_destinasi'] . "</td>";
                                echo "<td>" . $data['nama_destinasi'] . "</td>";
                                echo "<td>" . $data['type_tiket'] . "</td>";
                                echo "<td>" . $data['harga_tiket'] . "</td>";
                                // echo "<td>" . $_SESSION['idDestinasi'] = $data['id_destinasi'] . "</td>";

                            ?>
                                <form action="" method="POST">
                                    <?php
                                    echo "<td><a href='pemesanan.php?id=$data[id_destinasi]'>PESAN</a></td></tr>";
                                    ?>
                                </form>
                            <?php
                            }
                            ?>
                        </table> <?php else : ?>
                        <table width='80%' border="1">
                            <tr>
                                <th>id</th>
                                <th>Nama Destinasi</th>
                                <th>Tipe Tiket</th>
                                <th>Harga Tiket</th>
                            </tr>
                            <tr>
                                <td colspan="6" align="center">Data tidak di temukan!</td>
                            </tr>
                        </table>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>


    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023
    </footer>

</body>

</html>