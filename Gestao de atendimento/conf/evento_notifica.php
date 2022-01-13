 <?php 
         $sql = mysqli_conect('localhost','root','','mldisplay');         
         $consulta_aviso = mysqli_query($sql,"SELECT * FROM notifica");

             while($aviso = mysqli_fetch_array($consulta_aviso)){
                  
                  $datar = date('d/m/Y ', strtotime($aviso['dia']));
                   

                  $time = date('Y-m-d');

                  $verifica = $aviso['dia'];

                  if($time == $verifica){

              echo"
                     <div class='br-mailbox-list-item active'>
          <div class='d-flex justify-content-between mg-b-5'>
            <div>
             <i class='icon ion-ios-star tx-warning'></i>
            </div>
           <span class='tx-22 ' >".$datar.", ".$aviso['responsavel']." 
                <a href='".$aviso['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a>
                <a href='".$aviso['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></span>
          </div><!-- d-flex -->
          <h6 class='tx-30 mg-b-10 tx-white'>".$aviso['titulo']."</h6>
          <p class='tx-22 tx-gray-600 mg-b-5'>".$aviso['texto']."</p>
        </div>
                  ";
                  } 

                   if($time != $verifica){

              echo"
                     <div class='br-mailbox-list-item unread'>
          <div class='d-flex justify-content-between mg-b-5'>
            <div>
              <i class='icon ion-ios-star'></i>
            </div>
           <span class='tx-22'>".$datar.", ".$aviso['responsavel']." 
                <a href='".$aviso['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a>
                <a href='".$aviso['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></span>
          </div><!-- d-flex -->
          <h6 class='tx-30 mg-b-10 tx-white'>".$aviso['titulo']."</h6>
          <p class='tx-22 tx-gray-600 mg-b-5'>".$aviso['texto']."</p>
        </div>
                  ";
                  } 


                
                  

             }
           
         ?>
