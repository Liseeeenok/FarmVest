<div class="container_ac">
	<div class="label">Card <?=$i?></div>
	<div class="content">
		<hr>
		<div class="main_intro">
			<div class="text_main">Title Card:</div>
			<textarea name="<?='title_card_' . $i?>" id="main_inf" type="text" cols="115" rows="5">
				<?php $arr_card = 'arr_card_' . $i;
				echo $$arr_card['main_intro'];
				?>
			</textarea>
		</div>
	<hr>
		<div class="main_intro">
			<div class="text_main">Description Card:
			<textarea class="text_main_intro" name="description_card_<?=$i?>" id="description" type="text" cols="115" rows="1">
				<?php $arr_card = 'arr_card_' . $i;
				echo $$arr_card['description_intro'];
				?>
			</textarea>
			<?php 
			$count_title = 0;
			foreach ($$arr_card as $key => $value) {
				if ((($key == 'title_1') or ($key == 'title_2') or ($key == 'title_3') or ($key == 'title_4')) and $value <> NULL) {
					$count_title++;
					include('php_admin/sub_des.php');
				}
			}
			?>
			</div>
			<input type="submit" class="otpr" value="Save changes">
		</div>
	</div>
</div>
<hr>