<?php
 include "index.php";
 require 'database.php';

class etudient{
  private $name;
  private $email;
  private $diploma;
  private $fb_id;
  private $phone;
  public function __construct(){
    if (isset($_POST['name']))
      $this->name=$_POST['name'];
    if (isset($_POST['email']))
      $this->email=$_POST['email'];
    if (isset($_POST['diploma']))
      $this->diploma=$_POST['diploma'];
    if (isset($_POST['phone']))
      $this->phone=$_POST['phone'];
      if (isset($_POST['fb']))
        $this->fb_id=$_POST['fb'];
  }

  public function enregistrer(){
    $db=new database();
    $db->insert("INSERT INTO inscription VALUES(NULL, '".$this->name."', '" . $this->email . "','".$this->diploma."', '".$this->fb_id."','".$this->phone."');");
  }

}

$e=new etudient();
$e->enregistrer();
header('location:index.php');


 ?>
