<?php 
  
 //conxão pdo _______________________________________________________________
 

 try{
 	$pdo = new PDO('mysql:host=localhost;dbname=mldisplay','root','');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $i){
 	echo "error". $i->getMessage();
 } 
//__________________________________________________________________________

//___________________Declarando variaveis no sistema ________________________



 $comando = $_POST['comando'];

 session_start();
 $id = $_SESSION['id'];

   


//____________________________________________________________________________

   switch($comando){

    case 'sair':
       // funcion de saida 
       
      $acesso = $pdo->query("SELECT * FROM hepdesk where conta_fk like '$id'");

     if($acesso->rowCount() == 0){
        
       
          $pdo->query("UPDATE usuario SET estatus = 0 where id = '$id'");

        session_destroy();

       

        echo "S01";

      }
      if($acesso->rowCount() == 1){

         $array = $acesso->fetch();


         if($array['status'] <= 1){


         	 $pdo->query("UPDATE usuario SET estatus = 0 where id = '$id'");
         	 $pdo->query("UPDATE hepdesk SET status = 0 where conta_fk = '$id'");

                session_destroy();


            echo "S02";

         }
         if($array['status'] > 1){

         echo "B";	
         }




      }








    
    break;


   }
   




 ?>