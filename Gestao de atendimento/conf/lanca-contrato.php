<?php 
  require 'db.php';

  $id_cliente = $_POST['n_contrato'];
  $id_contrato = $_POST['item_id'];
  $de = $_POST['de'];
  $ate = $_POST['ate'];
  $valor = $_POST['valor'];
  $equipamento = $_POST['equipamento'];


  
$buscar_contrato = mysqli_query($sql,"SELECT * FROM itens_contrato where id = '$id_contrato'")or die(mysqli_error());

$array = mysqli_fetch_array($buscar_contrato);

$nome_contrato = $array['nome'];

$buscar_equipamento = mysqli_query($sql,"SELECT * FROM equipamento where id = '$equipamento'")or die(mysqli_error());
$array_equipamento = mysqli_fetch_array($buscar_equipamento);

$nome_equipamento = $array_equipamento['marca']." ".$array_equipamento['modelo']." NS: ".$array_equipamento['n_serie'];


   $data_valid = $de."ate".$ate;
  mysqli_query($sql,"UPDATE equipamento SET garantia_contrato = 'Cont: $nome_contrato', data_garantia = '$data_valid' where id = '$equipamento'")or die(mysqli_error());


mysqli_query($sql,"INSERT INTO garantia_contrato values(default,'$nome_contrato','$nome_equipamento','$de','$ate','$valor','1','$id_cliente')")or die(mysqli_error());


echo "Cadastrado com Sucesso!";



 ?>