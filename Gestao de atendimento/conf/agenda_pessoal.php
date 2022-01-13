<?php 

  // conexao 
  $sql = mysqli_connect('localhost', 'root','','mldisplay');

  $quem = $_POST['id'];

  
    if(empty($quem)){

      echo " ";


    }
    else{

       
         $buscar = mysqli_query($sql, "SELECT * FROM  agenda where id = '$quem'");


           if($tr =  mysqli_fetch_array($buscar)){


               echo "  <div id='agenda_edit' class='modal '   style='padding-right: 17px; display: block;'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content bd-0 tx-14'>
                <div class='modal-header pd-y-20 pd-x-25'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold'>Editar</h6>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body pd-25 notificacao_form'>
                 <div class='form-group '>
                           <input type='hidden' value='".$tr['id']."' name='editar'>
                        </div>
                        <div class='form-group mg-b-20'>
                          <textarea  class='form-control pd-y-12' placeholder='' name='descricao' id='' cols='30' rows='10'>".$tr['descricao']."</textarea> 
                          <input style='width: 170px' value='".$tr['dia']."' type='date' name='data' class='form-control pd-y-5 t-10' placeholder='data'>
                          
                        </div><!-- form-group -->
                          <div class='form-group'>
                          <input value='".$tr['hora']."' style='max-width: 170px' type='text' name='responsavel' class='form-control pd-y-5' placeholder='Horario ?'>
                        </div>
                </div>
                <div class='modal-footer '>
                  <button  type='button' class='agenda_editada btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold'>Editar</button>
                </div>
              </div>
            </div>
          </div>";

           }


    }




 ?>