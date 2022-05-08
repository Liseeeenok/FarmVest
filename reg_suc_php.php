<?php require_once "php/mysqlaut.php"; ?>
<?php
	session_start();
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = "SELECT * from `users` WHERE `email` = '$email'";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) != 0) {
		$_SESSION['msg'] = 'Такой email уже зарегистрирован';
		header('Location: registration.php');
		exit();
	}
	
	if ($_POST['password'] != $_POST['rep_password']) {
		$_SESSION['msg'] = 'Пароли не совпадают';
		header('Location: registration.php');
		exit();
	}

	$row = "INSERT INTO users (Name, Email, Password, Level) VALUES ('$username', '$email', '$password', '0')";
	mysqli_query($conn, $row);
	$_SESSION['user'] = ["name" => $username, "level" => 0];
	header('Location: reg_suc.php');