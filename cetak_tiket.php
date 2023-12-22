<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'TIKET WISATA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'PESONA GUNUNGKIDUL', 0, 1, 'C');


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cari = mysqli_query($con, "SELECT * FROM tiket WHERE id_pemesanan LIKE'%$id%'");
    if ($cari->num_rows > 0) {
        while ($data = mysqli_fetch_array($cari)) {
            $nama2 = $data['nama_pemesan'];
            $pdf->Cell(20, 6, 'Nama : ', 0, 0);
            $pdf->Cell(50, 6, $nama2, 0, 1);
        }
    }
}

$pdf->Cell(20, 6, 'ID', 1, 0);
$pdf->Cell(50, 6, 'DESTINASI', 1, 0);
$pdf->Cell(25, 6, 'TANGGAL', 1, 0);
$pdf->Cell(50, 6, 'HARGA', 1, 1);
$pdf->SetFont('Arial', '', 10);
$mahasiswa = mysqli_query($con, "select * from tiket where id_pemesanan like '%$id%'");
while ($row = mysqli_fetch_array($mahasiswa)) {
    $pdf->Cell(20, 6, $row['id_pemesanan'], 1, 0);
    $pdf->Cell(50, 6, $row['destinasi_pemesanan'], 1, 0);
    $pdf->Cell(25, 6, $row['tanggal_pemesanan'], 1, 0);
    $pdf->Cell(50, 6, $row['harga_pemesanan'], 1, 0);
}
$pdf->Output();
