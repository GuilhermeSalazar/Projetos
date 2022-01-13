<?php 

require 'db.php';
session_start();

$id = $_SESSION['clienteid'];

$texto = $_POST['texto'];

if(empty($texto)){
  echo "Digite o Texto";

}else{


 mysqli_query($sql,"UPDATE cliente set obs = '$texto' where id = '$id'");

 echo $texto;


}

 ?>