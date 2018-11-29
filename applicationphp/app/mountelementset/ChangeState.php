<?php

namespace App\MountElementSet;

class ChangeState
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
