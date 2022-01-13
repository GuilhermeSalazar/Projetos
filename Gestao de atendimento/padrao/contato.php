<?php 
//            CONEXÃO COM BANCO DE DADOS DA EMPRESA        //
  try{
  	$pdo = new PDO('mysql:host=localhost;dbname=mldisplay', 'root', '');
  	$pdo->setAttribute(	PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch( PDOException $i){ echo "error".$i->getMessage();}
    session_start();
   $id = $_SESSION['id'];
  //-------------------------------------------------------------------------------------------------------------//
     $user_get = $pdo->query("select * from usuario where id != '$id' && estatus like '1'");
                $cont_get = $user_get->rowCount();
                if($cont_get > 0){
                echo "<span class='  square-8 bg-success pos-absolute t-10 r--5 rounded-circle'></span>";
                 }
                 else
                 {
                  echo "";
                 }
  //-------------------------------------------------------------------------------------------------------------//               
 ?>