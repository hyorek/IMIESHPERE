<?php
/*
class SPDO
{
  private $PDOInstance = null;
  private static $instance = null;
  const DEFAULT_SQL_USER = 'root';
  const DEFAULT_SQL_HOST = 'localhost';
  const DEFAULT_SQL_PASS = '';
  const DEFAULT_SQL_DTB = 'projet_delta';

  private function __construct()
  {
    $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);    
  }
 
  public static function getInstance()
  {  
    if(is_null(self::$instance))
    {
      self::$instance = new SPDO();
    } else {
      echo 'SingletonBDD must be define';
    }
    return self::$instance;
  }

  public function query($query)
  {
    return $this->PDOInstance->query($query);
  }
}
*/
?>

<?php
class BDD{
    public static $instance = null;
    const DEFAULT_SQL_USER = 'root';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = '';
    const DEFAULT_SQL_DTB = 'projet_delta';
    
    private $connexionBDD;

    private function __construct(){
        try {
              $this->PDOInstance = new PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS);    
        } catch (Exception $ex) { 
            print ("ERROR !: " . $ex->getMessage() . "<br/>");
        }
    }

    public static function getInstance() {
        if (empty(self::$instance)){
            self::$instance = new BDD();
            return self::$instance;
        } else {
            echo "Deja instancier";
            return self::$instance;
        }
    }

    public function queryGet($query){
        $returnReq = $this->query($query);
        return $returnReq;
    }

    public function execution($exec){
        $this->connectionBDD->query($query);
    }

}

$bdd = BDD::getInstance();
?>





