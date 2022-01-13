<?php 
require '../conf/db.php';
  session_start();
$clienteid = $_SESSION['clienteid'];

  $buscar_sys= mysqli_query($sql,"SELECT * FROM sistema ");


  //busca sistem //

    $sys = mysqli_query($sql,"SELECT * FROM cliente_sys  where fk_cliente = '$clienteid'")or die(mysqli_error());
    $arrays = mysqli_fetch_array($sys);

     $cont = mysqli_num_rows($sys);

     if($cont == 0){


       echo "NENHUM";
     $css = "style='display:none'";

     }else{

     $css = "";
           

         $id_sis = $arrays['fk_sistema'];
         $id_primary = $arrays['id'];
         
         $sis_b = mysqli_query($sql,"SELECT * FROM sistema where id = '$id_sis'")or die(mysqli_error());

           $bt = mysqli_fetch_array($sis_b);
               
          
          $m_s = mysqli_query($sql,"SELECT * FROM modulo  where fk_sys = '$id_primary'")or die(mysqli_error());
          $r_m = mysqli_fetch_array($m_s);
              
              $id_modulo = $r_m['nome'];
                $date = $r_m['vencimento'];
           $modelo = mysqli_query($sql,"SELECT * FROM sistema where id = '$id_sis'")or die(mysqli_error());
           $model = mysqli_fetch_array($modelo);



           // logo do sistema 


           $logo_marca = $bt['logo'];
            
            $nome = $model['nome'];

            $descric = $r_m['descricao'];
            $valor = $r_m['valor'];

            // soma dos modulos  


            $valor_modulos = mysqli_query($sql,"SELECT sum(valor ) as soma FROM modulo where fk_sys = '$id_primary' && status = '0'");

            $row = mysqli_fetch_assoc($valor_modulos);

            $total = number_format($row['soma'], 2, ',','.'); 





     }

   


 ?>

<h2>sistemas</h2>
<?php 
   $cliente_sys  = mysqli_query($sql,"SELECT * FROM cliente_sys where fk_cliente = '$clienteid'");

   $sys_cont = mysqli_num_rows($cliente_sys);

   if($sys_cont == '0'){
      echo "<a href='' class='br-menu-link ' data-toggle='modal' data-target='#cadastra-sistema'>Cadastrar sistema</a>";

   }else{

    echo "";
   }
   
 ?>

<div class="col-xl-12" <?php echo $css; ?>>
            <div class="card pd-0">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4 pd-20-force">
                  <img <?php echo "src='".$logo_marca."'"; ?>  class=" wd-200" alt="">
                </div><!-- col-4 -->
                <div class="col-md-6 col-lg-5 pd-20-force">
                  <div>
                    <span>Ativo</span>
                  </div>
                  <h5 class="tx-normal mg-y-5 tx-white"><?php echo $nome; ?> </h5>
                  <span class="tx-13"></span>

                  <p class="tx-13 mg-t-20"></p>
                </div><!-- col-5 -->
                <div class="col-md-6 col-lg-3 pd-20-force d-flex align-items-start flex-column">
                  <h5 class="tx-normal tx-success mg-b-0">Total R$: <span class="tx-success tx-medium tx-lato"><?php echo $total; ?></span></h5>
                  <div class="tx-12 tx-gray-500 mg-b-10"></div>

                  <ul class="list-unstyled tx-12 mg-b-20 mg-lg-b-auto">
                    <li><i class="fa fa-check tx-success mg-r-5"></i>Em dia</li>
                  </ul>
                  <a href="" class="br-menu-link active" data-toggle="modal" data-target="#cadastra-sistema"><i class="fa fa-plus"> </i>  Modulos</a>

                </div><!-- col-3-->
              </div><!-- row -->
              <div class="table-responsive mg-t-40">
              <table class="table">
                <thead>
                  <tr>
                    <th class="wd-20p">Modulo</th>
                    <th class="wd-40p">Descrição</th>
                    <th class="tx-center">Data vencimento</th>
                    <th class="tx-right">Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                    $bus_itens = mysqli_query($sql,"SELECT * FROM modulo where fk_sys = '$id_primary'");

                    while($array_itens = mysqli_fetch_array($bus_itens)){
                       $vencimento = date('d/m/Y', strtotime($array_itens['vencimento']));
               echo "
                  <tr>
                  <td><a href='".$array_itens['id']."' data-toggle='modal' data-target='#altera-modulo'><i class='icon ion-edit'></i></a> ".$array_itens['nome']."</td>
                    <td class='tx-18'>".$array_itens['descricao']."</td>
                    <td class='tx-center'>".$vencimento."</td>
                    <td class='tx-right'>

                    
                    ";
                        $status = $array_itens['status'];
                      if($status == '1'){

                        echo "<del class='text-danger'>R$: ".number_format($array_itens['valor'], 2, ',','.')."</del>";

                      }
                      if($status == '0'){

                        echo "R$: ".number_format($array_itens['valor'], 2, ',','.');
                      }
                    
                     
                echo "
                    </td>
                  </tr>
                      ";

                    }


                   ?>
                  
                </tbody>
              </table>
            </div>
            </div><!-- card -->
          </div>
