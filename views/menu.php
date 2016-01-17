	

<div class="outer">

	<div class="inner">

		<span>   
				<a href="<?php echo "type/".	$e['name']; ?>"> 

				<?php 
			{	
				if(!isset($i))
					$i = 0;
				while(isset($e->cname[$i]))
				 {				
					
					 echo htmlspecialchars($e->cname[$i]);
				 	 $i++;
				 }
			}

				?>
				</a>
		</span>

	</div>

</div>