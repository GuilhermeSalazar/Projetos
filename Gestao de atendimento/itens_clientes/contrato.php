
<?php 
require '../conf/db.php';
  session_start();
$clienteid = $_SESSION['clienteid'];



 ?>
<h2>contrato</h2>





   
  <?php 

    $buscar_contrato = mysqli_query($sql,"SELECT * FROM contrato where fk_cliente = '$clienteid'");
    $cont = mysqli_num_rows($buscar_contrato);

    
    $busca_equipamento = mysqli_query($sql,"SELECT * FROM equipamento where cliente = '$clienteid'")or die(mysqli_error());
      $busca_itens = mysqli_query($sql,"SELECT * FROM itens_contrato where tipo = '2'")or die(mysqli_error());
     if($cont == 0){


          echo "

   <a href='' data-toggle='modal' data-target='#abri-contrato'  class='br-menu-link active  border-0 wd-200 abrir_contrato' style='text-align:center'>Abrir um novo contrato</a>

          CLIENTE SEM CONTRATO";

     }else{


             $array = mysqli_fetch_array($buscar_contrato);


             echo "

                <div class='card bd-gray-400'>
          <div class='card-body pd-30 pd-md-60'>
            <div class='d-md-flex justify-content-between flex-row-reverse'>
              <h1 class='mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold'>C".$array['id']."</h1>
              <div class='mg-t-25 mg-md-t-0'>
               <h1 class='mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold'>Meu Contrato</h1>
                <p class='lh-7'>Data de Abertura do Contrato<br>
                ".date('d/m/Y ', strtotime($array['d_abertura']))."<br>
                </p>
              </div>
            </div><!-- d-flex -->

            <div class='row mg-t-20'>
              <div class='col-md'>
                <h6 class='tx-white'>Meios de Pagamentos </h6>
                <p class='lh-7'>".$array['m_pagamento']."</p>
              </div><!-- col -->
            </div><!-- row -->

            <div class='table-responsive mg-t-40'>
             <h2>Itens do Contrato</h2> <a href=''  data-toggle='modal' data-target='#add-itens'>Add Itens </a> 
              <table class='table'>
                <thead>
                  <tr>
                    <th class='wd-20p'>Nome</th>
                    <th class='wd-20p'>Equipamento</th>
                    <th class='tx-center'>Data </th>
                    <th class='tx-right'>Valor</th>
                    <th class='tx-right'>Situação</th>
                  </tr>
                </thead>
                <tbody>";
                     $tens_c = $array['id'];
                     $buscar_itens_c = mysqli_query($sql,"SELECT * FROM garantia_contrato where n_contrato = '$tens_c'")or die(mysqli_error());


                        while($ret = mysqli_fetch_array($buscar_itens_c)){

                                         $statur = "";

                                         if($ret['status'] == 1){

                                          $statur = "Valido";
                                         }else{
                                          
                                          $statur = "<span class='text-danger'>Invalido</span>";
                                         }
              echo "<tr>
                    <td>".$ret['nome']." <a href='".$ret['id']."' data-toggle='modal' data-target='#editaritens'><i class='icon ion-edit'></i></a></td>
                    <td class='tx-16'>".$ret['Equipamento']."</td>
                    <td class='tx-center'>".date('d/m/Y ', strtotime($ret['data_inicial']))." a: ".date('d/m/Y ', strtotime($ret['data_final']))." </td>

                    ";
                      if($ret['status'] == 0){

                       echo "<td class='tx-right text-danger'><del>R$ ".$ret['valor']."</del></td>"; 
                      }else{

                       echo "<td class='tx-right '>R$ ".$ret['valor']."</td>"; 

                      }
                    echo "
                    
                    <td class='tx-right'>".$statur."</td>
                  </tr>";




                        }

                  
                echo "
                  
                </tbody>
              </table>
            </div><!-- table-responsive -->


           

          </div><!-- card-body -->
        </div>

             ";


     }



   ?>








        <div id="abri-contrato" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Abrir contrato</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Data de Abertura:</label>
                    <input type="date" class="form-control" name="abertura">
                    <span style="display: none"><?php
                       
                     echo $clienteid; ?></span>          
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Meio de Pagamento:</label>
                    <input type="text" class="form-control" name="pagamento">          
                 </div>
                </div>
            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">ABRIR</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->


          <div id="add-itens" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">add Itens C <span><?php echo $array['id']; ?></span> </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Contrato:</label>
                    <select id="itens-contrats"  class="form-control" name="tipo">
                      <?php 


                                 while($arra_itens = mysqli_fetch_array($busca_itens)){

                                  echo "<option alt='".$arra_itens['nome']."' value='".$arra_itens['id']."'>".$arra_itens['nome']."</option>";
                                                         
                                 }

                       ?>
                    </select>
                    <span style="display: none"><?php
                       
                     echo $clienteid; ?></span>          
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Equipamento</label>
                  <select name="equipamento" id=""class="form-control">
                      <?php 

                        while ($arra_equipa = mysqli_fetch_array($busca_equipamento)) {
                           echo "

                             <option value='".$arra_equipa['id']."'> ".$arra_equipa['n_serie']." ".$arra_equipa['marca']." ".$arra_equipa['modelo']."</option>

                           ";
                        }
                       ?>
                     <option value="Atendimento">Atendimento</option>
                  </select>

                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Valor </label>
                     <input type="text" class="form-control" name="valor">
                </div>
              </div>
              <span>Validade</span>
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label"></label>
                     <input type="date" class="form-control" name="de">   
                </div>
              </div>
              <span>ate</span>
              <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label"></label>
                     <input type="date" class="form-control" name="ate">   
                </div>
              </div>

            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Adicionar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->


       <div id="edit_contra"></div> 
