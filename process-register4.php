<?php
session_start();

include "koneksi.php";

// Dapatkan data user dari form register4
$user = [
    'password' => $_POST['password'],
    'password_confirmation' => $_POST['password_confirmation'],
];

// Check if the password has already been set
// if ($_SESSION['password_set']) {
//     $_SESSION['error'] = 'Password sudah diatur sebelumnya.';
//     header("Location: /AYUMIHTML/welldone.php");
//     return;
// }

if ($user['password'] != $user['password_confirmation']) {
    $_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
    $_SESSION['password'] = $_POST['password'];
    header("Location: /ayumigakkou/register4.php");
    return;
}else{


$password = password_hash($user['password'], PASSWORD_DEFAULT);

// Jika Password sama, password akan tersimpan di database.
$queryUpdate = "UPDATE `users` SET `password`=? WHERE `id`= ?";
$stmt = $mysqli->stmt_init();
$stmt->prepare($queryUpdate);
$stmt->bind_param('ss', $password, $_SESSION['users_id']);
$stmt->execute();
header("Location: welldone.php");

// Check if the insert was successful
// if ($stmt->affected_rows > 0) {
//     // Set a session variable indicating that the password has been set
//     $_SESSION['password_set'] = true;

//     $_SESSION['message'] = 'Data telah tersimpan';
// } else {
//     $_SESSION['error'] = 'Gagal menyimpan data ke database';
//     // header("Location: /AYUMIHTML/register4.php");
// }
}
?>
