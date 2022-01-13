<?php 
 //teclarando variaveis 
 $sql = mysqli_connect('localhost','root','','mldisplay')or die("não foi");

 $d_quem = $_POST['quem']; 

 session_start();

 $logado = $_SESSION['nome'];

  // logica 
    $busca = mysqli_query($sql,"SELECT * FROM mensagens")or die("deu ruim");

    while($array = mysqli_fetch_array($busca)){

       $c_dquem = $array['d_quem'];

       $c_pquem = $array['p_quem'];

       $anexo = $array['anexo'];

        if(empty($anexo)){
         $anexo = ""; 
        }else{

         //$anexo = "<button data-toggle='modal'  class='btn btn-primary //anexado '> ".$array['anexo']."</button>";

          if( strstr($anexo, ".png") || strstr($anexo, ".jpg")){

             
             $anexo ="<img id='bodyimg' style='width:120px; border-radius:10px;'  src='anexos/".$anexo."' alt=''>";

          }else{

             
              $anexo ="<a style='color:#fefefe; '  class='chat' href='anexos/".$anexo."'> <i class='icon ion-paperclip tx-20'> </i>".$anexo."</a>";


          }


        }


       if($c_pquem === $logado && $c_dquem === $d_quem && $c_pquem != "POST GERAL"){
       	   
        echo "
       <div class='media '> 
       
          <div class='media-body tx-20'>
                <div><span>".$array['d_quem']."</span></div>
               <span  style='font-size:12px'>".$array['hora']."</span>
                <div class='msg-wrapper 'style='background:#26354a; color:#888; border-radius:10px; '>
                  <span class='enviarda'>".$array['mensagem']."  ".$anexo."</span>
                </div><!-- msg-wrapper -->
          </div>
        </div>
              ";

       }

       if($c_dquem === $logado && $c_pquem === $d_quem && $c_pquem != "POST GERAL"){
            
              echo "
            <div class='media flex-row-reverse' >
             
        
                      <div class='media-body tx-20'>
                <div><span>".$array['d_quem']."</span> <a href=''></a></div>
                <span  style='font-size:12px'>".$array['hora']."</span>
                <div class='msg-wrapper' style='background:#202e40; border-radius:10px;'>
                  <span class='enviarda' style='color:#999'>".$array['mensagem']."  ".$anexo."</span>
                </div><!-- msg-wrapper -->
              </div><!-- media-body -->
            </div>               
            ";



       }
       if($c_dquem === $logado && $c_pquem === $d_quem && $c_pquem == "POST GERAL"){
            
              echo "
                       
            <div class='media flex-row-reverse' >
                      <div class='media-body tx-20'>
                <div><span>".$array['d_quem']."</span> <a href=''></a></div>
                <span  style='font-size:12px'>".$array['hora']." </span>
                <div class='msg-wrapper'style='background:#26354a; color:#888; border-radius:10px; '>
                  <span class='enviarda'>".$array['mensagem']." ".$anexo." </span>
                </div><!-- msg-wrapper -->
              </div><!-- media-body -->
                        
            </div>
            ";
       }
        if($c_dquem != $logado && $c_pquem === $d_quem && $c_pquem == "POST GERAL"){
            
              echo "
              
            <div class='media'> 
          <div class='media-body tx-20'>
                <div><span>".$array['d_quem']."</span></div>
                <span  style='font-size:12px'>".$array['hora']."</span>
                <div class='msg-wrapper' style='background:#202e40; border-radius:10px; '>
                 <span class='enviarda'>".$array['mensagem']." ".$anexo." </span>
                </div><!-- msg-wrapper -->
          </div>
        </div>       
            ";
       }
       


        }


 ?>