<script>
  $(".abrir_contrato").click(function(event){
    event.preventDefault();
  })
  $("#abri-contrato .modal-footer button").click(function(){
       var abertura, pagamento, id;
       abertura = $("#abri-contrato .form-group input[name='abertura']").val();
       pagamento = $("#abri-contrato .form-group input[name='pagamento']").val();
       id = $("#abri-contrato .form-group span").text();
       $.ajax({
        type:'post',
        url:'conf/abrir-contrato.php',
        data:{
          id : id,
          data: abertura,
          pagamento: pagamento
        }
       }).done(function(ret87){
        alert(ret87);
       location.reload();
       })
  })
  $("#itens-contrats option").click(function(event){
    event.preventDefault();
    var option = $(this).attr('value');
     
     $.ajax({
      type:'post',
      url:'conf/buscar_itens_contrato.php',
      data:{
        id : option
      }
     }).done(function(ret656){

     $("#add-itens .form-group input[name='valor']").val(ret656);
      
     })

  })

  $("#add-itens .modal-footer button").click(function(){

      var id, contrato, valor, de, ate;

        id = $("#add-itens .modal-header h6 span").text();
        contrato = $("#itens-contrats").val();
        equipamento = $("#add-itens .form-group select[name='equipamento']").val();
        valor = $("#add-itens .form-group input[name='valor']").val();
        de = $("#add-itens .form-group input[name='de']").val();
        ate = $("#add-itens .form-group input[name='ate']").val();
        $.ajax({
          type:'post',
          url:'conf/lanca-contrato.php',
          data: {

             n_contrato: id,
             item_id : contrato,
             de: de,
             ate: ate,
             valor: valor,
             equipamento: equipamento

          }
        }).done(function(ret0908){
          alert(ret0908);
          location.reload();
        })
  })
   $(".table  tr td a").click(function(){
      var edit = $(this).attr("href");
       
       $.ajax({ type:'post', url:'conf/altera_itens_contrato.php', data:{item : edit}}).done(function(ret5447){

          $("#edit_contra").html(ret5447);
             // fechar o form 
           $("#editar-itens .close").click(function(){
          $("#edit_contra").html("");                
           })
           // açÃO BOTAO EDIT 

           $("#editar-itens .modal-footer button").click(function(){
             var acao, item, valor, de, ate, id;
              
              id = $("#editar-itens .form-group span").text();
              acao = $("#editar-itens .form-group select[name='acao']").val();
              item = $("#editar-itens .form-group input[name='item']").val();
              valor = $("#editar-itens .form-group input[name='valor']").val();
              de = $("#editar-itens .form-group input[name='de']").val();
               ate = $("#editar-itens .form-group input[name='ate']").val();
                 
               // ajax 
               
               $.ajax({
                type:'post',
                url:'conf/ajax_itens.php',
                data:{
                 id : id,
                 acao : acao,
                 item : item,
                 valor: valor,
                 de : de,
                 ate: ate 
                }
               }).done(function(dede){

                alert(dede);
                 $("#contender").load('itens_clientes/' + 'contrato.php');

                 $("#edit_contra").html("");
               })  


           })

       })
   })   
</script>