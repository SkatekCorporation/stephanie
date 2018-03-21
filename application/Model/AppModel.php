<?php
/**
* AppModel.php
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
* @importance Model principal de l'application a utiliser si necessaire
*/
namespace App\Model;

/**
* AppModel
* @uses Tout les models doivent heriter cette classe 
*/
class AppModel
{
	protected $table;

	public function __construct($table = null) 
	{
		if ($table == null){
			$this->setTable(substr(get_class($this), 10, -5));
		} else {
			$this->setTable($table);			
		}
	}

	protected static function connexion()
	{
		$connexion = new \mysqli(HOST, DB_USERNAME, DB_PASSWORD, DATABASE);
		$connexion->set_charset("utf8");
		if($connexion->connect_error)
		{
			throw new \Stephanie\Router\RouterException($connexion->connect_error, 500);
			// return debug($connexion->connect_error);		
		} 
		return $connexion;
	}

	public function query($q)
	{
		return self::connexion()->query($q);
	}

	public function findAll()
	{
		$query = "SELECT * FROM " . $this->table;

		return $this->query($query);
	}

	public function setTable($table = null)
	{
		$this->table = strtolower($table);
	}
}