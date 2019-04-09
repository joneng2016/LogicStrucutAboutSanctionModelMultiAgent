<?php

namespace App\AbstractMount;

abstract class AbstractInstanceElement
{
	public static function allocation(&$element,$object)
	{
		$element = $object;
	} 
}
