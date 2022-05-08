<?php require_once "blocks/header.php"; ?>
<main class="main">
	<div class="container2">
		<div class="intro_logo">
			<?php if(isset($_SESSION['msg'])){
				echo '<div class="intro">' . $_SESSION['msg'] . '</div>';
				unset($_SESSION['msg']);
			}
			?>
			<form class="registration_php" action="reg_suc_php.php" method="post">
				<input type="text" class="username" id="username" placeholder="Enter your name" name="username" required>
				<input type="email" class="email_php" id="email" placeholder="Enter your email" name="email" required>
				<input type="password" class="password" id="password" placeholder="Enter your password" name="password" required>
				<input type="password" class="password" id="password" placeholder="Repeat the password" name="rep_password" required>
				<input type="submit" class="otpr" value="Registration">
			</form>
		</div>
	</div>
</main>

<?php
	require_once "blocks/footer.php";
?>