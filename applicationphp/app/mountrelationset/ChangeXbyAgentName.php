<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class ChangeXbyAgentName extends StateRelationMount 
{
	public function execute()
	{
		$agentOnThisGoals = $this->package["agentOnThisGoal"];
		$withXs = $this->package["withX"];
		$relationsAgents = [];
		foreach($withXs as $withX)
		{
			foreach($agentOnThisGoals as $agentOnThisGoal)
				$relationsAgents[] = str_replace("X",$agentOnThisGoal,$withX);
		}	
		$this->package["relationsAgentsWithoutX"] = $relationsAgents;
		$this->element = (new MountRealRelations($this->package));
		return $this;
	}
}



