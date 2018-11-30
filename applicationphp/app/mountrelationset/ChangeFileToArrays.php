<?php

namespace App\MountRelationSet;

use App\ReadFile\ExecuteReadFile;

class ChangeFileToArrays extends StateRelationMount 
{
	public function execute()
	{
		(new ExecuteReadFile(__DIR__."/../../file/somerelations.yki"))->lineByLine()->get($arrayFile);
		$this->package["arrayFile"] = $arrayFile;
		
		var_dump($arrayFile);	
		return $this;
	}
}
