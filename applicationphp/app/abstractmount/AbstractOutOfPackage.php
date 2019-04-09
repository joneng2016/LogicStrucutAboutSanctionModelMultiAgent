<?php

namespace App\AbstractMount;

class AbstractOutOfPackage
{
	public function __construct($package)
	{
		$this->package = $package;
	}
	public function getToConstructString(&$elements,&$set)
	{
		$elements = $this->package["elements"];
		$set = $this->package["set"];
	}
	public function getFiles(&$arrayFile)
	{
		$arrayFile = $this->package["arrayFile"];
	}
	public function getHasRole(&$hasRole)
	{
		$hasRole = $this->package["hasRole"];
		return $this;
	}
	public function getHasGoal(&$hasGoal)
	{
		$hasGoal = $this->package["hasGoal"];
	}
	public function getGoalAgentHasGoal(&$goal,&$agentHasGoal)
	{
		$goal = $this->package["goal"];
		$agentHasGoal = $this->package["agentHasGoal"];
	}
	public function getStringAndGoals(&$stringWithoutAgent,&$agents,&$set)
	{
		$agents = $this->package["agents"];
		$stringWithoutAgent = $this->package["stringWithoutAgent"];
		$set = $this->package["set"];
	}
	public function getStringWithAgentAndNameFile(&$strinWithAgent,&$nameFile)
	{
		$strinWithAgent = $this->package["stringWithAgent"];
		$nameFile = $this->package["nameFile"];
	}
	public function getStringWithOutAgentAndNameFile(&$stringWithoutAgent,&$nameFile)
	{
		$stringWithoutAgent = $this->package["stringWithoutAgent"];
		$nameFile = $this->package["nameFile"];
	}	
}
