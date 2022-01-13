<?php 

  require 'db.php';


  // declarando variaveis 


  $tipo = $_POST['tipo'];
  $nome = $_POST['nome'];


   if(empty($tipo) && empty($nome)){


   	echo "Preencha todos os Campos";
   }else{


      if($tipo == 1){

       
       mysqli_query($sql,"INSERT INTO marca values(default,'$nome')");


      echo "Marca cadastrada com sucesso!";

      }

      if($tipo == 2){

       
       mysqli_query($sql,"INSERT INTO categoria values(default,'$nome')");


      echo "Categoria cadastrada com sucesso!";

      }


   }



	 ?>