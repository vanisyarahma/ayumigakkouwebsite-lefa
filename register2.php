<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $username = $_POST['username'];

        header("Location: register3.php");
        exit();
    } else {
        $error_message = "Silakan isi alamat email Anda.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-mail</title>
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
	<h2>Ayo buat username untuk akunnmu!</h2>
	<form action="process-register2.php" method="post">
	<input type="text" id="username" name="username"> 
    <br>
    <div class="field">
        <input type="submit" class="btn" name="submit"  value="Lanjut" required>
    </div>
</div>
</body>
</html>