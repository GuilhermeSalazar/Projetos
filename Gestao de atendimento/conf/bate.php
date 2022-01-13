<?php 
    
  //DECLARANDO VARIAVEIS 
    $sql = mysqli_connect('localhost','root','','mldisplay');
    $mensagens =@$_POST['mensagens'];
    $para =@$_POST['para'];
    $img =@$_POST['img'];
    $prive =@$_POST['priver'];
    session_start();
    $nome = $_SESSION['nome'];
    $foto = $_SESSION['perfil'];    
    $mensager = mysqli_query($sql,"SELECT * FROM mensagens ");

 //----------------------------------------------------------------

  // FUNÇÕES //
     

    if(empty($para)){    
  

     while($consult =  mysqli_fetch_array($mensager)){
        
           $quem = $consult['d_quem'];


             if($quem == $nome){
                 echo "
            <div class='media flex-row-reverse' >
          
              <div class='media-body'>
                <div><span>".$consult['d_quem']."</span> <a href=''></a></div>
                <div class='msg-wrapper'>
                  ".$consult['mensagem']."
                </div><!-- msg-wrapper -->
              </div><!-- media-body -->
            </div>            
            ";
             }else{

              echo "
       <div class='media '> 
          <div class='media-body'>
                <div><span>".$consult['d_quem']."</span></div>
                <div class='msg-wrapper'>
                  ".$consult['mensagem']."
                </div><!-- msg-wrapper -->
          </div>
        </div>
              ";
             }
     }
   }


  

 ?>