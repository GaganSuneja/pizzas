
<?php echo '<form action = "finalbill.php" method="POST">';?>
<div>
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