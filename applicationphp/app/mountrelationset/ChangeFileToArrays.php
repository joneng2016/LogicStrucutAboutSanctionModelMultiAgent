<?php

namespace App\MountRelationSet;

use App\ReadFile\ExecuteReadFile;
use App\ProcessFile\NextProcessFile;

class ChangeFileToArrays extends StateRelationMount 
{
	public function execute()
	{
		(new ExecuteReadFile(__DIR__."/../../file/somerelations.yki"))->lineByLine()->get($arrayFile);
		$this->package["arrayFile"] = $arrayFile;;
		$this->package = (new NextProcessFile(new ChangeFileToArrays($this->package)))->next();
		var_dump($this->package);			
		
		return $this;
	}
}
