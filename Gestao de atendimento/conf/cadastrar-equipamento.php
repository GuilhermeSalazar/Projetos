<?php 
require 'db.php';


//DECLARANDO VARIAVEIS NO SISTEMA 


$nome = $_POST['nome'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$serie = $_POST['serie'];
$contrato = $_POST['contrato'];
$data_de = $_POST['datade'];
$data_ate = $_POST['dataate'];
$id_cliente =$_POST['idcliente'];
$data_compra = $_POST['datacompra'];
$valor_total = $_POST['valortotal'];



$garantida  = $data_de .' ate '.$data_ate;


/* chamando funcção para cadastrar no banco */


   mysqli_query($sql,"INSERT INTO equipamento values(default,'$id_cliente','$nome','$marca','$modelo','$serie','$contrato','$garantida','$data_compra','$valor_total')");

   echo "Equipamento Cadastrado com sucesso!";



   $buscar = mysqli_query($sql,"SELECT * FROM modelo where nome = '$modelo'");


    $cont = mysqli_num_rows($buscar);

    if($cont == 0){

      mysqli_query($sql,"INSERT INTO modelo values(default,'$modelo')")or die(mysqli_error());


    }



 ?>