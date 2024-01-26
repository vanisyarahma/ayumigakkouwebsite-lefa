<?php
session_start();

include "koneksi.php";

// Dapatkan data user dari form register3
$user = [
    'nomor' => $_POST['nomor']
];

if (empty($user['nomor'])) {
    $_SESSION['error'] = 'Anda belum memasukkan nomor';
    $_SESSION['nomor'] = $_POST['nomor'];
    header("Location: /ayumigakkou/register4.php");
    return;
}

// Check apakah user dengan nomor tersebut ada di table users
$query = "SELECT * FROM users WHERE nomor = ? LIMIT 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['nomor']);
$stmt->execute();
$result = $stmt->get_result();

// Jika nomor sudah ada, maka return kembali ke halaman register3.
if ($result->num_rows > 0) {
    $_SESSION['error'] = 'Nomor: ' . $user['nomor'] . ' sudah ada di database.';
    $_SESSION['nomor'] = $_POST['nomor'];
    header("Location: /ayumigakkou/register.php");
    return;
} else {
    // Nomor unik. Update di database.
    $queryUpdate = "UPDATE users SET nomor=? WHERE id=?";
    $stmtUpdate = $mysqli->stmt_init();
    $stmtUpdate->prepare($queryUpdate);
    $stmtUpdate->bind_param('ss', $user['nomor'], $_SESSION['users_id']);
    $stmtUpdate->execute();

    // Check if the update was successful
    if ($stmtUpdate->affected_rows > 0) {
        $_SESSION['message'] = 'Data telah tersimpan';
        header("Location: /ayumigakkou/register4.php");
    } else {
        $_SESSION['error'] = 'Gagal menyimpan data ke database';
        header("Location: /ayumigakkou/register3.php");
    }
}
?>
