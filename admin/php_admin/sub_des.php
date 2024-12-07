<hr><div class="text_main">Subtitle <?=$count_title?>:</div>
<textarea class="text_card" name="title_<?=$count_title?>_<?=$i?>" id="main_inf" type="text" cols="115" rows="3">
	<?php
	echo $value;
	?>
</textarea>
<?php if($$arr_card['description_'.$count_title] <> NULL) {
echo('<hr><div class="text_main">Description '.$count_title.':</div>');
echo('<textarea class="" name="description_'.$count_title.'_'.$i.'" id="description" type="text" cols="115" rows="3">' . $$arr_card['description_'.$count_title] . '</textarea>');
}?>