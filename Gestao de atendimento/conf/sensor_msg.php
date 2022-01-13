<?php 
require 'pdo.php';
session_start();

$id = $_SESSION['id'];

  $buscar = $pdo->query("SELECT * from msg where para like '$id' && status like 0");

  $cont = $buscar->rowCount();


  if($cont == 0){

    echo "false";

  }
  if($cont > 0){


   echo "true";

  }



 ?>