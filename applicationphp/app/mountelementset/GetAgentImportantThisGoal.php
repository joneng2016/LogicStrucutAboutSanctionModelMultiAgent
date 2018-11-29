<?php

namespace App\MountElementSet;

class GetAgentImportantThisGoal extends AbstractMountElement
{
	public function execute()
	{
		$agents = [];
		(new OutOfPackage($this->package))->getGoalAgentHasGoal($goal,$agentHasGoals);
		foreach($agentHasGoals as $agentGoal)
		{
			if($agentGoal[1] == $goal)
				$agents[] = $agentGoal[0];
		}
		$this->package["agents"] = $agents;
		$this->element = (new ConstructNormalStringWithAgent($this->package)); 
		return $this;	
	}
}
