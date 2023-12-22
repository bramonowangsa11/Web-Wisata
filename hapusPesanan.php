<?php
// mengambil file koneksi.php
include_once("koneksi.php");
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    header("Location: index.php");
}

// mengambil id dari url
$id = $_GET['id'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cari = mysqli_query($con, "SELECT * FROM tiket WHERE id_pemesanan LIKE'%$id%'");
    if ($cari->num_rows > 0) {
        while ($data = mysqli_fetch_array($cari)) {
            $nama2 = $data['nama_pemesan'];
        }
    }else{
        $nama2 = 'x';
    }
}

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($con, "DELETE FROM tiket WHERE id_pemesanan='$id'");

// Setelah berhasil dihapus redirect ke index.php
header("Location:lihatPesanan.php?nama=$nama2");
