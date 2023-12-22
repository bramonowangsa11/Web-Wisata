<?php
include_once("koneksi.php");
session_start();
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    header("Location: index.php");
}

//ambil data untuk id_pemesanan
// $idPemesanan = $_SESSION['idPemesanan'];
// $cari2 = mysqli_query($con, "SELECT * FROM tiket WHERE id_pemesanan LIKE'%$idPemesanan%'");
// if ($cari2->num_rows > 0) {
//     while ($data2 = mysqli_fetch_array($cari2)) {
//         $harga2 = $data['harga_pemesanan'];
//     }
// }

//ambil data untuk di masukan ke value
$id5 = $_SESSION['id_pemesanan'];
$cari = mysqli_query($con, "SELECT * FROM tiket WHERE id_pemesanan LIKE'%$id5%'");
if ($cari->num_rows > 0) {
    while ($data = mysqli_fetch_array($cari)) {
        $harga2 = $data['harga_pemesanan'];
        $tujuan = $data['destinasi_pemesanan'];
        $nama2 = $data['nama_pemesan'];
    }
}

//$id = $_GET['id'];
if (isset($_POST['submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    //$destinasi = $_POST['destinasi_tiket'];
    $tanggal = $_POST['tanggal_booking'];
    //$harga = $_POST['harga_tiket'];
    $nama = $_POST['nama_pemesan'];

    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($con, "UPDATE tiket SET tanggal_pemesanan='$tanggal',nama_pemesan='$nama' WHERE id_pemesanan ='$id5'");

    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil diubah";
    header("Location:lihatPesanan.php");
    exit();
}
?>
<!-- ambil data dari datbase untuk value -->
<?php
// if (isset($_GET['id'])) {

// }
?>
<html>

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
                <a href="home.php" class="menu-nav" style="color: green;">Home</a>
                <a href="destinasi.php" class="menu-nav">Destinasi</a>
                <a href="tiket.php" class="menu-nav">Tiket</a>

            </div>
        </div>
    </nav>
    <!-- main -->
    <main>
        <div class="main-pemesanan">
            <div class="box-bg">
                <h1>Tiket <?php echo $_SESSION['id_pemesanan'] ?> </h1>
                <form action="" method="POST">
                    <div class="form-tiket">
                        <p>Destinasi</p>
                        <input type="text" name="destinasi_tiket" placeholder="Destinasi" readonly value="<?php echo $tujuan ?>">
                        <p>Tanggal Booking</p>
                        <input type="date" name="tanggal_booking" placeholder="Tanggal Booking">
                        <p>Harga</p>
                        <input type="text" name="harga_tiket" placeholder="Harga" readonly value="<?php echo $harga2 ?>">
                        <p>Nama Pemesan</p>
                        <input type="text" name="nama_pemesan" placeholder="Nama" value="<?php echo $nama2 ?>">
                    </div>
                    <a href="">
                        <input class="tombol-pesan" type="submit" name="submit" value="Ubah">
                    </a>
                </form>

                <a href="lihatPesanan.php" class="menu-nav"> Lihat Pesanan</a>

            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023
    </footer>

</body>

</html>