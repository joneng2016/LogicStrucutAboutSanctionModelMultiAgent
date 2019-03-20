<?php

namespace App\ReadFile;

class ExecuteReadFile
{
	public function __construct($where)
	{
		$this->where = $where;
		$this->arrayFile = []; 
	}
	public function lineByLine()
	{
		$lines = file($this->where);
		foreach($lines as $line)
			$this->arrayFile[] = $line;			
		return $this;
	}
	public function get(&$arrayFile)
	{
		$arrayFile = $this->arrayFile;
	}
}
