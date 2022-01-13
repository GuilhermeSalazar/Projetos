<?php 
 require 'padrao/conectar.php';

 $nome = $_POST['login'];

 $senha = $_POST['senha'];

 
 $compara = mysqli_query($sql,"SELECT * FROM usuario where  usuario like '$nome' && senha like '$senha'")or die(mysqli_error());

 $cont = mysqli_num_rows($compara);

 if ($cont == 1) {
 	 
    

   if($set = mysqli_fetch_array($compara)){


     session_start();


     $_SESSION['nome'] = $set['nome'];
     $_SESSION['id'] = $set['id'];
     $_SESSION['senha'] = $set['senha'];
     $_SESSION['perfil'] = $set['perfil'];
     $_SESSION['cargo'] = $set['cargo'];
     $_SESSION['email'] = $set['email'];
     $_SESSION['estatus'] = $set['estatus'];
     $id = $_SESSION['id']; 
     mysqli_query($sql,"UPDATE usuario set estatus = '1' where id = '$id'");

      header("location: /acesso%202/painel.php");


   }


 }
 if($cont == 0){


header("location: /acesso%202/logar.php");
 }



?>