<?php 

require 'db.php';
$id = $_POST['id'];
$buscar = mysqli_query($sql,"SELECT * FROM modulo where id = '$id'");

$array = mysqli_fetch_array($buscar);


echo "<div id='altera-modulo' class='modal fade show' style='display:block'>
            <div class='modal-dialog modal-lg modal-dialog-centered' role='document'>
              <div class='modal-content tx-size-sm'>
                <div class='modal-header pd-x-20'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold'>Alterar ".$array['nome']."</h6>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body pd-20'>
          <div class='form-layout form-layout-1'>
            <div class='row mg-b-25'>
                <div class='col-lg-3'>
                 <div class='form-group'>
                  <label class='form-control-label'>Ação:</label>
                   <select class='form-control' name='acao' id=''>
                   <option value='2'>Alterar</option>
                   <option value='3'>Renovar</option>
                   <option value='1'>Cancelar</option>
                   <option value='4'>Ativar</option>
                 </select>        
                 </div>
                </div>
                <div class='col-lg-5'>
                 <div class='form-group'>
                 <span style='display:none'>".$id."</span>
                  <label class='form-control-label'>descrição:</label>
                    <input type='text' value='".$array['descricao']."' class='form-control' name='descri'>          
                 </div>
                </div>
                <div class='col-lg-3'>
                  <div class='form-group'>
                    <label for=''>valor</label>
                    <input class='form-control' value='".$array['valor']."' type='text' name='valor'>
                  </div>
                </div>
                <div class='col-lg-3'>
                  <div class='form-group'>
                    <label>Vencimento</label>
                  <input class='form-control' value='".$array['vencimento']."' type='date' name='vencimento'>
                  </div>
                </div>
            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class='modal-footer'>
                  <button data-toggle ='modal' data-target='#modaldemo4' type='button' class='border-0 br-menu-link active'>Alterar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->";


 ?>