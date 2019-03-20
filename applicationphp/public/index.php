<?php

require_once "../vendor/autoload.php";

use App\Package\ExecutionProgram;
use App\Package\ProgramSetElement;
use App\Package\ProgramSetRelation;
use App\Package\ProgramProcessFile;
use App\Package\ProgramCreateSetFile;

ExecutionProgram::executeProgram((new ProgramSetRelation));

