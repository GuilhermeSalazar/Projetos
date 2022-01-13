<?php 




 require 'db.php';


 $nome = $_POST['nome'];
 $descri = $_POST['descri'];
 $valor = $_POST['valor'];
 $id = $_POST['id'];

 mysqli_query($sql,"UPDATE itens_contrato set nome = '$nome ', obs = '$descri', valor = '$valor' where id = '$id'")or die(mysqli_error());

 echo "Alteração Realizada com sucesso!";





 ?>