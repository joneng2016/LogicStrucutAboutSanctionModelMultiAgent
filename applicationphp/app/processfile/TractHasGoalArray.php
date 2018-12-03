<?php

namespace App\ProcessFile;

class TractHasGoalArray extends StateProcessFile 
{
	public function execute()
	{
		$hasGoal = [];
		(new OutPutOfPackageProcessFile($this->package))->getFiles($arrayFile);
		foreach($arrayFile as $file)
		{
			if(strpos($file,"hasGoal") !== false)		
			{
				(new GetElementOfHasGoal($file))->execute()->get($newFile);
				$hasGoal[] = [$newFile[0],$newFile[1]];
			}
		}
		$this->package["hasGoal"] = $hasGoal; 
		$this->element = (new TractHasRoleArray($this->package));
		return $this;
	}
}
