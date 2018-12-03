<?php

namespace App\Package;

use App\ProcessFile\ChangeFileToArrays;
use App\ProcessFile\NextProcessFile;

class ProgramProcessFile extends AbstractProgramExecution
{
	public function running()
	{
//		(new ProgramSetElement)->running();
		(new ProgramSetRelation)->running();
	}
}
