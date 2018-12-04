<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class FirstState extends StateRelationMount 
{
	public function execute()
	{
		$this->package["relationsAgents"] = (new NextProcessFile(new ChangeFileToArrays($this->package)))->next(); 		  $this->element = (new FindXOnName($this->package));
		return $this;
	}
}

