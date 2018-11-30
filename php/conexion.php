<?php

class database {
  private $pdo;//variable para iniciar el pdo
  var $Host = "localhost";//nombre del host que se ocupara
  var $BdName = "";//nombre de la base de datos
  var $User = "root";//nombre del usuario
  var $Password = "";//la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->Host . ';dbname=' . $this->BdName, $this->User, $this->Password);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }
//cierra la conexion
  function CerrarConexion() {
    $this->pdo = null;
  }

} 