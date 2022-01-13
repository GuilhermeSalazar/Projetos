<?php 
  require 'db.php';

  $texto = $_POST['digitado'];





  $buscar = mysqli_query($sql,"SELECT * FROM usuario where usuario like '%$texto%' && nome like '%$texto%'")or die(mysqli_error());
   
   $num = mysqli_num_rows($buscar);

   if ($num == 0) {
   	  
   	  echo "false";
   }else{

       while($array = mysqli_fetch_array($buscar)){

          $user_id = $array['id'];
                  $user_tipo = $array['cargo'];

                  

                  $array_cargo = mysqli_fetch_array(mysqli_query($sql,"SELECT * FROM cargo where id = '$user_tipo'"));


                   $status = "";
                  if($array['estatus'] == 0){


                    $status = "<i style='color:red' class='fa fa-globe'></i>";
                  }
                  if($array['estatus'] > 0){
                    $status = "<i style='color:green' class='fa fa-globe'></i>";
                    
                  }
                    $nascimento = date('d/m/Y ', strtotime($array['data_nasc']));

                    $acao = "<form action='detalhe_funcionario.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$array['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";


              echo "
                 
                 <tr>
                <td>
                  <div class='pd-t-2'>
                     <span class=' pd-l-5'>".$array['nome']."</span>
                  </div>
                </td>
                <td>".$array['telefone']."</td>
                <td>".$nascimento."</td>
                <td>".$array_cargo['cargo']."</td>
                <td class='hidden-xs-down'>".$status."</td>
                <td class='dropdown'>
                  <a href='#' data-toggle='dropdown' class='btn pd-y-3 tx-gray-500 hover-info'><i class='icon ion-more'></i></a>
                  <div class='dropdown-menu dropdown-menu-right pd-10'>
                    <nav class='nav nav-style-1 flex-column'>
                      <a href='#' class='nav-link'>".$acao."</a>
                      <a href='' class='nav-link'>Alterar Senha </a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
         


              ";



       }


   }


 ?>