<?php

namespace App\Package;

use App\ProcessFile\ChangeFileToArrays;
use App\ProcessFile\NextProcessFile;

class ProgramProcessFile extends AbstractProgramExecution
{
	public function running()
	{
		$this->package = [];
		return (new NextProcessFile(new ChangeFileToArrays($this->package)))->next();
	}
}
