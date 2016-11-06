<?php
require 'config.php';

class database{
  private $pdo;
  public function connect(){
  if($this->pdo===null){
    $pdo=new PDO('mysql:dbname='.config::$db.';host='.config::$host,config::$user,config::$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $this->pdo=$pdo;
  }
  return $this->pdo;
}
public function insert($statments){
  $stm=$this->connect()->query($statments);


}
public function select($statments){
  return $this->connect()->query($statments);
}
}

?>
