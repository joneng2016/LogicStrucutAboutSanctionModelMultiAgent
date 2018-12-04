<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class MountRealRelations extends StateRelationMount 
{
	public function execute()
	{
		$relationsWithOutXs = $this->package["relationsAgentsWithoutX"];
		$relations = $this->package;
		var_dump($relations);
		die();
		//$this->element = 
		return $this;
	}
}

