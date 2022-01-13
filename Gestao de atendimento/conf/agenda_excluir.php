<?php 
$sql = mysqli_connect('localhost','root','','mldisplay');

$id = $_POST['quem'];

  
     mysqli_query($sql,"DELETE FROM agenda Where id = '$id'");


     echo "Excluido com sucesso!";


 ?>