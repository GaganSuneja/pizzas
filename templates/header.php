<?php 
include 'includes/config.php';
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
		<?php 
		if(isset($_GET['tname']))
		{
            
    		echo $_GLOBAL['final_bill'];
    		echo '<fieldset style="width:100%;margin-left:400px;">';
			echo '<div>Types</div>';
            echo '<div>Sm</div>';
            echo '<div>lg</div>';
			echo '<legend>Your Order</legend>';
			echo '<form action = "../includes/finalbill.php" method="post">';

		}
		?>