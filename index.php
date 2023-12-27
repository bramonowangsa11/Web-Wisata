<?php

// Memanggil file koneksi.php
include "koneksi.php";
session_start();
// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['login'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $username = $_POST['username'];
    $password = $_POST['password'];

    //login
    $result = mysqli_query($con, "SELECT * FROM pengguna WHERE nama_pengguna='$username'");
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);



    // ambil data untuk id_pengguna
    // $result2 = mysqli_query($con, "SELECT * FROM pengguna WHERE nama_pengguna='$username'");
    // $row2 = mysqli_fetch_array($result2);
    //session pengguna



    // Perkondisian untuk mengecek apakah data yang dikirimkan melalui form kosong atau tidak.
    //password

    if (empty($username) || empty($password)) {
        $message = "Form tidak boleh kosong!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        // Perkondisian untuk mengecek apakah data yang dikirimkan melalui form sesuai atau tidak.
        if ($num == 1) {
            $passwordsekarang = $row['password_pengguna'];
            //$data = mysqli_fetch_assoc($result);
            if (password_verify($password, $passwordsekarang)) {
                // session login
                $_SESSION['username'] = $row['nama_pengguna'];
                $_SESSION['password'] = $row['password_pengguna'];
                $_SESSION['nama'] = $row['nama_pengguna'];
                $_SESSION['idP'] = $row['id_pengguna'];
                // Jika sesuai, maka akan menampilkan halaman home.php
                header("Location: home.php");
                exit();
            }
        } else {
            // Jika tidak sesuai, maka akan menampilkan pesan "Username atau Password salah!!!"
            echo "<center><h1>Username atau Password salah!!!</h1></center>";
        }
    }
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
    <div class="wrapper">
        <form action="" method="post">
            <div class="box-login">
                <h1 style="text-align: center;padding-top: 20px;">LOGIN</h1>
                <div class="username">
                    <div class="ico"><i style="float: left;margin-left: 5px;margin-top: 3px;" class="fa fa-user fa-2x"></div></i><input class="user" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="password">
                    <div class="ico">
                        <i style="float: left;margin-left:7px;margin-top: 3px;" class="fa fa-lock fa-2x style=" color:white">
                    </div>
                    </i>
                    <input class="user" name="password" style="margin-left: 8px;" type="Password" placeholder="Password" required>
                    <button class="btn" name="login">LOGIN</button>
        </form>
        <p style="color: black;">Tidak punya akun? <a href="registrasi.php">Sign-up</a></p>
    </div>
    </div>
    </div>
</body>

</html>