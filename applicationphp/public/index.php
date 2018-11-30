<?php

require_once "../vendor/autoload.php";

use App\Package\ExecutionProgram;
use App\Package\ProgramSetElement;
use App\Package\ProgramSetRelation;

ExecutionProgram::executeProgram((new ProgramSetRelation));

