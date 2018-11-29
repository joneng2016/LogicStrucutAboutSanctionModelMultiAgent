<?php

namespace App\MountElementSet;

use App\ReadFile\ExecuteReadFile;

class ChangeFileToArrays extends AbstractMountElement
{
	public function execute()
	{
		(new ExecuteReadFile(__DIR__."/../../file/somerelations.yki"))->lineByLine()->get($arrayFile);
		$this->package["arrayFile"] = $arrayFile;
	
		$this->element = (new TractHasGoalArray($this->package));
		return $this;
	}
}
