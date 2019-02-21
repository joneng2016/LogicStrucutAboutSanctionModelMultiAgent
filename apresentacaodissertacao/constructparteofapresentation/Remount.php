<?php   
	$readThis = [ 
		"hasRisk(X, risk_j, cs_k) | risk_k \in Risk \wedge cs_k \in Consequence \wedge (X = c_k \vee X = r_k)"
	];
	$file = fopen("rewrite","w");
	foreach($readThis as $element)
	{		
		if(strpos($element,"sendo") != false)
			$element = str_replace("$", "", str_replace("sendo", "", str_replace("que", "", $element)));

		$lenString = strlen($element);
		$halfString = intval(($lenString)*0.5);
	
		$numberTerm = ""; 
		for($i = $halfString; $i < $lenString; $i++)
		{
			if($halfString[$i] == "")
			{
				$numberTerm  = $i;
				break;
			}
		}
		$newElement = "";
		for($i = 0; $i < $lenString; $i++)
		{
			if($i == $numberTerm){
				$newElement = $newElement." nonumber \n";
			}
			$newElement = $newElement.$element[$i];
		}

		fwrite($file,"\begin{eqnarray}\n    ".$newElement."\nend{eqnarray}\n");
	}
	fclose($file);