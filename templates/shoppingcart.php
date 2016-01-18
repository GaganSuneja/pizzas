<?php 

session_start();
echo '<div>';

if(isset($_SESSION['your_bill']) && $_SESSION['your_bill']>0)

{
			echo "your BIll".$_SESSION['your_bill'];
}
else
{

	echo '<p><br/>NO Item Selected</p>';
}


echo '<br/><a href="includes/checkout.php">Checkout</a>';

echo '</div>'; 


?>