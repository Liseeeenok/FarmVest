<tr class="num_pages">
	<td class="on_com">
		<div class="switch">
			<input id="<?=$arr['id']?>" class="check" type="checkbox" name="check<?=$arr['id']?>" 
			<?php
				if ($arr['condit'] == 1)
					echo('checked');
			?>
			>
		</div>
	</td>
	<td class="name_com"><?=$arr['name']?></td>
	<td class="text_com"><?=$arr['comment']?></td>
</tr>