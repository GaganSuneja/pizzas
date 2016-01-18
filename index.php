<?php

ini_set('display_errors', true);

error_reporting(E_ALL);

include_once "includes/functions.php";

//if(isset($_GET['page']))
//{
  //$page = checkPage($_GET['page']);
//}		

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
//if(isset($_GET['price']))
//{/
 	 //add_bill($_GET['price']);
// 	}

//include_once 'views/shoppingcart.php';

//render("header",$data=array("title"=>"PizzaBay"));

//render("shoppingcart");


getHeader("category".$type,$sub_type);

//getHeader("category/type/size/value",$value)

?>

<?php

render("footer");

?>
