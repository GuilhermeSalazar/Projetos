 <?php  
              require '../padrao/header.php';     

                $busca  = mysqli_query($sql,"SELECT * FROM usuario");
               

                while($chatlink = mysqli_fetch_array($busca)){
                       

                      


                        if($login == $chatlink['usuario'] ){



                         

                        }else{
                            $chatnome = $chatlink['usuario'];

                            $mensagens = mysqli_fetch_array(mysqli_query($sql,"SELECT * FROM mensagens WHERE d_quem like '$chatnome' && p_quem like '$login' && status = 0"));


                              
                                
                         
                         $texto= $mensagens['mensagem'];
                         $contador ="";
                             
                  
                            

                       if ($chatlink['estatus'] == 1){

                            
                       echo "
                   <div class='media '>
            <div class='br-img-user online'><img class='src' src='update/".$chatlink['perfil']."' alt=''></div>    
            <div class='media-body'> 
              <div class='media-contact-name'>
                <span class='.span'>".$chatlink['usuario']."</span>
                <img style='display:none' src='update/".$chatlink['perfil']."' alt=''>
                <span>".$contador."</span>
              </div>
              <p>".$texto."</p>
            </div>
          </div>
                   "; 

                       }
                       if($chatlink['estatus'] == 0){

                       echo "
                   <div class='media '>
            <div class='br-img-user offline'><img class='src' src='update/".$chatlink['perfil']."' alt=''></div>    
            <div class='media-body'> 
              <div class='media-contact-name'>
                <span class='.span'>".$chatlink['usuario']."</span>
                <span></span>
                <img style='display:none' src='update/".$chatlink['perfil']."' alt=''>
                <span>".$contador."</span>
              </div>
              <p>".$texto."</p>
            </div>
          </div>
                   "; 

                       }
                                 

                        }


             
                }

               ?>
