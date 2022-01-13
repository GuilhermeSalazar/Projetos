<?php 
require 'db.php';


$modulo = $_POST['modulo'];


$consultar = mysqli_query($sql,"SELECT * FROM modelo_sis where id = '$modulo'")or die(mysqli_error());

 

 if($linha = mysqli_fetch_array($consultar)){

 echo "

                 <div class='col-lg-8'>
                 <div class='form-group'>
                  <label class='form-control-label'>Descrição:</label>
                   <input value='".$linha['descricao']."' name='descri' type='text' class='form-control'>      
                 </div>
                </div>
                <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'>Valor:</label>
                   <input name='valor' value='".$linha['valor']."' type='text' class='form-control'>      
                 </div>
                </div>
                <div class='col-lg-4'>
                 <div class='form-group'>
                  <label class='form-control-label'>Vencimento:</label>
                   <input name='data' value='' type='date' class='form-control'>      
                 </div>
                </div>




 ";



 }


 ?>