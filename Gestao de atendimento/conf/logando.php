<?php 
 
   try {
        $pdo = new PDO('mysql:host=localhost;dbname=mldisplay', 'root', '');
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
         }

 

  // variaveis 


     $login = $_POST['login'];
     $senha = $_POST['senha'];


   $busca  = $pdo->query("SELECT * FROM usuario where usuario like '$login' && senha like '$senha'");
       $cont = $busca->rowCount();

        if($cont == 0){
         
         echo "false";

        	
        }
        if($cont == 1){

           
           if($array = $busca->fetch()){

            
            session_start();
     $_SESSION['nome'] = $array['usuario'];
     $_SESSION['id'] = $array['id'];
     $_SESSION['senha'] = $array['senha'];
     $_SESSION['perfil'] = $array['perfil'];
     $_SESSION['cargo'] = $array['cargo'];
     $_SESSION['email'] = $array['email'];
     $_SESSION['estatus'] = $array['estatus'];
     $id = $_SESSION['id']; 
       $pdo->query("UPDATE usuario set estatus = '1' where id = '$id'");
         
       // CONFIGURAÇÃO DO ACESSO REMOTO  REFERENTE AO CLIENTE //

        $acesso = $pdo->query("SELECT * FROM hepdesk where conta_fk like '$id'");


        $array = $acesso->fetch();


          switch($array['status']){

          
           case '0':

              $pdo->query("UPDATE hepdesk set status = 1 where conta_fk like '$id'");
           break;
          }
          


      



           echo "true";


           } 


        }


 ?>