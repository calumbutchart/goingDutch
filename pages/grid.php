<?php

//how many wide?
$grid_width = 12;
//how many tall?
$grid_height = 24;


?>
<div class="page" id="grid">
<table>
<?php 
	for ($y=0; $y < $grid_height ; $y++) {
?>
		<tr>
<?php
		for ($x=0; $x < $grid_height ; $x++) { 
?>
			<td>
				<label for="<?= $x . $y ?>" class="square" data-x="<?= $x ?>" data-y="<?= $y ?>">
					<input type="checkbox" id="<?= $x . '-' . $y ?>"/>
					<div></div>
				</label>
			</td>
<?php
		}

?>
		</tr>
<?php
	}

?>
</table>

grid in here

</div>
<?php

?>