<?php

namespace App\AbstractMount;

class NextState
{
	public function __construct($element)
	{
		$this->element = $element;
		return $this;
	}
	public function next()
	{
		return $this->element->execute()->callOtherState();
	}
}
