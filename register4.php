

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
    <img src="HI.png" alt="hello" width="200px">
	<h2>Terakhir, masukkin passwordmu!</h2>
	<form action="process-register4.php" method="post">
	<input type="password" id="password" name="password">
    <h2>Sekali lagi, tolong konfirmasi passwordmu ya!</h2>
    <input type="password" id="password_confirmation" name="password_confirmation">
    <br>
    <div class="field">
        <input type="submit" class="btn" name="submit"  value="Kirim" required>
    </div>
</div>
</body>
</html>