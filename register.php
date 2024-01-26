<?php
session_start();

include 'koneksi.php';
//INPUT PERTAMA KALI
$query = "INSERT INTO `users` () VALUES ()";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_array(MYSQLI_ASSOC);
$query = "SELECT * FROM users ORDER BY id DESC LIMIT 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

var_dump($row);
$_SESSION['users_id'] = $row['id'];

// Memeriksa apakah formulir dikirimkan (submit button ditekan)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah nilai nama sudah diisi
    if (isset($_POST['nama']) && !empty($_POST['nama'])) {
        // Mendapatkan nilai nama dari formulir
        $nama = $_POST['nama'];

        // Selanjutnya, Anda dapat menyimpan nilai $nama ke database atau tempat penyimpanan lainnya sesuai kebutuhan Anda.

        // Contoh: Menyimpan nilai nama ke dalam sesi
        session_start();
        $_SESSION['nama'] = $nama;

        // Redirect ke halaman selanjutnya (misalnya welldone.html)
        header("Location: register2.php");
        exit();
    } else {
        // Jika nama tidak diisi, Anda dapat mengatur pesan kesalahan
        $error_message = "Silakan isi nama Anda.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Nama</title>
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
</head>
<body>
    <div align="center">
    <img src="HI.png" alt="" width="200px" \>
	<h2>Hai! Nama kamu siapa?</h2>
	<form action="process-register.php" method="post">
	<input type="text" id="nama" name="nama"> 
    <br>
    <div class="field">
        <input type="submit" class="btn" name="submit"  value="Lanjut" required>
    </div>
</div>
</body>
</html>