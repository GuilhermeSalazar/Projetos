<?php


   require '../conf/pdo.php';

  
   $status = $pdo->query("SELECT * from usuario where estatus like '1'");


     $cont = $status->rowCount();


     if($cont == 1){



     }else{


  echo " <span class='  square-8 bg-success pos-absolute t-10 r--5 rounded-circle'></span>";

     	
     }











 ?>