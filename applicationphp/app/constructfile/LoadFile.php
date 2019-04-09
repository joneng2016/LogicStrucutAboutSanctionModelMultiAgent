<?php

namespace App\ConstructFile;

class LoadFile
{
	public function __construct($where)
	{
		$this->where = $where;
	}
	public function openFile()
	{
		$this->file = fopen($this->where,"w");
		return $this;
	}
	public function write($text)
	{
		fwrite($this->file, $text);
		return $this;
	}
	public function close()
	{
		fclose($this->file);
	}

}
