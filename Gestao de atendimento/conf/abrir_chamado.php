<?php 
 
 require 'pdo.php';

$contato = @$_POST['contato'];
 $cliente =@$_POST['cliente'];
 $fones =@$_POST['fones'];
 $email =@$_POST['email'];
 $endereco =@$_POST['endereco'];
 $para =@$_POST['para'];
 $tecnico =@$_POST['tecnico'];
 $ocorrencia =@$_POST['ocorrencia'];
 $hora =@$_POST['hora'];
 $aberto =@$_POST['aberto'];
 $data =@date("d/m/Y");
 $ativar =@$_POST['ativar'];
 $nivel=@$_POST['nivel'];
 $atender =@$_POST['catar'];
 $texto =@$_POST['btntext'];

 session_start();

 $id = $_SESSION['id'];

   if($para == '1'){
        
        $buscar_help = $pdo->query("SELECT * FROM hepdesk where conta_fk like '%$tecnico%'");

           

          $acessos  = $pdo->query("SELECT * FROM acesso where fk_tecnico like '$tecnico' && nivel like 1");

          $cont_acessos = $acessos->rowCount();

           // LIMITAR PARA 4 ACESSO POR TÉCNICO.

            if($cont_acessos >= 4){

               echo "

                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='fa fa-exclamation-triangle tx-100 text-danger lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-danger tx-semibold mg-b-20'>Limite Máximo Atingido!</h4>

               ";

            }
            else{

              

              // LOGICA DE TRANSFERENCIA PARA O TECNICO DIRETO 



            $suporte = $pdo->query("SELECT * from hepdesk where conta_fk like '$tecnico'");


            $suporte_fech = $suporte->fetch();

             $status_suporte = $suporte_fech['status'];

     //______________________________________________________________________________________     PERMITIDO O ENVIO DO CHAMDO PARA TÉCNICO   _________________________________  
               if($status_suporte == '1' //LIVRE
                 or $status_suporte == '2' // MÉDIO
                 or  $status_suporte == '5'){ // FACIL
                        
                        //BUSCANDO ULTIMO ACESSO  ID 

                     $final_b = $pdo->query("SELECT * FROM acesso_id where id = '1'");
                     $final_r = $final_b->fetch();

                     $ultimo_id = $final_r['fk_final'];
                     $_1 = '1';

                     $soma =  $ultimo_id + $_1;
                     $protocolo = date("dmY").$soma;

                     // atualizando ultima id  

                      $pdo->query("UPDATE acesso_id set fk_final = '$soma' where id = '1'");


                       $pdo->query("INSERT INTO acesso  values(default,'$protocolo','$cliente','$contato','$fones','$email','$endereco','$tecnico','$ocorrencia','$data','$hora','','$aberto','1')");


                         echo " <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-success tx-semibold mg-b-20'>Numero do atendimento <br>".$protocolo."</h4>";
                         
                 
                    }
//-----------------------------------------------------------------------------------------------          LOGICA BLOQUEA O ATENDIMENTO ----------------------                    
          


                  switch($status_suporte){
                    
                 case '3': //NIVEL CRITICO

                   echo"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='fa fa-user tx-100 text-danger lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-danger tx-semibold mg-b-20'>Em Atendimento Critíco!</h4>
                   ";

                 break;
                   

                 case '4': // ALMOÇO
                     
                   echo"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='fa fa-user tx-100 text-danger lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-danger tx-semibold mg-b-20'>Em Horário de Almoço!</h4>
                   ";  


                 break;


                 case '6': // AUSENTE 

                  echo"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='fa fa-user tx-100 text-danger lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-danger tx-semibold mg-b-20'>Ténico Ausente</h4>
                   ";  

                 break;

                 case '0': // OFFLINE 

                echo"<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='fa fa-user tx-100 text-danger lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-danger tx-semibold mg-b-20'>Offline!</h4>
                   ";  
                 break;

                  }













                 

              $help_num = $buscar_help->rowCount();

       

      }
       
   }
   if($para == '2'){

     // lançando na fila 


    


    //                    $pdo->query("INSERT INTO acesso  values(default,'$codgo','$cliente','$contato','$fones','$email','$endereco','$tecnico','$ocorrencia','$data','$hora','','$aberto','0')");


    


    $final_num = $pdo->query("SELECT * FROM acesso_id where id = '1'");
                     $final_fila = $final_num->fetch();

                     $ultimo_id_fila = $final_fila['fk_final'];
                     $_2 = '1';

                     $calcular =  $ultimo_id_fila + $_2;
                     $codgo = date("dmY").$calcular;

                     // atualizando ultima id  

                      $pdo->query("UPDATE acesso_id set fk_final = '$calcular' where id = '1'");

     $pdo->query("INSERT INTO acesso  values(default,'$codgo','$cliente','$contato','$fones','$email','$endereco','0','$ocorrencia','$data','$hora','','$aberto','0')");

          $buscar = $pdo->query("SELECT * FROM acesso where  data like '$data' && hora_inicial like '$hora' && razao like '$cliente' && nome_contato like '$contato' ");

                              echo " <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                  <i class='icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block'></i>
                  <h4 class='tx-success tx-semibold mg-b-20'>Numero do atendimento <br>".$codgo."</h4>";



   }
   if(! empty($ativar)){

    
     $pdo->query("UPDATE hepdesk set status = '1' where conta_fk = '$ativar'");

    echo "Acesso abilitado!";



   }
   if(! empty($nivel)){


       if($nivel < 10){


          
       $pdo->query("UPDATE hepdesk set status = '$nivel' where conta_fk = '$id' ");


       }
       if($nivel == 10){


         
       $pdo->query("UPDATE hepdesk set status = '0' where conta_fk = '$id' ");
       



       }

   }
// atender na fila de espera 

if (! empty($atender)) {

  if($texto == 'Atender'){

$acesso_star = $pdo->query("SELECT * FROM acesso where fk_tecnico = '$id' && nivel = '0'");
 
 $acesso_num = $acesso_star->rowCount();
  if($acesso_num == 0){

     $pdo->query("UPDATE hepdesk set status = '2' where conta_fk = '$id' ");
    

  }
  if($acesso_num > 2){

     $pdo->query("UPDATE hepdesk set status = '3' where conta_fk = '$id'  ");
    

  }

$pdo->query("UPDATE acesso set fk_tecnico = '$id', nivel = '1' where id = '$atender'");
 
 echo "01";
 
}

if($texto == "Editar"){
    
   
  $alterdate = $pdo->query("SELECT * FROM acesso where id = '$atender'");
  

  if($arraygg = $alterdate->fetch()){


    echo  json_encode(
      array(
      'id'=>$arraygg['id'],
      'numero'=>$arraygg['n_chamado'],
      'nome'=>$arraygg['nome_contato'],
      'fone'=>$arraygg['fone'],
      'email'=>$arraygg['mail'],
      'endereco'=>$arraygg['endereco'],
      'ocorrencia'=>$arraygg['ocorrencia'],
      'data'=>$arraygg['data'],
      'hora'=>$arraygg['hora_inicial'],
      'passado'=>$arraygg['passado']
        
    ));



  }  

}

}


?>