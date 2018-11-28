<?php

require_once "../vendor/autoload.php";

use App\ConstructFile\LoadFile;
use App\ConstructContext\MountRelBetweenElements;

(new MountRelBetweenElements("X","Y"))->generateNumber()->constructString()->getString($stringsMount);
(new LoadFile(__DIR__."/../file/return.kst"))->openFile()->write($stringsMount)->close();

echo "Finish\n";
