<?php 
   require 'db.php';

  $sistema = $_POST['busca'];

  // consulta ao banco 


    session_start();

    $_SESSION['system32'] = $sistema;

    echo "true";


 ?>