<?php 

  require 'db.php';

  $acao = $_POST['acao'];
  $descri = $_POST['obs'];
  $valor = $_POST['valor'];
  $vencimento = $_POST['data'];
  $id = $_POST['id'];

   if($acao == '2'){


     mysqli_query($sql,"UPDATE modulo set descricao = '$descri', vencimento = '$vencimento', valor = '$valor' where id = '$id'")or die(mysqli_error());

     echo "Alteração Realizada com Sucesso!";


   }
   if($acao == '1'){


     mysqli_query($sql,"UPDATE modulo set descricao = '$descri', vencimento = '$vencimento', valor = '$valor', status = '1' where id = '$id'")or die(mysqli_error());

     echo "Cancelado Realizada com Sucesso!";


   }
   if($acao == '4'){


     mysqli_query($sql,"UPDATE modulo set descricao = '$descri', vencimento = '$vencimento', valor = '$valor', status = '0' where id = '$id'")or die(mysqli_error());

     echo "Ativado Realizada com Sucesso!";


   }
    if($acao == '3'){


     mysqli_query($sql,"UPDATE modulo set descricao = '$descri', vencimento = '$vencimento', valor = '$valor', status = '0' where id = '$id'")or die(mysqli_error());

     echo "Renovação Realizada com Sucesso!";


   }



 ?>