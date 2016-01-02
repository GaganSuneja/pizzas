<?php

ini_set('display_errors', true);

error_reporting(E_ALL);

include_once "includes/functions.php";

//if(isset($_GET['page']))
//{
  //$page = checkPage($_GET['page']);
//}		


if(isset($_GET['tname']))
{
	echo $type = checkPage($_GET['tname']);
}
else
{
	$type = NULL;
}

if(isset($_GET['sub_type']))
{
   echo  $sub_type = $_GET['sub_type'];
}
else
{
	$sub_type = NULL;
}
//if(isset($_GET['price']))
//{/
  //add_bill($_GET['price']);
//}


render("header",$data=array("title"=>"PizzaBay"));

getHeader("category".$type,$sub_type);

//getHeader("category/type/size/value",$value)

?>

<?php

render("footer");

?>