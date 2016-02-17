<?php

ini_set('display_errors', true);


echo "yo bitch";

error_reporting(E_ALL);

include_once "includes/functions.php";

	

render("header",$data=array("title"=>"PizzaBay"));

if(isset($_GET['tname']))
{
  $type = checkPage($_GET['tname']);
}
else
{
	$type = NULL;

	render("shoppingcart");
}

if(isset($_GET['sub_type']))
{	
   $sub_type = $_GET['sub_type'];
}
else
{
	$sub_type = NULL;
}

getHeader("category".$type,$sub_type);


?>

<?php

render("footer");

?>
