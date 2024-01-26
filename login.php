<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
  
    <div class="container">  
        <div class="box form-box">
                <?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>

				<?php
				if(isset($_SESSION['logout'])) {
				?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['logout']?>
				</div>
				<?php
				}
				?>


            <div align="center">
            <img src="logo ayumi.png" alt="ayumi" width="50%"></a>
            <header>Login</header>
            <form action="process.php" method="post">
                <div class="field input">
                    <label for="email">User</label>
                    <input type="text" name="user" id="user" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit"  value="Login" required>
                </div>
                <div class="links">
                    Masih belum punya akun?  
                    <a href="register.php">Buat akun dulu di sini!</a>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>
<?php
session_destroy();
?>