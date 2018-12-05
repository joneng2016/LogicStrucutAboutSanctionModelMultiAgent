<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class FindXOnName extends StateRelationMount 
{
	public function execute()
	{
		$relations = $this->package["relations"];
		$withX = [];
		foreach($relations as $relation)
			if(strpos($relation,"X") !== false) $withX[] = $relation;

        if(!empty($withX))
        {
 		    $this->package["withX"] = $withX;        
            $this->element = (new GetAgentsSomeGoal($this->package));
        }
        else
           $this->element = (new MountRealRelations($this->package));
		return $this;
	}
}

