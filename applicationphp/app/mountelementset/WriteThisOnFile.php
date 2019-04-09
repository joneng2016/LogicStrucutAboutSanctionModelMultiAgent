<?php

namespace App\MountElementSet;

use App\ConstructFile\LoadFile;

class WriteThisOnFile extends AbstractMountElement
{
	public function execute()
	{
		(new OutOfPackage($this->package))->getStringWithAgentAndNameFile($strinWithAgent,$nameFile);
		(new LoadFile(__DIR__."/../../file/".$nameFile))->openFile()->write($strinWithAgent)->close();
		return $this;
	}
	public function callOtherState()
	{	
		return "finish of program";
	}
}
