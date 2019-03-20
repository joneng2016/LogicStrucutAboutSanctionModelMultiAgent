<?php

namespace App\ProcessFile;

class GetElementOfHasRole
{
	public function __construct($file)
	{
		$this->file = $file;
	}
	public function execute()
	{
		$filterOne = str_replace("hasRole(","",$this->file);
		$filterTwo = str_replace(").","",$filterOne);
		$this->breakElement = explode(",", $filterTwo);
		return $this;
	}
	public function get(&$newFile)
	{
		$newFile = $this->breakElement;
	}	
}
