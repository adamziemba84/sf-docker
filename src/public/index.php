<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);


$pdo = new \PDO(
    'mysql:host=db;
     dbname=demoDb',
    'demoUser',
    'demoPass'
);



class SystemInfo {

  private $data;

  public function __construct($data)
  {
    $this->data = $data;    
  }

  public function getData()
  {
    return $this->data;
  }
}

$system = new SystemInfo('sdsdsd');

echo $system->getData()."sdsoioioi";
