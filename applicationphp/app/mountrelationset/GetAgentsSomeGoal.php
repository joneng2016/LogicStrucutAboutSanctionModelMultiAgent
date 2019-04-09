<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class GetAgentsSomeGoal extends StateRelationMount 
{
	public function execute()
	{
		$goal = $this->package["goal"];
		$relationAgents = $this->package["relationsAgents"];
		$agentsOnThisGoal = [];

		foreach($relationAgents as $relationAgent)
			if($relationAgent[1] == $goal) $agentsOnThisGoal[] = $relationAgent[0];
		
		$this->package["agentOnThisGoal"] = $agentsOnThisGoal;
		
		$this->element = (new ChangeXbyAgentName($this->package));
		return $this;
	}
}

