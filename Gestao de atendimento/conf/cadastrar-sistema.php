<?php 

 require 'db.php';

 $nome = $_POST['nome'];

 $img = $_POST['img'];



   if(empty($nome) && empty($img)){


   	echo "Erro no cadastro ";
   }else{


       mysqli_query($sql,"INSERT INTO sistema values(default,'$nome','$img','0','0','0')");

       echo "Cadastrado com sucesso";

   }

 ?>