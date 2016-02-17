<?php

function renderXml($attribute,$attribute_2 = NULL)
{

	$xml = simplexml_load_file("xml/menu.xml");

	$pathToXml = "/categories/".$attribute;

	if(isset($attribute_2))
	{
		$pathToXml = "/categories/category"."[@name='".$attribute_2."']/type";
		
		$pathToXml1 = "/categories/category"."[@name='".$attribute_2."']";;

		if(!isset($k))
		{
			$k = 0;
		}
		$dom = $xml->xpath($pathToXml1);
			
			$k = 0;
			
		
		foreach($dom = $xml->xpath($pathToXml1."/cname") as $key0 )
		{
			echo $key0; 
			echo "position:".strrpos($key0, 'o')-1;
			$key0  = substr($key0,0,(strrpos($key0, 'o')-1));
			echo "name:".$key0;
			
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
	}

}

function checkPage($page)
{
	return "/".$page;	

}
?>