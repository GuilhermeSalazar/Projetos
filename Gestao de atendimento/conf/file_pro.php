<?php 
  require 'db.php';
   session_start();

   $id = $_SESSION['idpro'];

   if($_FILES):


 $arquivo = $_FILES['perfil'];
 


  $url = "/xampp/htdocs/acesso 2/img/produto/";
 
  if(move_uploaded_file($arquivo['tmp_name'],$url.$arquivo['name'])){

      
     


     
      $img =  $arquivo['name'];

       mysqli_query($sql,"UPDATE produto set img = '$img' where id = '$id'")or die(mysqli_error());

       echo "Foto Carregada";


  }


endif;	


 ?>