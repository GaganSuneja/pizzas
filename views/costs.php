<!--<div>
	<div>
		<p>
			<?php print $e['tname'] ;?>
		</p>
		<p>
			<?php print $e->metaname;?>
		</p>
	</div>
	<div>
		<p>
			<?php print  $e->size[0];?>
		</p>
	</div>
	<div>
		<p>	
			<?php print $e->size[1];?>
		</p>
	</div>
</div>
-->
<?php
echo "<div>".$e['tname']."</div>";
echo "$".$e->size[0];
echo '<input type="checkbox" value="'.$e->size[0].'" name="sm'.$e['tname'].'">';
echo '<input type="number" name="sm'.$e['tname'].'quantity" min="1" max="5">';
echo "$".$e->size[1];
echo '<input type="checkbox" value="'.$e->size[1].'" name="lg'.$e['tname'].'">';
echo '<input type="number" name="lg'.$e['tname'].'quantity" min="1" max="5">';
echo "<br/>";
?>