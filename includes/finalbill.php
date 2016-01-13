<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST' && $_POST['submit']=='submit')
{

	echo "yo";



	if(!isset($_SESSION['your_bill']))
	{
		$_SESSION['your_bill'] = 0;
	}

	$j = $_POST['number'];
	echo $j;
	--$j;

	print_r($_POST);
	while($j>=0)
	{
		if($_POST['number'.$j]>0)
		{
			$_SESSION['your_bill'] = $_SESSION['your_bill'] + ($_POST['selected'.$j] * $_POST['number'.$j]) ;
			echo "your bill".$_SESSION['your_bill'];
		}

		--$j;
	}


echo  "<br/>".$_SESSION['your_bill'];

}	
?>