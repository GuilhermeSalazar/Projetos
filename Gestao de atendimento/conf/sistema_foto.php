<?php 

require 'db.php';

if($_FILES):


 $arquivo = $_FILES['perfil'];
 


  $url = "/xampp/htdocs/acesso 2/img/sistema/";
 
  if(move_uploaded_file($arquivo['tmp_name'],$url.$arquivo['name'])){

      
     


     
      echo "<img class='wd-150 rounded-circle' src='img/sistema/".$arquivo['name']."' alt=''>";


  }


endif;	

 ?>