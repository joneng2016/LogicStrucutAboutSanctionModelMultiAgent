<?php

namespace App\MountElementSet;

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
			InstanceElement::allocation($this->element,new ChangeFileToArrays($this->package));
		else 
			InstanceElement::allocation($this->element,new WriteThisOnFileWithOutAgent($this->package));			
		
		return $this;
	}
}
