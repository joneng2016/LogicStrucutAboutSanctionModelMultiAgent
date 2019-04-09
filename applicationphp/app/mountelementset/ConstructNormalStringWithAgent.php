<?php

namespace App\MountElementSet;

class ConstructNormalStringWithAgent extends AbstractMountElement
{
	public function execute()
	{
		(new OutOfPackage($this->package))->getStringAndGoals($stringWithoutAgent,$agents,$set);
		$stringWithAgent = $stringWithoutAgent;
		foreach($agents as $agent)
			$stringWithAgent = $stringWithAgent."isElementOf(".$agent.",".$set.").\n";

		$this->package["stringWithAgent"] = $stringWithAgent;
		$this->element = (new WriteThisOnFile($this->package));
		return $this;
	}
}
