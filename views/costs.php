<?php
if(!isset($j))
{
	$j=0;
}
echo "<div>".$e['tname']."</div>";
echo $e->metaname;
while(isset($e->size[$i]))
{ 
	# code...
	echo "<br/>";
	echo "Size:".$e->size[$i]['value'];	
	echo "$".$e->size[$i];
	echo '<input type="checkbox" value="'.(float)$e->size[$i].'" name="selected'.$j.'">';	
	echo "selected".$j;
	echo '<input type="number" min="0" max="5" name="number'.$j.'">';
	echo "number".$j;
	echo "<br/>";
	$k = 0;
	while(isset($e->topname[$k]))
	{
		echo $e->topname[$k]['name'];
	    echo $e->topname[$k];
	    echo "toppings:".$j;
	    echo '<input type="radio" value="'.(float)$e->topname[$i].'" name="toppings'.$j.'"/>';
	 $k++;
	}
	
	
	$i++;
	$j++;
}

echo '<br/>';


/*
if(!isset($i))
{
	$i=0;
}
else
{
	$i++; 
}
echo "<div>".$e['tname']."</div>";
echo "$".$e->size[0];
echo '<input type="checkbox" value="'.$e->size[0].'" name="sm'.$i.	'">';
//echo '<input type="number" name="sm'.$e['tname'].'quantity" min="1" max="5">';

if(isset($e->size[1]))
{
echo "$".$e->size[1];
echo '<input type="checkbox" value="'.$e->size[1].'" name="lg'.$i.'">';
//echo '<input type="number" name="lg'.$e['tname'].'quantity" min="1" max="5">';
}
echo "<br/>";
*/

?>