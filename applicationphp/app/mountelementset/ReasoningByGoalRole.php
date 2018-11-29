<?php

namespace App\MountElementSet;

class ReasoningByGoalRole extends AbstractMountElement
{
	public function execute()
	{
		$agentHasGoal = [];
		(new OutOfPackage($this->package))->getHasRole($hasRoles)->getHasGoal($hasGoals);		
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
		$this->element = (new GetAgentImportantThisGoal($this->package));
		return $this;	
	}
}
