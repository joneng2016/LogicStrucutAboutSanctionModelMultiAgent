<?php

namespace App\ProcessFile;

class ReasoningByGoalRole extends StateProcessFile
{
	public function execute()
	{
		$agentHasGoal = [];
		(new OutPutOfPackageProcessFile($this->package))->getHasRole($hasRoles)->getHasGoal($hasGoals);		
		(new FilterOfN($hasRoles))->execute($hasRolesFilter);
		(new FilterOfN($hasGoals))->execute($hasGoalsFilter);

		foreach($hasRolesFilter as $hasRole)
		{
			foreach ($hasGoalsFilter as $hasGoal) 
			{
				if($hasRole[1] == $hasGoal[0])
					$agentHasGoal[] = [$hasRole[0],$hasGoal[1]];
			}
		}
		$this->package["agentHasGoal"] = $agentHasGoal;
		$this->element = $this->package["agentHasGoal"];
		return $this;	
	}
	public function callOtherState()
	{	
		return $this->element;
	}
}
