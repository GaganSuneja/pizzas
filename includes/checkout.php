<?php 

session_start();

if(isset($_SESSION['your_bill']))
{
	$_SESSION['your_bill'] = 0;	
	session_destroy();
}

echo "your bill".$_SESSION['your_bill']; 

header('Location: ../index.php');
exit();

?>