<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nomor']) && !empty($_POST['nomor'])) {
        $nomor = $_POST['nomor'];

        header("Location: register4.php");
        exit();
    } else {
        $error_message = "Silakan isi nomor Anda.";
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
    <img src="HI.png" alt="hello!" width="200px">
	<h2>Boleh minta nomor WA kamu juga, gak?</h2>
	<form action="process-register3.php" method="post">
	<input type="text" id="nomor" name="nomor"> 
    <br>
    <div class="field">
        <input type="submit" class="btn" name="submit"  value="Lanjut" required>
    </div>
</div>
</body>
</html>