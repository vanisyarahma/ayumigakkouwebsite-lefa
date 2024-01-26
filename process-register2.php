<?php
session_start();

include "koneksi.php";

// Dapatkan data user dari form register
$user = [
    'username' => $_POST['username']
];

// Validasi jika 'username' tidak diisi
if (empty($user['username'])) {
    $_SESSION['error'] = 'Anda belum memasukkan username';
    $_SESSION['username'] = $_POST['username'];
    header("Location: /ayumigakkou/register.php");
    return;
}

// Check apakah user dengan nama tersebut sudah ada di database
$query = "select * from users where username = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();

// Jika nama sudah ada, kembali ke halaman register.php
if ($result->num_rows > 0) {
    $_SESSION['error'] = 'Username: ' . $user['username'] . ' sudah ada di database.';
    $_SESSION['username'] = $_POST['username'];
    header("Location: /ayumigakkou/register2.php");
    return;
} else {
    // Nama unik. Simpan di database.
    $queryUpdate = "UPDATE `users` SET `username`=? WHERE `id`= ?";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($queryUpdate);
    $stmt->bind_param('ss', $user['username'], $_SESSION['users_id']);
    $stmt->execute();
    // $result = $stmt->get_result();

    // Check if the insert was successful
    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = 'Data telah tersimpan';
        header("Location: /ayumigakkou/register3.php");
    } else {
        $_SESSION['error'] = 'Gagal menyimpan data ke database';
        header("Location: /ayumigakkou/register2.php");
    }
}
?>
