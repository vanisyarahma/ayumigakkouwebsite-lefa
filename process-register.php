<?php
session_start();

include "koneksi.php";

// Dapatkan data user dari form register
$user = [
    'nama' => $_POST['nama']
];

// Validasi jika 'nama' tidak diisi
if (empty($user['nama'])) {
    $_SESSION['error'] = 'Anda belum memasukkan nama';
    $_SESSION['nama'] = $_POST['nama'];
    header("Location: /ayumigakkou/register.php");
    return;
}

// Jika nama sudah ada, kembali ke halaman register.php
if ($result->num_rows > 0) {
    $_SESSION['error'] = 'Nama: ' . $user['nama'] . ' sudah ada di database.';
    $_SESSION['nama'] = $_POST['nama'];
    header("Location: /ayumigakkou/register.php");
    return;
} else {
    // Nama unik. Simpan di database.
    $queryUpdate = "UPDATE `users` SET `nama`=? WHERE `id`= ?";
    $stmt = $mysqli->stmt_init();
    $stmt->prepare($queryUpdate);
    $stmt->bind_param('ss', $user['nama'], $_SESSION['users_id']);
    $stmt->execute();
    // $result = $stmt->get_result();

    // Check if the insert was successful
    if ($stmt->affected_rows > 0) {
        $_SESSION['message'] = 'Data telah tersimpan';
        header("Location: /ayumigakkou/register2.php");
    } else {
        $_SESSION['error'] = 'Gagal menyimpan data ke database';
        header("Location: /ayumigakkou/register.php");
    }
}
?>
