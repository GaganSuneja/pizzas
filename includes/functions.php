<?php

function renderXml($attribute,$attribute_2 = NULL)
{

	$xml = simplexml_load_file("xml/menu.xml");

	$pathToXml = "/categories/".$attribute;

	if(isset($attribute_2))
	{
		$pathToXml = "/categories/category"."[@name='".$attribute_2."']/type";

    	//$pathToXml1 = "/categories/category"."[@name='".$attribute_2."']/toppings";	
	   //echo $pathToXml;	
		
		$pathToXml1 = "/categories/category"."[@name='".$attribute_2."']";;
		//print_r($pathToXml1);

		if(!isset($k))
		{
			$k = 0;
		}
		$dom = $xml->xpath($pathToXml1);
			
			$k = 0;
			
			//print_r($dom);

			//echo "<br/>dim object".$dom[0]['cname'];
		
		foreach($dom = $xml->xpath($pathToXml1."/cname") as $key0 )
		{
			echo $key0;
			
			foreach ($db = $xml->xpath($pathToXml) as $key)
			{

				$e = $key;		

				$i=0;		

				require("views/costs.php");			
			}	

		}
		

		echo '<input type="hidden"  name = "number" value="'.$j.'">';
	}
	else
	{
		   foreach ($db = $xml->xpath($pathToXml) as $key)
			{

				$e = $key;		

				$i=0;		

				require("views/menu.php");			
			}
	}	
	//echo '<input type="hidden"  name = "number" value="'.$j.'">';

/*
	foreach ($db1 = $xml->xpath($pathToXml1) as $key)
	{
		
	    if(!isset($attribute_2))
		{
		  require("views/menu.php");	
		}
		else
		{
		  require("views/costs.php");	
		}



	    //$e = $key;		
		
		//echo $e->topname[0];
		//echo $e->topname[]['name'];
		//echo $e->topname[1];
		//echo $e->topname[1]['name'];
	}
*/
}

function render($template,$data = array())
{
	if(isset($template))
	{
		$pathToTemp = "templates/".$template.".php";
		if(file_exists($pathToTemp))
		{
			extract($data);
			require($pathToTemp);
		}
	}
}


function getHeader($xmlAttribute,$value=NULL)
{

	switch($xmlAttribute)
	{
		
		case "category"		       :renderXml($xmlAttribute);
		break;

		case "category/type"       :renderXml($xmlAttribute,$value);
		break;									

    	//case "category/type/size"  :renderXml($xmlAttribute);
                                 //   break;
    	//case "category/type/size"   :renderXml($xmlAttribute);
    								//break;
	}

}

function checkPage($page)
{
	return "/".$page;	

}

//function add_bill($money)
//{
//include_once "bill.php";

//$final_money = $final_money + $money; 

//}

?>