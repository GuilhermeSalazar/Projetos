<?php 

  require 'db.php';

  $cliente = $_POST['id'];
  $data = $_POST['data'];
  $meio = $_POST['pagamento'];



  if(empty($meio)){
  	echo "preencha todos os campos ";
  }
  else{


   mysqli_query($sql,"INSERT INTO contrato values(default,'$data','$meio','$cliente')")or die(mysqli_error());

   echo "Contrato aberto com sucesso!";

  }

 ?>