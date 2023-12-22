<?php
// Memanggil file koneksi.php
include_once("koneksi.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['signup'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $message = "Password harus mengandung huruf besar, huruf kecil, angka, spesial karakter dan karakter spesial. Minimal 8 karakter.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        // signup
        $result = mysqli_query($con, "INSERT INTO pengguna (nama_pengguna, email_pengguna, password_pengguna) VALUES ('$username','$email', '$password')");
        $message2 = "Daftar Berhasil";
        echo "<script type='text/javascript'>alert('$message2');</script>";
        header("Location: index.php");
        exit();
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
        <form action="registrasi.php" method="post">
            <div class="dasar">
                <h1 style="text-align: center;padding-top: 20px;">Silakan buat akun</h1>
                <div class="username">
                    <div class="ico">
                        <i style="float: left;margin-left: 5px;margin-top: 3px;" class="fa fa-user fa-2x">
                    </div>
                    </i>
                    <input class="user" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="email">
                    <div class="ico">
                        <i style="float: left;margin-left: 5px;margin-top: 3px;" class="fa fa-user fa-2x">
                    </div>
                    </i>
                    <input class="user" type="text" name="email" placeholder="Email" required>
                </div>
                <div class="password">
                    <div class="ico">
                        <i style="float: left;margin-left:7px;margin-top: 3px;" class="fa fa-lock fa-2x style=" color:white">
                    </div>
                    </i>
                    <input class="user" name="password" style="margin-left: 8px;" type="Password" placeholder="Password" required>
                    <button class="btn" name="signup">DAFTAR</button>
        </form>
        <p>Sudah punya akun? <a href="index.php">Login</a></p>
    </div>
    </div>
    </div>
</body>

</html>