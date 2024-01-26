<?php
session_start();

//logout
//hapus semua session
session_unset();
//tampilkan sukses logout
$_SESSION['logout'] = 'Berhasil logout.';
header("Location: /phpnative/login.php");
?>