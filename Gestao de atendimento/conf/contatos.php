<?php  
      require '../padrao/header.php';

               $lista = mysqli_query($sql,"SELECT * FROM usuario");

                 while ($list = mysqli_fetch_array($lista)) {
                  
                     $estatus = $list['estatus'];
                       

                       if($estatus == 1 ){
                            
                            if($list['id'] !== $id){
                           echo "
                  <a href='chat.php' class='contact-list-link new'>
              <div class='d-flex'>
                <div class='pos-relative'>
                  <img src='update/".$list['perfil']."' alt=''  style='height: 35px'>
                  <div class='contact-status-indicator bg-success bd-white'></div>
                </div>
                <div class='contact-person'>
                  <p>".$list['usuario']."</p>
                  <span>ativo</span>
                </div>
                <span class='tx-info tx-12'>
              </div>
            </a>
                  ";
                  }       
                }   
           }

                    echo "
            </div>
          <label class='sidebar-label pd-x-25 mg-t-25'>Contatos Offline </label>
          <div class='contact-list pd-x-10'>
              ";    
                $lista1 = mysqli_query($sql,"SELECT * FROM usuario");

               while ($list1= mysqli_fetch_array($lista1)) {
                  
                     $estatus1 = $list1['estatus'];
                       

                       if($estatus1 == 0 ){

                           echo "
               <a href='chat.php' class='contact-list-link'>
              <div class='d-flex'>
                <div class='pos-relative'>
                  <img src='update/".$list1['perfil']."' alt='' style='height: 35px'>
                  <div class='contact-status-indicator bg-gray-500 bd-white'></div>
                </div>
                <div class='contact-person'>
                  <p>".$list1['usuario']."</p>
                  <span>Offline</span>
                </div>
              </div>
            </a>
                  ";       
                  }
                }

               ?>