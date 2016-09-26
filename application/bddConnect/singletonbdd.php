<?php
class BDD {
	public static $instance = null;
	const DEFAULT_SQL_USER = 'root';
	const DEFAULT_SQL_HOST = 'localhost';
	const DEFAULT_SQL_PASS = '';
	const DEFAULT_SQL_DTB = 'projet_delta';
	private $connexionBDD;
	private function __construct() {
		try {
			$this->PDOInstance = new PDO ( 'mysql:dbname=' . self::DEFAULT_SQL_DTB . ';host=' . self::DEFAULT_SQL_HOST, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
		} catch ( Exception $ex ) {
			print ("ERROR !: " . $ex->getMessage () . "<br/>") ;
		}
	}
	public static function getInstance() {
		if (empty ( self::$instance )) {
			self::$instance = new BDD ();
			return self::$instance;
		} else {
			// echo "Deja instancier";
			return self::$instance;
		}
	}
	public static function getConnect() {
		return ($this->PDOInstance);
	}

	
	public function queryGet($req) {
		$resuReq = $this->PDOInstance->query($req);
		return $resuReq;
	}
	public function execution($req, $prep) {
		$reqt = $this->PDOInstance->prepare($req);
		$reqt->execute($prep);
	}
	
	public function fetchData($fetchRow) {
		$result = $fetchRow->fetch();
		return ($result);
	}
}
$bdd = BDD::getInstance ();

?>





