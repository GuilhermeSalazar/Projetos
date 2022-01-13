<?php 
 require 'db.php';

  $nome = $_POST['nome'];
  $obs = $_POST['descri'];
  $valor = $_POST['valor'];
  $id = $_POST['id'];



     mysqli_query($sql,"UPDATE modelo_sis SET modelo = '$nome', descricao = '$obs', valor = '$valor' where id = '$id'");


       echo "Alteração realizada com sucesso!";

 ?>