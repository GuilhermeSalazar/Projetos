<?php 
require 'db.php';

$id =  $_POST['id'];
$modulo = $_POST['modulo'];
$descri = $_POST['obs'];
$valor = $_POST['valor'];



  if(empty($modulo)){


  	echo "empty";
  }else{


   
    mysqli_query($sql,"INSERT INTO modelo_sis VALUES(default,'$modulo','$valor','$id','$descri')")or die(mysqli_error());

    echo "true";

  }


 ?>