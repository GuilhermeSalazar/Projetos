<?php 
require 'db.php';

// variaves //

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];

//configuração 

 mysqli_query($sql,"UPDATE agenda SET descricao = '$titulo', dia = '$data', hora = '$hora' where id = '$id'");

 echo "alterado com sucesso";


 ?>