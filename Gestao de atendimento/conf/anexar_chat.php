<?php 
$de =@$_POST['de'];
$para =@$_POST['para'];
$hora =@$_POST['hora'];


$arquivo = $_FILES['anexar'];

 $arquivo['name'];

  $url = "/xampp/htdocs/acesso 2/anexos/"; 

  move_uploaded_file($arquivo['tmp_name'],$url.$arquivo['name']); 
  

   $tipo = strrchr($arquivo['name'],".");

     
  echo  json_encode(array(
      
      'arquivo'=>$arquivo['name'],
      'tipo'=>$tipo

  )) ;


 ?>