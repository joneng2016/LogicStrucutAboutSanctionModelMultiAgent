<?php

namespace App\Package;

use App\ConstructFile\LoadFile;
use App\ConstructContext\MountRelBetweenElements;
use App\MountElementSet\ChangeState;
use App\MountElementSet\ConstructNormalString;
use App\MountRelationSet\NextStateProcessFile;
use App\MountRelationSet\ChangeFileToArrays;
class Programs
{
	public static function loadfile($firstName,$secondName,$fileName)
	{
		(new MountRelBetweenElements($firstName,$secondName))->generateNumber()->constructString()->getString($stringsMount);
		(new LoadFile(__DIR__."/../../file/".$fileName))->openFile()->write($stringsMount)->close();
	}
	public function mountElementSet($set,$goal,$elements,$namefile)
	{
		$package = ["elements" => $elements,"goal" => $goal, "set" => $set, "nameFile" => $namefile];
		return (new ChangeState((new ConstructNormalString($package))))->next();
	}
	public function mountRelationSet($set,$goal,$relations,$namefile)
	{
		$package = ["relations" => $relations,"goal" => $goal, "set" => $set, "nameFile" => $namefile];		
		return (new NextStateProcessFile(new ChangeFileToArrays($package)))->next();
	}
}
