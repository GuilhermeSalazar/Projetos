<?php
require 'db.php';

$tipo = $_POST['tipo'];

  
   if($tipo == 1){
   
    $nome =$_POST['nome'];
    $msg = $_POST['descri'];

    mysqli_query($sql,"INSERT INTO itens_contrato values(default,'$nome','$msg','1','null')")or die(mysqli_error());

    echo "Garantia cadastrada com sucesso";






   }
   if($tipo == 2){
   
    $nome =$_POST['nome'];
    $msg = $_POST['descri'];
    $valor = $_POST['valor'];

    mysqli_query($sql,"INSERT INTO itens_contrato values(default,'$nome','$msg','2','$valor')")or die(mysqli_error());

    echo "Item cadastrado com sucesso!";






   }



 ?>