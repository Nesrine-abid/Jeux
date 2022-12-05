<?php

class Database
{
	private static $pdo;

	public function __construct($database = 'JEUX', $user = 'postgres', $pass = 'nesrine123')
	{
		$dsn = "pgsql:host=localhost; port=5432;  dbname=" . $database;
		if (is_null(self::$pdo)) {
			try {
				self::$pdo = new PDO($dsn, $user, $pass);
				// set the PDO error mode to exception
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $except) {
				echo "Echec de la connexion: " . $except->getMessage();
				die();
			}
		}
	}

	public function getPDO()
	{
		return self::$pdo;
	}

	public function read($query, $data = [])
	{
		$array = array();

		$stm = self::$pdo->prepare($query);
		$result = $stm->execute($data);
		if ($result) {
			$data = $stm->fetchAll(PDO::FETCH_OBJ);
			if (is_array($data) && count($data) > 0) {
				return $data;
			}
		}
		return $array;
	}

	// not expecting any data like delete 
	public function write($query, $data = [])
	{
		$stm = self::$pdo->prepare($query);
		$result = $stm->execute($data);
		if ($result) {
			return true;
		}
		return false;
	}
}