<?php 
include 'templates/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width"> 
	<title> <?=htmlspecialchars($title);?> </title>
	<?php echo '<link rel="stylesheet" type="text/css" href="'.ROOT.'/css/default.css">';?>
</head>
<body>    
	<div class="bg">	
	 <h1 class="head">The Pizza Bay</h1>
	 <div>

	 <?php
	 if(isset($_GET['sub_type']))
	 {
	 	echo '<form action="../includes/finalbill.php" method="post">';

	 }
	  ?>