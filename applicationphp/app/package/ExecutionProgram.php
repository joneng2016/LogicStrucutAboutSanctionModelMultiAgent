<?php

namespace App\Package;

class ExecutionProgram
{
	public static function executeProgram(AbstractProgramExecution $programToExecution)
	{
		$programToExecution->running();
	}
}
