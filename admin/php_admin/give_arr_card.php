<?php
$query = "SELECT * from `intro` WHERE `type` = 'intro'";
$result = mysqli_query($conn, $query);
$arr_intro = mysqli_fetch_assoc($result);

$query = "SELECT * from `intro` WHERE `type` = 'comments'";
$result = mysqli_query($conn, $query);
$arr_comments = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `intro` LEFT JOIN `card` ON intro.id = card.id WHERE `type` = 'card'";
$result = mysqli_query($conn, $query);
$index = 0;
while ($arr = mysqli_fetch_assoc($result))
{	
	$index += 1;
	$arr_card = 'arr_card_' . $index;
	$$arr_card = $arr;
}