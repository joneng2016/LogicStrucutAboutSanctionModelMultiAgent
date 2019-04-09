<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ProcessFile\ChangeFileToArrays;

class MountRealRelations extends StateRelationMount 
{
	public function execute()
	{

		$relations = $this->package["relations"];    
        $relationLast = array();

        if(isset($this->package["relationsAgentsWithoutX"]))
        {
 		    $relationsWithOutXs = $this->package["relationsAgentsWithoutX"];        
            foreach($relationsWithOutXs as $relationNoX)
               $relationLast[] = $relationNoX;
        }

        foreach($relations as $relation)
            if(!strpos($relation,"X")) $relationLast[] = $relation;

        $this->package["relationLast"] = $relationLast; 
		$this->element = (new WriteFile($this->package));
		return $this;
	}
}


