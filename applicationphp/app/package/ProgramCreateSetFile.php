<?php

namespace App\Package;

class ProgramCreateSetFile extends AbstractProgramExecution
{
	public function running()
	{
        (new Programs)->mountFileERCGroup();
    }
}

