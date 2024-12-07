<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
	<header class="header">
		<div class="container_1">
			<div class="container_nav">
				<nav class="nav">
					<div class="time"><?php echo date('d.m.Y');?></div>
					<div class="user_pan">
						<form action="" >
							<input type="submit" class="user" value="<?=$_SESSION['user']['name']?>">
						</form>
						<form action="../exit.php">
							<input type="submit" class="user" value="Exit →">
						</form>
					</div>
				</nav>
			</div>
			<div class="container_menu">
				<div class="title">
					<div class="title_admin" id="title_adm">Admin panel<sub class="pod"> by Liseeeenok</sub></div>
				</div>
				<div class="hi_bro">
					<div class="hi">Добро пожаловать, <?=$_SESSION['user']['name']?>!</div>
				</div>
				<div class="menu">
					<button class="title_main" id="main">Main</button>
					<span class="line"></span>
					<button class="title_main" id="pages">Pages</button>
					<span class="line"></span>
					<button class="title_main" id="users">Users</button>
					<span class="line"></span>
				</div>
			</div>
		</div>
	</header>
