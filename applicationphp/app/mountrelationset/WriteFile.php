<?php

namespace App\MountRelationSet;

use App\AbstractMount\AbstractMount;
use App\AbstractMount\NextState;
use App\ProcessFile\NextProcessFile;
use App\ConstructFile\LoadFile;

class WriteFile extends StateRelationMount 
{
	public function execute()
	{
        $nameFile = $this->package["nameFile"];
        $relationLasts = $this->package["relationLast"];
        $relationset = $this->package["set"];
        $stringToFile = "";
        foreach($relationLasts as $relation)
            $stringToFile = $stringToFile."isElementOf(".$relation.",".$relationset.").\n";

        (new LoadFile(__DIR__."/../../file/".$nameFile))->openFile()->write($stringToFile)->close();             
        $this->element = "finish of program";
        return $this;
	}
    public function callOtherState()
    {
        return $this->element;
    }
}
