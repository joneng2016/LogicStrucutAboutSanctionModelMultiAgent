<?php

namespace App\ProcessFile;

class TractHasRoleArray extends StateProcessFile
{
	public function execute()
	{
		$hasRole = [];		
		(new OutPutOfPackageProcessFile($this->package))->getFiles($files);
		foreach ($files as $file) 
		{
			if(strpos($file,"hasRole") !== false)		
			{
				(new GetElementOfHasRole($file))->execute()->get($newFile);
				$hasRole[] = [$newFile[0],$newFile[1]];
			}
		}
		$this->package["hasRole"] = $hasRole;
		$this->element = (new ReasoningByGoalRole($this->package));
		return $this;
	}	
}
