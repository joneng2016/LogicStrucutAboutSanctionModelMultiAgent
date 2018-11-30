<?php

namespace App\AbstractMount;

abstract class AbstractMount
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
