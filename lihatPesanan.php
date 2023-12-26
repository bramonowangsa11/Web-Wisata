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
                <a href="contact.php" class="menu-nav">Contact</a>
            </div>
        </div>

    </nav>
    <!-- main -->
    <main class="display-home">
        <div class="search">
            <h1>Pesanan</h1>
            <!-- <div>
                <form action="" method="GET">
                    <input class="search-bar" type="text" name="search-bar" placeholder="cari tiket destinasi">
                </form>
            </div> -->
            <div class="tabel-tiket">
                <?php
                // if (isset($_GET['search-bar'])) :
                //     $search = $_GET['search-bar'];
                // if (isset($_GET['nama'])) :
                $id = $_SESSION['idP'];
                // $result = mysqli_query($con, "SELECT * FROM tiket WHERE nama_pemesan LIKE'%$search%'");
                $result = mysqli_query($con, "SELECT * FROM tiket WHERE id_pengguna LIKE'%$id%' ");
                ?>
                <!-- menampilkan data yang dicari -->
                <?php if ($result->num_rows > 0) : ?>
                    <table width='80%' align="center" border="1" style="margin-top: 20px;">
                        <tr>
                            <th>Id</th>
                            <th>Nama Destinasi</th>
                            <th>Tanggal Booking</th>
                            <th>Harga Tiket</th>
                            <th>Nama</th>
                        </tr>
                        <?php
                        while ($data = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $data['id_pemesanan'] . "</td>";
                            echo "<td>" . $data['destinasi_pemesanan'] . "</td>";
                            echo "<td>" . $data['tanggal_pemesanan'] . "</td>";
                            echo "<td>" . $data['harga_pemesanan'] . "</td>";
                            echo "<td>" . $data['nama_pemesan'] . "</td>";
                            //$_SESSION['id_pemesanan'] = $data['id_pemesanan'];
                        ?>
                            <form action="" method="POST">
                                <?php
                                echo "<td><a href='cetak_tiket.php?id=$data[id_pemesanan]'>Cetak</a>||<a href='editPesanan.php?id=$data[id_pemesanan]'>Ubah</a>||<a href='hapusPesanan.php?id=$data[id_pemesanan]'>Batalkan</a></td></tr>";
                                ?>
                            </form>
                        <?php
                        }
                        ?>
                    </table>
                <?php else : ?>
                    <table width='80%' border="1">
                        <tr>
                            <th>Id</th>
                            <th>Nama Destinasi</th>
                            <th>Tanggal Booking</th>
                            <th>Harga Tiket</th>
                            <th>Nama</th>
                        </tr>
                        <tr>
                            <td colspan="6" align="center">Data tidak di temukan!</td>
                        </tr>
                    </table>
                <?php endif; ?>
                <!-- <?php //else : 
                        ?> -->
                <!-- <table width='80%' border="1">
                        <tr>
                            <th>id</th>
                            <th>Nama Destinasi</th>
                            <th>Tipe Tiket</th>
                            <th>Harga Tiket</th>
                        </tr>
                        <tr>
                            <td colspan="6" align="center">Data tidak di temukan!</td>
                        </tr>
                    </table> -->
                <?php //endif; 
                ?>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023
    </footer>

</body>

</html>