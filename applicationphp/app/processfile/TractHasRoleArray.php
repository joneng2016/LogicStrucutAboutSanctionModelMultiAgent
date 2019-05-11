<?php

namespace App\ProcessFile;

class TractadoptsRoleArray extends StateProcessFile
{
	public function execute()
	{
		$adoptsRole = [];		
		(new OutPutOfPackageProcessFile($this->package))->getFiles($files);
		foreach ($files as $file) 
		{
			if(strpos($file,"adoptsRole") !== false)		
			{
				(new GetElementOfadoptsRole($file))->execute()->get($newFile);
				$adoptsRole[] = [$newFile[0],$newFile[1]];
			}
		}
		$this->package["adoptsRole"] = $adoptsRole;
		$this->element = (new ReasoningByGoalRole($this->package));
		return $this;
	}	
}
