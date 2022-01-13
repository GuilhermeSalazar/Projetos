<?php 
require 'db.php';

$id = $_POST['quemsenha'];
$senha = $_POST['senhaalterada'];

  
$buscar = mysqli_query($sql,"SELECT * FROM usuario where id like '$id'");

$cont = mysqli_num_rows($buscar);


if($cont == 1){

  
   mysqli_query($sql,"UPDATE usuario set senha = '$senha' where id = '$id'")or die(mysqli_error());

   echo "alterada";


}else{

echo "null";

}


 ?>