<!-- CONFIGURAÇÃO DE MODULOS DE CADASTRO-->

 <div id="cadastra-sistema" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Sistema do cliente</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Sistema:</label>
                      <select name="" class="form-control" id="sistema">
                        
                        <?php 
                             while($array_sys = mysqli_fetch_array($buscar_sys)){

                             echo "<option value='".$array_sys['id']."'>".$array_sys['nome']."</option>";


                             }

                         ?>
                      </select>
                    <span style="display: none"><?php
                       
                     echo $clienteid; ?></span>          
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Modulo:</label>
                   <select  name="modulo" class="form-control" id="modulo">
                      </select>       
                 </div>
                </div>
               <div class="row float-left" id="descri_valor">
                 
               </div>





            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Inserir</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          <!--ALTERAÇÃO DO MODULO-->
            <div id="returm"></div>
          

<script>
  /*cadastro   de sistema*/
  $("#sistema option").click(function(event){
    event.preventDefault();
    var option = $(this).val();
    $.ajax({type:'post', url:'conf/consultar_mod.php', data:{ option: option}}).done(function(retpp){
        $("#modulo").html(retpp);
            $("#modulo option").click(function(){
             var modulo_option = $(this).val();
                 $.ajax({
                   type:'post',
                   url:'conf/mod_array.php',
                   data:{
                    modulo: modulo_option
                   }
                 }).done(function(retyy){
                   $("#descri_valor").html(retyy);
                 })
             })
    })
  })

    $("#cadastra-sistema .modal-footer button").click(function(){
      var date, sistema, modulo, descricao, valor, id;

        sistema = $("#sistema").val();
        modulo = $("#modulo").val();
        descricao = $("#cadastra-sistema .form-group input[name='descri']").val();
        valor = $("#cadastra-sistema .form-group input[name='valor']").val();
        date = $("#cadastra-sistema .form-group input[name='data']").val();
        id = $("#cadastra-sistema .form-group span").text();
        
        $.ajax({
            type:'POST',
            url:'conf/cadastrar_sys.php',
            data:{
              sistema : sistema,
              modulo: modulo,
              descri : descricao,
              valor: valor,
               data : date,
              id : id 
            }
        }).done(function(retqp){

            alert(retqp);
            location.reload();

        })

           
    })

    $(".table tr td a").click(function(event){
       event.preventDefault();
       var a = $(this).attr("href");

       $.ajax({ type:'POST', url: 'conf/altera_modulos.php', data: { id : a}}).done(function(ret879){
             
             $("#returm").html(ret879);
             $("#altera-modulo .close").click(function(){
              $("#returm").html("");
             })
           // enviar para logica php
             $("#altera-modulo .modal-footer button").click(function(){
               var acao, descri, valor, date;

               acao = $("#altera-modulo .form-group select[name='acao']").val();
               descri = $("#altera-modulo .form-group input[name='descri']").val();
               valor = $("#altera-modulo .form-group input[name='valor']").val();
               date = $("#altera-modulo .form-group input[name='vencimento']").val();
               id = $("#altera-modulo .form-group span").text();

          
               $.ajax({
                   type:'post',
                   url:'conf/acao_modulo.php',
                   data:{
                    acao: acao,
                    obs: descri,
                    valor: valor,
                    data: date,
                    id : id 
                   }
               }).done(function(retft){

                alert(retft);
                 $("#contender").load('itens_clientes/' + 'sistemas.php');
               })

             })


       })

    })

</script>


