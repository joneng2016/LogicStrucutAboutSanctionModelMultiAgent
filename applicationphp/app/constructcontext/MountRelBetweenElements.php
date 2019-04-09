<?php

namespace App\ConstructContext;

class MountRelBetweenElements
{
	public function __construct($firstPartOfName,$secondPartOfName)
	{
		$this->firstPartOfName = $firstPartOfName;
		$this->secondPartOfName = $secondPartOfName;
	}
	public function generateNumber()
	{	
		$this->numbers = []; 
		for($i = 2; $i <= 7; $i++)
			$this->numbers[] = $i;
		return $this;
	}
	public function constructString()
	{
		$this->stringsMount = "";
		foreach ($this->numbers as $number)
			$this->stringsMount = $this->stringsMount.$this->firstPartOfName.$number.$this->secondPartOfName."\n";

		return $this;
	}
	public function getString(&$stringsMount)
	{
		$stringsMount = $this->stringsMount;
	}
	
}
