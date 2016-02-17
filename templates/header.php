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
	
	 

	<div class="head">
	    <h1>The Pizza Bay</h1>
	</div>	 
<div class="bg">
	 <?php 
	 if(isset($_GET['sub_type']))
	 {
	 	echo '<form action="../includes/finalbill.php" method="post">';

	 }
	  ?>
