<?php

namespace App\ProcessFile;

class GetElementOfHasGoal
{
	public function __construct($file)
	{
		$this->file = $file;
	}
	public function execute()
	{
		$filterOne = str_replace("hasGoal(","",$this->file);
		$filterTwo = str_replace(").","",$filterOne);
		$this->breakElement = explode(",", $filterTwo);
		return $this;
	}
	public function get(&$newFile)
	{
		$newFile = $this->breakElement;
	}	
}
