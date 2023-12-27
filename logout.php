<?php
session_start();
session_destroy();
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
echo "<br>Silahkan login : <a href='index.php'>LOGIN</a>";
