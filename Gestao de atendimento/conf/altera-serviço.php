<?php 

 require 'db.php';


 $nome = $_POST['nome'];
 $descri = $_POST['descri'];
 $valor = $_POST['valor'];
 $id = $_POST['id'];

 mysqli_query($sql,"UPDATE servico set nome = '$nome ', servico = '$descri', valor = '$valor' where id = '$id'")or die(mysqli_error());

 echo "Alteração Realizada com sucesso!";





 ?>