<?php 
require 'db.php';

$digitado = $_POST['teclado'];


  $busca = mysqli_query($sql,"SELECT * FROM usuario where usuario like '%$digitado%'")or die(mysqli_error());

   $cont = mysqli_num_rows($busca);

   if ($cont == 0) {
     
     echo "<p style='color: green'>Login Valido</p>";

   }
   if ($cont > 0) {
     
     echo "<p style='color: red'>Login já Cadastrado</p>";

   }

 ?>