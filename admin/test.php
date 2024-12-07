<?php
	require_once('../php/mysqlaut.php');
	$row = "SELECT * FROM `intro` LEFT JOIN `card` ON intro.id = card.id WHERE `type` = 'card'";
	$result = mysqli_query($conn, $row);

	while ($arr = mysqli_fetch_assoc($result)) {
		print_r($arr);
		foreach ($arr as $key => $value) {
				if (($key <> 'type') and ($key <> 'id') and ($key <> 'main_intro') and ($key <> 'description_intro') and $value <> NULL) {
					echo ('1');
				}
			}
	}