<?php

namespace App\Package;


class ProgramSetRelation extends AbstractProgramExecution
{
	public function running()
	{
		(new Programas)->mountRelationSet();
	}
}
