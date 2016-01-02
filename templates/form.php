<?php 

echo '<form action = "finalbill.php" method="POST">';
echo '<input type="checkbox" value="'.$e->size[0].'" name="sm'.$e['tname'].'">';
echo '<input type="checkbox" value="'.$e->size[1].'" name="lg'.$e['tname'].'">';
echo '<input type="submit" value="submit">';
echo '</form>';

?>
