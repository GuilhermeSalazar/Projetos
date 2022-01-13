<?php 
require '../conf/db.php';

session_start();

$id = $_SESSION['clienteid'];


$buscar = mysqli_query($sql,"SELECT * FROM cliente where id = '$id'");


$array = mysqli_fetch_array($buscar);


$obs = $array['obs'];


 ?>

<h2>Equipamentos</h2>
   <?php 

           $tem = "";

            $buscando_cont = mysqli_query($sql,"SELECT * FROM equipamento where cliente = '$id'")or die(mysqli_error());

            $cont_contra = mysqli_num_rows($buscando_cont);

            if ($cont_contra == 0) {
                
                $tem = "style = 'display:none'";
                echo "Cliente não possui equipamentos <a href='equipamento.php'>Cadastrar</a>";
            }


            ?>
  <div <?php echo $tem; ?> class="table-responsive mg-t-40">
              <table class="table">
                <thead>
                  <tr>
                    <th class="wd-20p">Nome</th>
                    <th class="wd-40p">Descrição</th>
                    <th class="tx-center">Garantia </th>
                    <th class="tx-right">Data de Compra</th>
                    <th class="tx-right">Valor</th>
                  </tr>
                </thead>
                <tbody>
                   <?php 
          
                  //buscando equipamento

                  $consulta_equipamento = mysqli_query($sql,"SELECT * FROM equipamento where cliente = '$id'");
                        
                    $result = mysqli_query($sql,"SELECT SUM(valor) AS soma FROM equipamento where cliente = '$id'  "); 
                     $row = mysqli_fetch_assoc($result); 
                          $sum = $row['soma'];


                          $total = $sum;

                    while($array_equi = mysqli_fetch_array($consulta_equipamento)){
                         $datacompra = date('d/m/Y ', strtotime($array_equi['data_compra']));

                         $valounit = 'R$ '. number_format($array_equi['valor'], 2, ',','.');
                       echo "

                  <tr>
                    <td>".$array_equi['equipamento']."</td>
                    <td class='tx-18'>".$array_equi['marca']." ".$array_equi['modelo']." NS/ ".$array_equi['n_serie']."</td>
                    <td class='tx-center'>".$array_equi['garantia_contrato']."</td>
                    <td class='tx-right'>".$datacompra."</td>
                    <td class='tx-right'>".$valounit."</td>
                  </tr>

                       ";



                    }

                   ?>
                  
                  
                  <tr>
                    <td colspan="2" rowspan="4" class="valign-middle">
                      <div class="mg-r-20">
                        <label class="tx-uppercase tx-13 tx-bold mg-b-10">OBSERVAÇÕES</label>
                        <p class="tx-13"><?php echo $obs; ?></p>
                      </div>
                    </td>
                    <td class="tx-right">Sub-Total</td>
                    <td colspan="2" class="tx-right"><?php echo   'R$ ' . number_format($sum, 2, ',', '.'); ?></td>
                  </tr>
                  <tr>
                    <td class="tx-right tx-uppercase tx-medium tx-white">Total</td>
                    <td colspan="2" class="tx-right"><h4 class="tx-primary tx-bold tx-lato"><?php 

                      echo "R$ " . number_format($total, 2,',','.');
                     ?></h4></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->