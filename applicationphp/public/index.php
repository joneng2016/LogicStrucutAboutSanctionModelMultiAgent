<?php

require_once "../vendor/autoload.php";

use App\Package\ExecutionProgram;
use App\Package\ProgramSetElement;
use App\Package\ProgramSetRelation;
use App\Package\ProgramProcessFile;

ExecutionProgram::executeProgram((new ProgramProcessFile));

