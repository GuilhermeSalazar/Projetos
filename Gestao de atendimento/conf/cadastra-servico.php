<?php 

require 'db.php';


$nome = $_POST['nome'];
$descri = $_POST['descri'];
$valor = $_POST['valor'];


// enviando 


   if(empty($nome) && empty($descri) && empty($valor)){


     echo "Preencha todos os campos!";


   }else{



    mysqli_query($sql,"INSERT INTO servico values(default,'$nome','$descri','$valor')")or die(mysqli_error());
      echo "Cadastrado com sucesso!";


   }


 ?>