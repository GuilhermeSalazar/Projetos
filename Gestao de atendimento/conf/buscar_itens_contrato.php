<?php 
require 'db.php';



$id = $_POST['id'];

$buscar_itens = mysqli_query($sql,"SELECT * FROM itens_contrato where id = '$id'")or die(mysqli_error());



 if($arra = mysqli_fetch_array($buscar_itens)){


 	echo $arra['valor'];
 }


 ?>