<?php 
  $sql = mysqli_connect('localhost','root','','mldisplay');
  $id_senha = $_POST['id_senha'];
  $atual = $_POST['atual'];
  $nova_senha = $_POST['senha'];
  

  $consulta = mysqli_query($sql,"SELECT * FROM usuario where  id like '$id_senha'");
 
     if ($linha = mysqli_fetch_array($consulta)) {
     	
         if($linha['senha'] == $atual){

              mysqli_query($sql,"UPDATE usuario SET senha = '$nova_senha' where id = '$id_senha'");

              echo "SENHA ALTERADA COM SUCESSO!";

         }else{
         	echo "SENHA ATUAL INVALIDA";
         }

     }





 ?>