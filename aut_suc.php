<?php require_once "php/mysqlaut.php"; ?>
<?php
	session_start();

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$row = "SELECT * from `users` WHERE `email` = '$email' AND `password` = '$password'";
	$check_user = mysqli_query($conn, $row);
	if (mysqli_num_rows($check_user) > 0) {
		$user = mysqli_fetch_assoc($check_user);
		$_SESSION['user'] = ["name" => $user['Name'], "level" => $user['Level']];
		header('Location: index.php');
	} else {
		$_SESSION['msg'] = 'Неправильные имя пользователя или пароль';
		header('Location: get.php');
	}