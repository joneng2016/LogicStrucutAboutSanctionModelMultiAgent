<?php

namespace App\Database;

class DBConnection
{
	private static $dbconnection;
	private function __construct()
	{

	}
	public static function startConnection($nameUser,$passWord)
	{
		self::$dbconnection = new \PDO('mysql:host=localhost;dbname=dbapplication',$nameUser,$passWord);		
	}
	public static function find()
	{
		$toExecute = self::$dbconnection->prepare('SELECT * FROM relations');
		$toExecute->execute();
		return $toExecute->fetchAll();
	}
}