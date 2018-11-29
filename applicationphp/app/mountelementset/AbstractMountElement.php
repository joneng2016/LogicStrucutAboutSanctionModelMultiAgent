<?php

namespace App\MountElementSet;

abstract class AbstractMountElement
{
	public function __construct($package)
	{
		$this->package = $package;
	}
	abstract protected function execute();
	public function callOtherState()
	{	
		return (new ChangeState($this->element))->next();
	}
}
