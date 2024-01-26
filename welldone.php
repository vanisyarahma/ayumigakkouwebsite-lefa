<?php
session_start();

include "koneksi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    body {
        background: #FFE5CA;
        font-family: Arial, sans-serif;
    }
    input[type="text"] {
        border: none;
        background-color: #FFE5CA;
        border-bottom: solid black;
        width: 80%;
        outline: none;
        height: 35px;
        font-size: 20px;
        padding: 0 10px;
    }
    .btn {
        height: 35px;
        width: 40%;
        background: #D21312;
        border: 0;
        border-radius: 40px;
        color: #fff;
        font-size: 15px;
        cursor: pointer;
        transition: all .3s;
        margin-top: 10px;
        padding: 0px 10px;
    }
    </style>
    <div align="center">
        <img src="HI.png" alt="hello!" width="200px">
        <h1>Halo!</h1>
        <h2>Kamu sudah berhasil registrasi, Sekarang kamu bisa langsung login ke halaman utama!</h2>
            <a href="/ayumigakkou/login.php"><input type="submit" class="btn" name="submit"  value="Login Sekarang!" required></a>
        </div>
</body>
</html>