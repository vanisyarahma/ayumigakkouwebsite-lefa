<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayumi Nihongo Gakkou</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-qiDyhAp6r2L94MpOE7/M6ftMQ7pcTwPsW3Gm5ld61GTc0ZOxDZhrEWUw77QkPWtFJZzv6aEjjE5bzVXNyvK8Mw==" crossorigin="anonymous" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins', 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
}

body{
    background: var(--bg-color);
    color: var(--text-color);

}

header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #E74646;
    padding: 15px 13%;
    transition: all .40s ease;
}

.logo img {
    position: left;
    height: auto;
    width: 120px;
    max-width: 100%;
    justify-content: flex-start; 
    display: flex; 
    align-items: center;
}

.navbar {
    display: flex;
}

.navbar a {
    color: black;
    font-weight: 500;
    font-size: 0.9rem;
    padding: 5px 10px;
    transition: all .40s ease;
}

.navbar a:hover {
    color: #fff;
}

.toggle_btn {
    color: #fff;
    font-size: 0.5rem;
    cursor: pointer;
    display: none;
}

.action_btn {
    background-color: #FFE5CA;
    color: black;
    padding: 0.5rem 1rem;
    border: none;
    outline: none;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: bold;
    cursor: pointer;
    transition: scale 0.2 ease;
}

.action_btn:hover {
    scale: 1.05;
    color: #fff;
}

.action_btn:active {
    scale: 0.95;
}

.yakali {
	margin-top: 60px;
}

</style>
<body><header>
        <div class="logo"><a href="#"><img src="logo ayumi.png" alt=""></a></div>
            <ul class="navbar">
                <li><a href="">Beranda</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="translator.php">Translator</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="faq.php">Any Question?</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
            <ul class="header-icons">

            </ul>
            <a href="login.php" class="action_btn">Daftar Dulu Yuk!</a>
    </header>
    <?php

include 'koneksi.php';
$query = "select * from users where id = ? limit 1";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $_GET['id']);

$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_array(MYSQLI_ASSOC);

?>
	<div class="container">

		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

				<?php
if (isset($_SESSION['error'])) {
    ?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error'] ?>
				</div>
				<?php
}
?>

				<?php
if (isset($_SESSION['message'])) {
    ?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['message'] ?>
				</div>
				<?php
}
?>

<div class="yakali">
				<div class="card">
					<div class="card-title text-center">
						<h1>Edit Form</h1>
					</div>
					<div class="card-body">
						<form action="process-update.php?id=<?=$_GET['id']?>" method="post">
							<div class="form-group">
								<label for="username">Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" id="name" value="<?php echo @$row['nama'] ?>" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" id="username" value="<?php echo @$row['username'] ?>" aria-describedby="username" placeholder="username" autocomplete="off">
							</div>


							<button type="submit" class="btn btn-primary">Update</button>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div></div>

    
</body>
</html>