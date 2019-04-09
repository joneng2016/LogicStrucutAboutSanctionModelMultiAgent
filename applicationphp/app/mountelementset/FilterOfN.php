<?php

namespace App\MountElementSet;

class FilterOfN 
{
	public function __construct($array)
	{
		$this->array = $array;
	}
	public function execute(&$newArray)
	{
		$newArray = [];
		foreach($this->array as $element)
		{
			$newArray[] = [
				str_replace("\n","",$element[0]),
				str_replace("\n","",$element[1])				
			];
		}
	}
}
