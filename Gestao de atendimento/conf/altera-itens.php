<?php 

require 'db.php';


$id = $_POST['objeto'];


$consulta = mysqli_query($sql,"SELECT * FROM itens_contrato where id = '$id'");


    $array_b = mysqli_fetch_array($consulta);


    echo "

           <div id='editar-itens' class='modal ' style='display: block;'>
            <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
              <div class='modal-content tx-size-sm'>
                <div class='modal-header pd-x-20'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold'>Alterar</h6>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body pd-20'>
          <div class='form-layout form-layout-1 '>
            <div class='row mg-b-25'>
                <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'>Nome:</label>
                    <input type='text' value='".$array_b['nome']."' class='form-control' name='nome'>
                 </div>
                </div>
                <div class='col-lg-5'>
                 <div class='form-group'>
                  <label class='form-control-label'>Descrição:</label>
                    <input type='text' value='".$array_b['obs']."'  class='form-control' name='descri'>
                 </div>
                </div>
                
                <div class='col-lg-3'>
                 <div class='form-group'>
                  <label class='form-control-label'>Valor:</label>
                    <input type='text' value='".$array_b['valor']."'  class='form-control' name='valor'>
                 </div>
                </div>
                
            </div><!-- row  -->

          </div>
                </div><!-- modal-body -->
                <div class='modal-footer'>
                  <button data-toggle ='modal' data-target='#modaldemo4' type='button' class='border-0 br-menu-link active'>Cadastrar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->



    ";

 ?>