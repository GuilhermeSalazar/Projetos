<?php 
require 'pdo.php';
   session_start();

  $fk_de = $_POST['de'];
  $fk_para = $_POST['para'];
  $acao = $_POST['acao'];
  $mensager =@$_POST['msg'];
  $hora =@$_POST['hora'];
    $id = $_SESSION['id'];
     
  switch($acao){
   case 'montar':
       //________________monta o chat para visualização_______________________//  
        $usuario = $pdo->query("SELECT * FROM usuario where id = '$fk_para'");
 
         if($user = $usuario->fetch()){
             

              $userid = $user['id'];

              $pdo->query("INSERT INTO msg_grav values(default, '$id','$userid')");



          echo json_encode(array(
               'fkid'=>$fk_de,
               'id'=>$user['id'],
               'usuario'=>$user['usuario'],
               'status'=>$user['estatus']

          ));

         }

     //___________________Fim__________________________________________________//
   break;

   //___________________________fechar chat  e limpar os dados da tabela gravada ___________//


     case 'close':
                 
        $pdo->query("DELETE FROM msg_grav where fk_user like '$fk_de' && fk_conver like '$fk_para'");

   break;

    case 'processador':

        //_________________________Enviada _____________________________________________//       
      $msg = $pdo->query("

  SELECT * FROM msg where de like '$fk_de' && para like '$fk_para' OR de like '$fk_para' && para like '$fk_de'
          
        ");
      
       while($att = $msg->fetch()){
             
                  
            


              $de = $att['de'];
              $para = $att['para'];

              if($de == $fk_de and $para == $fk_para){
              $src = $pdo->query("SELECT * FROM usuario where id= '$fk_de'");
              $alt = $src->fetch();
              $img = $alt['perfil'];

                  $type = "enviada";

              }
              else{
              $src = $pdo->query("SELECT * FROM usuario where id= '$fk_para'");
              $alt = $src->fetch();
              $img = $alt['perfil'];

                  $type = "recebida";

              }

               $anexado = $att['anexo'];

               $anexo_tipo = strchr($anexado, '.');


               if($anexo_tipo == ".png" or $anexo_tipo == ".jpg" or $anexo_tipo == ".gif"){


                   $arquivo_ch = "<a href='#' data-toggle='modal' data-target='#img_chat'><img style='float:right'  class='wd-100' src='anexos/".$anexado."' alt='".$anexado."'></a>";

               }else{


                  $arquivo_ch = "<a href='anexos/".$anexado."'>".$anexado."</a>";

               }



           echo "
           <div class='".$type." card card-body'>
         
          <p class='card-text'>".$att['mensagem'].$arquivo_ch."</p>
          <span class='tx-10' style='color:#363636'>".$att['hora']."</span>
       </div>";



       }
       //_________________________________________________recebida_______________________//

    break;

    case 'mensager':

      $gravat =   $pdo->query("SELECT * FROM msg_grav where fk_user like '$fk_para' && fk_conver like '$fk_de'");
         $cont = $gravat->rowCount();

        
          if($cont > 0){
              
          $data =  date("Y-m-d");
          $pdo->query("INSERT INTO msg values(default, '$fk_de', '$fk_para', '1', '$data', '$hora', '$mensager','')");      
           }


             
           if($cont == 0){


                        $data =  date("Y-m-d");
          $pdo->query("INSERT INTO msg values(default, '$fk_de', '$fk_para', '0', '$data', '$hora', '$mensager','')");      

           }    
          
    break;
    //_________________________-- ALTERAR MENSAGEM DO CHAT  --________________________________//

    case 'alt':
     
      $mensagens = $pdo->query("SELECT * FROM msg where de like '$fk_para' && para like '$fk_de' && status like 0");
          
       $array = $mensagens->fetch();

       $row_id = $array['id'];


         $pdo->query("UPDATE msg set status = '1' where id like '$row_id'");


    break;


  }





 ?>