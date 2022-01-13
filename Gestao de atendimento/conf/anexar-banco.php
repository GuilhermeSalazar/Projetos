<?php 
  require 'pdo.php';

  //declarando variaveis no sistema 
$arquivo = $_POST['arquivo'];
$hora =$_POST['hora'];
$de = $_POST['de'];
$para = $_POST['para'];
//-------------------------------------
////// FUNÇÃO PARA   DIVIDIR ARQUIVO E IMAGEM 



           
            $data =  date("Y-m-d");
          $pdo->query("INSERT INTO msg values(default, '$de', '$para', '0', '$data', '$hora', '','$arquivo')");

          echo "Enviado com sucesso";  





 ?>