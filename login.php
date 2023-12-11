<?php 

include 'connect.php';


session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home1.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home1.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<style>
* {
    margin: 0;
    padding: 0;
    font-family: Calibri;
}

.navbar {
    width: 96%;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: absolute;
    z-index: 999;
    padding-left: 30px;
    padding-top: 30px;
    position: absolute;
}

.button1 {
    left: 1754px;
    top: 46px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 25px;
    background: #A6D4FF;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    outline: none;
    width: 76px;
    height: 76px;
}

.arrow {
    border: solid #ffffff;
    border-width: 0 8px 8px 0;
    display: inline-block;
    padding: 7px;
}

.left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
}

</style>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Login Form - Cosmo Builds</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">login</button> 
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>