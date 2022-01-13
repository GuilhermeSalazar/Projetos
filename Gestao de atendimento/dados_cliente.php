<?php 

 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");

/* trabalhando variaveis */



session_start();
$clienteid = $_SESSION['clienteid'];


 /* buscando cliente no banco */


 $buscar = mysqli_query($sql,"SELECT * FROM Cliente where id like '$clienteid'");

 $array = mysqli_fetch_array($buscar);

 $nome = $array['nome'];
 $razao = $array['razao'];

 $status = $array['status'];

 $situacao = "";

 if($status == 1){
  $situacao = "<h6 class='text-success'>Ativo</h6>";
 }
 if($status == 2){
  $situacao = "<h6 class='text-danger'>Cancelado</h6> <span>".$array['obs']."</span>";
 }
  if($status == 3){
  $situacao = "<h6 class='text-warning'>Inadimplente</h6><span>".$array['obs']."</span>";
 }
  if($status == 20){
  $situacao = "<h6 class='text-info'>Bloqueado</h6><span>".$array['obs']."</span>";
 }

$nome_razao = "";
$cnpj_cpf = "";
$rg_inscri = "";
   if(empty($razao)){

    $nome_razao = $nome;
    $cnpj_cpf = "CPF:";
    $rg_inscri = "RG:";
   }else{
    $nome_razao = $razao;
    $cnpj_cpf = "CNPJ:";
    $rg_inscri = "INSCRIÇÃO ESTADUAL:";
   }





  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   ?>
