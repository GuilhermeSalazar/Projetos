<?php 
 
 require 'db.php';

 // variaveis 


 $tipo = $_POST['tipo'];
 $id = $_POST['quem'];
 $texto = $_POST['texto'];

   if(empty($texto)){


   	echo  "Digite o motivo da mudança.";
   }else{

      $buscar = mysqli_query($sql,"SELECT * FROM cliente where id = '$id'");

       $array = mysqli_fetch_array($buscar);


        $texto_cliente = $array['obs'];
         $data_notifica = date("d/m/Y");

         $textarea = $texto_cliente.' '.$data_notifica.', '.$texto;

         // update no banco 


         mysqli_query($sql,"UPDATE cliente set status = '$tipo', obs = '$textarea' where id = '$id'")or die(mysqli_error());

         echo "Alteração realizada com sucesso!";

   }

 ?>