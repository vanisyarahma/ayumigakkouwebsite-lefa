<?php
session_start();

include "koneksi.php";

// Dapatkan data user dari form
$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

// Check apakah user dengan username tersebut ada di tabel users
$query = "SELECT * FROM users WHERE username = ? LIMIT 1";

$stmt = $mysqli->stmt_init();

if ($stmt->prepare($query)) {
    // Bind the parameter and execute the statement
    $stmt->bind_param('s', $user['username']);

    if ($stmt->execute()) {
        // Get the result set
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username ditemukan
            $row = $result->fetch_assoc();  // Use fetch_assoc for associative array

            // Kita cek apakah password dengan hash password sesuai
            if (password_verify($user['password'], $row['password'])) {
                // Password is correct, set session variables
                $_SESSION['login'] = true;
                $_SESSION['username'] = $user['username'];
                $_SESSION['message'] = 'Berhasil login ke dalam sistem.';
                header("Location: /ayumigakkou/index.php");
                exit(); // Ensure script stops execution after redirect
            } else {
                // Password is incorrect
                $_SESSION['error'] = 'Password anda salah.';
            }
        } else {
            // Username not found
            $_SESSION['error'] = 'Username tidak ditemukan.';
        }
    } else {
        // Error during query execution
        $_SESSION['error'] = 'Error during query execution: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    // Error preparing the statement
    $_SESSION['error'] = 'Error preparing the statement: ' . $mysqli->error;
}

// Redirect to the appropriate location
header("Location: /ayumigakkou/index.php");
exit();
?>
