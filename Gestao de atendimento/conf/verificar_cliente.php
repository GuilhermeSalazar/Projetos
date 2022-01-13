<?php 
 require 'pdo.php';
  // comando 
$razao = $_POST['razao'];
$nome = $_POST['nome'];
$id = $_POST['id'];


  // consulta contrato 


  $contrato = $pdo->query("SELECT
    contrato.id as idcontrato,
    contrato.fk_cliente as concliente
     FROM contrato where fk_cliente like '$id'");
   
      



       	echo "<span>CONTRATO</span><br>
                  <br> <a href='' data-toggle='modal' data-target='#contrato_soff' class='br-menu-link'><i class='fa fa-search'></i>Visualizar</a>";


                  echo "    <div id='contrato_soff' class='modal fade ' >
            <div class='modal-dialog modal-lg modal-dialog-centered' role='document' >
              <div class='modal-content tx-size-sm' style='background: #1a2445;'>
                <div class='modal-header pd-x-20'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-white tx-bold'>CONTRATO E SOFTWARE </h6>
               
                 
                  </button>
                </div>
                <div class='modal-body pd-20'>
              <div class='form-layout form-layout-1 '>
                <div class='row mg-b-25'>
                 
                
               <div class='col-lg-4'>
                 <div class='form-group'>
                   <h4 class='tx-white'>CONTRATOS</h4>
                    <ul>
                    ";

                      $fetchall = $contrato->fetch();
                      $con_id = $fetchall['idcontrato'];
                      $cont_cli = $fetchall['concliente'];

                         $itens_select = $pdo->query("SELECT * FROM garantia_contrato where n_contrato like '$con_id'");


                         while($itens_contrato = $itens_select->fetch()){


                              echo "<li>".$itens_contrato['nome']."</li>";



                         }
                    echo"</ul>
                  </div>
               </div>
               <div class='col-lg-8'>
                 <div class='form-group'>
                   <h4 class='tx-white'>SOFTWARE 

                      ";

                      //Tipo de software do cliente //


                        $sys_b = $pdo->query("SELECT * FROM cliente_sys where fk_cliente like '$cont_cli'");


                          $qual_s = $sys_b->fetch();

                          $tipo = $qual_s['fk_sistema'];
                          $id_sys = $qual_s['id'];
                            
                            $select_tipo = $pdo->query("SELECT * FROM sistema where id like '$tipo'");

                             $array_t = $select_tipo->fetch();

                             echo $array_t['nome'];


                      echo "

                   </h4>
                     <ul>


                        ";
                             
                             $b_modulo = $pdo->query("SELECT * FROM modulo where fk_sys like '$id_sys'");

                             while($modulo = $b_modulo->fetch()){


                                echo "<li>".$modulo['nome']."</li>";
                             }


                        //  $b_modulo = $pdo->query("SELECT * FROM modulo where fk_sys like '$id_sys' && status = '0'");

                        //      $con_modulo = $b_modulo->rowCount();

                        //      if($con_modulo == 0){

                        //        echo "";

                        //      }else{


                        //   while($modulo = $b_modulo->fetch()){


                        //       echo "
                        // <li>".$modulo['nome']." ".$modulo['descricao']."</li>";

                        //   }	
                        //      }
                       // <a style='margin-top: -10px' class='mg-l-50 br-menu-link wd-160 float-right' href=''>Acessar Cadastro</a>              

                       echo  "
                      </ul> 
                 </div>
               </div>
               </div>
              
            </div><!-- row -->
          </div>
                
          </div><!-- modal-body -->
          <div class='modal-footer'>
          </div>
         </div>
       </div>";
       


 

 ?>