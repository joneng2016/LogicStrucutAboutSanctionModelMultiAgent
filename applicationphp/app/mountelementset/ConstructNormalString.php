<?php

namespace App\MountElementSet;

use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class ConstructNormalString extends AbstractMountElement
{
	public function execute()
	{
		(new OutOfPackage($this->package))->getToConstructString($els,$set);
		$string = "";
		$existAgent = false;
		foreach($els as $el)
		{
			if($el != "agente")
				$string = $string."isElementOf(".$el.",".$set.").\n";
			if($el == "agente")
				$existAgent = true;
		}
		$this->package["stringWithoutAgent"] = $string; 
		
		if($existAgent)
		{
			$this->package = (new NextProcessFile(new ChangeFileToArrays($this->package)))->next();
			InstanceElement::allocation($this->element,new GetAgentImportantThisGoal($this->package));
		}
		else 
			InstanceElement::allocation($this->element,new WriteThisOnFileWithOutAgent($this->package));			
		
		return $this;
	}
}