<!--   codigo da pagina em html -->
   <div class="br-mainpanel" >
     <div class="br-pagetitle">
        <i class="icon icon ion-ios-briefcase-outline"></i>
        <div>
          <h4><?php echo $nome_razao; ?></h4>
           <?php echo $situacao; ?>
          <p class="mg-b-0"><a href="cliente.php"><i style="font-size:18px " class="icon ion-reply"></i> Clientes</a></p>
        <a href=""  data-toggle="modal" data-target="#status-cliente-edita">Editar Status</a>
        </div>
      </div>
  <div class="br-pagebody">

        <div class="card bd-gray-400">
          <div class="card-body pd-30 pd-md-60">
            <div class="d-md-flex justify-content-between flex-row-reverse">
              <h1 class="mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold"><?php echo $clienteid; ?></h1>
              <div class="col-md mg-t-40 mg-l-20">
              </div><!-- col -->
              <div class="mg-t-25 mg-md-t-0">
                <h2 class="tx-primary">Dados do Cliente</h2>
                <p class="lh-7"><strong><?php echo $cnpj_cpf; ?></strong> <?php echo $array['cnpj_cpf']; ?><br>
                <strong><?php echo $rg_inscri; ?> </strong><?php echo $array['rg_inscri']; ?><br>
                <strong>Telefone </strong> <?php echo " : ".$array['telefone1'].$array['telefone2']; ?><br>
                <strong>Celular </strong> <?php echo " : ".$array['celular1'].$array['celular2']; ?><br>
               <strong>Email: </strong> <?php echo $array['email']; ?></p>
              </div>

            </div><!-- d-flex -->

            <div class="row mg-t-20">
              <div class="col-md">
                <label class="tx-uppercase tx-13 tx-bold mg-b-20">Endereço</label>
                <p class="lh-7"><?php echo $array['endereco']; ?>,  <?php echo $array['numero']; ?>, <?php echo $array['complemento']; ?>,  <?php echo $array['bairro']; ?>, <?php echo $array['cidade']; ?>, <?php echo $array['uf']; ?><br>
                CEP: <?php echo $array['cep']; ?><br>
                </p>
              </div><!-- col -->
              <div class="col-6">
                <label class="tx-uppercase tx-13 tx-bold mg-b-20">Notificações</label>      
                <p class="d-flex justify-content-between mg-b-5">
                  <span>Ultima Atualização 05/09/2019</span>
                  <span></span>
                </p>
                <p class="d-flex justify-content-between mg-b-5">
                  <span>Contratos 4</span>
                  <span></span>
                </p>

              </div><!-- col -->

            </div><!-- row -->
            <div class="ht-md-60 wd-200 wd-md-auto bg-black-2 pd-y-20 pd-md-y-0 pd-md-x-20 d-md-flex align-items-center justify-content-center">
            <ul class="nav nav-effect nav-effect-1 flex-column flex-md-row menu-dados-cliente" role="tablist">
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="os.php" role="tab" aria-selected="false">OS </a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="contrato.php" role="tab" aria-selected="false">Contrato</a></li>
              <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="equipamento.php" role="tab" aria-selected="false">Equipamento</a></li>
              <li class="nav-item"><a class="nav-link  show" data-toggle="tab" href="sistemas.php" role="tab" aria-selected="false">Sistemas</a></li>
              <li class="nav-item current"><a class="nav-link  " data-toggle="tab" href="obs.php" role="tab" aria-selected="true">Observações</a></li>
              <li class="nav-item current"><a class="nav-link " data-toggle="tab" href="altera-cadastro.php" role="tab" aria-selected="true">Alterar Cadastro</a></li>
            </ul>
          </div>
          <div id="contender">
            
            <h2>Equipamentos</h2>

         <?php 

           $tem = "";

            $buscando_contra = mysqli_query($sql,"SELECT * FROM equipamento where cliente = '$clienteid'")or die(mysqli_error());

            $cont_contra = mysqli_num_rows($buscando_contra);

            if ($cont_contra == 0) {
                
                $tem = "style = 'display:none'";
                echo "Cliente não possui equipamentos <a  href='equipamento.php'>Cadastrar equipamento</a>";
            }


            ?>

            <div <?php echo $tem; ?>  class="table-responsive mg-t-40">
              <table class="table">
                <thead>
                  <tr>
                    <th class="wd-20p">Nome</th>
                    <th class="wd-40p">Descrição</th>
                    <th class="tx-center">Garantia </th>
                    <th class="tx-right">Data de compra</th>
                    <th class="tx-right">Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
          
                  //buscando equipamento

                  $consulta_equipamento = mysqli_query($sql,"SELECT * FROM equipamento where cliente = '$clienteid'");
                        
                    $result = mysqli_query($sql,"SELECT SUM(valor) AS soma FROM equipamento where cliente = '$clienteid'  "); 
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
                        <p class="tx-13"><?php echo $array['obs']; ?> </p>
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
          </div>
           
            <hr class="mg-b-60 bd-white-1">
            
          </div><!-- card-body -->
        </div><!-- card -->
      </div>      
      </div>
      <!-- LARGE MODAL -->
          <div id="status-cliente-edita" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <p  style="display: none"><?php echo $clienteid; ?></p>
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Editar estatus</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <h4 class=" lh-3 mg-b-20">
                    <select name="tipo" id="" class="border-0">
                     <option value="1">Ativo</option> 
                     <option value="20">Bloqueado</option> 
                     <option value="3">Inadimplente</option> 
                     <option value="2">Cancelado</option> 
                   </select>
                </h4>
                  <textarea required="Preencha este campo" rows="3" class="form-control" name="obs" placeholder="Modivo da mudança do status ">                  </textarea>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="border-0 br-menu-link active">Editar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
            <?php   include 'padrao/footer.php'; ?>
          </div><!-- modal -->
     
          <script>
            $("#status-cliente-edita .modal-footer button").click(function(event){
              event.preventDefault();

               var tipo = $("#status-cliente-edita select[name='tipo']").val();
               var texto = $("#status-cliente-edita textarea[name='obs']").val();
               var  quem = $("#status-cliente-edita .modal-header p").text();

               $.ajax({
                type:'post',
                url:'conf/edita-status-cliente.php',
                data:{
                 quem : quem,
                 tipo: tipo,
                 texto : texto
                }
               }).done(function(returno){
                alert(returno);
                 location.reload();
               })

                          })

          </script>