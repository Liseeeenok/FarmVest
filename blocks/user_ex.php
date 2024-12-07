<form action="<?php if ($_SESSION['user']['level'] == 1) echo 'admin/admin_main.php';?>" >
	<input type="submit" class="user" value="<?=$_SESSION['user']['name']?>">
</form>
<form action="exit.php">
	<input type="submit" class="user" value="Exit →">
</form>