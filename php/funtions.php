<?php

include_once 'php/conexion.php';

class funciones {

  private $bd;

  function __construct(){
    $this->bd = new database();
  }

}
