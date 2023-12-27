<?php
include_once("koneksi.php");
session_start();
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    header("Location: index.php");
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //session id destinasi
    $_SESSION['id_destinasi'] = $id;
    $cari = mysqli_query($con, "SELECT * FROM destinasi WHERE id_destinasi LIKE'%$id%'");
    if ($cari->num_rows > 0) {
        while ($data = mysqli_fetch_array($cari)) {
            //$nama2 = $data['nama_pemesan'];
            $harga2 = $data['harga_tiket'];
            $tujuan = $data['nama_destinasi'];
        }
    }
}


//validasi input
if (isset($_POST['submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $destinasi = htmlspecialchars($_POST['destinasi_tiket']);
    $tanggal = htmlspecialchars($_POST['tanggal_booking']);
    $harga = htmlspecialchars($_POST['harga_tiket']);
    $nama = htmlspecialchars($_POST['nama_pemesan']);
    $idPengguna = htmlspecialchars($_SESSION['idP']);
    $idDestinasi = htmlspecialchars($_SESSION['id_destinasi']);

    //validasi input
    // if ($destinasi == NULL || $tanggal == NULL || $harga == NULL || $nama == NULL) {

    // } else {
    // Syntax untuk menambahkan data ke table mahasiswa
    $result = mysqli_query($con, "INSERT INTO tiket(destinasi_pemesanan,tanggal_pemesanan,harga_pemesanan,nama_pemesan,id_pengguna,id_destinasi) value('$destinasi','$tanggal','$harga','$nama','$idPengguna','$idDestinasi')");

    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil disimpan";
    header("Location:lihatPesanan.php");
    exit();
    //}
}

//validasi input


?>

<?php
// ambil data dari tiket
//$id = $_SESSION['idDestinasi'];
//$id = $_GET['id'];


?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Gunungkidul <?php echo $id ?> </title>
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
                <a href="lihatPesanan.php" class="menu-nav">Pemesanan</a>
            </div>
        </div>
    </nav>
    <!-- main -->
    <main>
        <div class=" main-pemesanan">
            <div class="box-bg">
                <h1>Tiket</h1>
                <form action="" method="POST">
                    <div class="form-tiket">
                        <p>Destinasi</p>
                        <input type="text" name="destinasi_tiket" placeholder="Destinasi" value="<?php echo $tujuan ?>" required>
                        <p>Tanggal Booking</p>
                        <input type="date" name="tanggal_booking" placeholder="Tanggal Booking" required>
                        <p>Harga</p>
                        <input type="text" name="harga_tiket" placeholder="Harga" value="<?php echo $harga2 ?>" required>
                        <p>Nama Pemesan</p>
                        <input type="text" name="nama_pemesan" placeholder="Nama" value="<?php echo $_SESSION['username'] ?>" required>
                    </div>
                    <a href="">
                        <input class="tombol-pesan" type="submit" name="submit" value="Pesan">
                    </a>

                </form>

                <?php
                //echo "<a href='lihatPesanan.php' class='menu-nav'> Lihat Pesanan</a>"
                ?>

            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="footer">
        Copyright @2023 <?php echo $_SESSION['idP'] ?> <a class="logout" href="logout.php">Logout</a>
    </footer>

</body>

</html>