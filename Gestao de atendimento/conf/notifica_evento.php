<?php 
    $sql = mysqli_connect('localhost','root','','mldisplay');
  $id =@$_POST['id'];
  $excluir =@$_POST['excluir'];
  $id_editar =@$_POST['id_editar'];
  $titulo =@$_POST['titulo'];
  $descricao =@$_POST['descricao'];
  $datax =@$_POST['data'];
  $hora =@$_POST['hora'];



   if( ! empty($id) && empty($id_editar) ){
            

       $consulta = mysqli_query($sql,"SELECT * FROM notifica where id  like '$id'");

         if($exibe = mysqli_fetch_array($consulta)){
                $datar = date('d/m/Y ', strtotime($exibe['dia']));
             echo  "
             <div id='modal_edit' class='modal '   style='padding-right: 17px; display: block;'>
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
                           <input type='hidden' value='".$id."' name='editar'>
                          <input name='titulo' type='email' value='".$exibe['titulo']."' class='form-control pd-y-5' placeholder='titulo'>
                        </div>
                        <div class='form-group mg-b-20'>
                          <textarea  class='form-control pd-y-12' placeholder='Descrição ' name='descricao' id='' cols='30' rows='10'>".$exibe['texto']."</textarea> 
                          <input style='width: 170px' value='".$exibe['dia']."' type='date' name='data' class='form-control pd-y-5 t-10' placeholder='data'>
                          
                        </div><!-- form-group -->
                          <div class='form-group'>
                          <input value='".$exibe['responsavel']."' style='max-width: 170px' type='text' name='responsavel' class='form-control pd-y-5' placeholder='Horario ?'>
                        </div>
                </div>
                <div class='modal-footer '>
                  <button  type='button' class='adicionar_edita btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold'>Editar</button>
                </div>
              </div>
            </div>
          </div>

  ";


         }

   }

   if(!empty($id_editar)){
    
      mysqli_query($sql,"UPDATE notifica set titulo = '$titulo', texto = '$descricao' , dia = '$datax' , responsavel = '$hora'  where id = '$id_editar'");


      echo "Cadastro alterado com Sucesso!";
     
   }
   if($excluir == ""){
    

    echo "";

   }else{

    mysqli_query($sql,"DELETE  FROM notifica where id = '$excluir' ")or die(mysqli_error());

    echo "Evento excluido com sucesso";

   }   

  
 ?>