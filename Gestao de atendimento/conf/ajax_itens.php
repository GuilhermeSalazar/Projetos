<?php 
require 'db.php';


$id = $_POST['id'];
$item = $_POST['item'];
$valor = $_POST['valor'];
$de = $_POST['de'];
$ate = $_POST['ate'];
$acao = $_POST['acao'];


  switch ($acao){
  	case '1':
  	  mysqli_query($sql,"UPDATE garantia_contrato set nome = '$item', valor = '$valor', data_inicial = '$de', data_final = '$ate' where id = '$id'")or die(mysqli_error());
  	     echo "Alteração Realizada com Sucesso";
  	break;
  	case '2':
  	 mysqli_query($sql,"UPDATE garantia_contrato set status = '0' where id = '$id'");
  	echo "Cancelado!!";
  	break;
  	case '3':
       mysqli_query($sql,"UPDATE garantia_contrato set status = '1' where id = '$id'");
  	echo "ativado!!";
  	break;
  }



 ?>