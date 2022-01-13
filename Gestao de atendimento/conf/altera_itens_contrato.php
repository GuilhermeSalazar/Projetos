<?php 
 // conexão 
require 'db.php';

// variaveis 


  $id = $_POST['item'];


   $buscar =  mysqli_query($sql,"SELECT * FROM garantia_contrato where id = '$id'")or die(mysqli_error());

     if($array = mysqli_fetch_array($buscar)){



     echo "

             <div id='editar-itens' class='modal fade show' style='display:block'>
            <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
              <div class='modal-content tx-size-sm'>
                <div class='modal-header pd-x-20'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold'>Alterar <span>".$array['Equipamento']."</span> </h6>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body pd-20'>
          <div class='form-layout form-layout-1'>
            <div class='row mg-b-25'>
                <div class='row mg-b-25'>
                <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'>Ação:</label>
                    <select name='acao' class='form-control' id='itens-contrats'>
                      <option value='1'>Alterar</option>
                      <option value='2'>Cancelar</option>
                      <option value='3'>Ativar</option>
                    </select>
                    <span style='display: none'>".$array['id']."</span>          
                 </div>
                </div>
                <div class='col-lg-5'>
                 <div class='form-group'>
                  <label class='form-control-label'>Contrato</label>
                 <input type='text' value='".$array['nome']."' name='item' class='form-control'>
                 </div>
                </div>
                <div class='col-lg-3'>
                 <div class='form-group'>
                  <label class='form-control-label'>Valor </label>
                     <input name='valor' value='".$array['valor']."' class='form-control' type='text'>
                </div>
              </div>
              <span>Validade</span>
               <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'></label>
                     <input name='de' class='form-control' value='".$array['data_inicial']."' type='date'>   
                </div>
              </div>
              <span>ate</span>
              <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'></label>
                     <input name='ate' class='form-control' value='".$array['data_final']."' type='date'>   
                </div>
              </div>

            </div>
            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class='modal-footer'>
                  <button data-toggle ='modal' data-target='#modaldemo4' type='button' class='border-0 br-menu-link active'>Editar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
     ";





     }


 ?>