<?php

namespace App\AbstractMount;

abstract class AbstractNextState
{
	public function __construct($element)
	{
		$this->element = $element;
	}
	public function next()
	{
		$this->element->execute()->callOtherState();
	}
}
