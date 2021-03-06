<?php

namespace App\MountElementSet;

class TractHasRoleArray extends AbstractMountElement
{
	public function execute()
	{
		(new OutOfPackage($this->package))->getFiles($files);
		$hasRole = [];
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
