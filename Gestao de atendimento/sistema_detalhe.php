  <?php 

 

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';
   

     $system32 = $_SESSION['system32']; 


     // CONSULTAR   SISTEMA 


     $consulta_system = mysqli_query($sql,"SELECT * FROM sistema where  id like '$system32'")or die(mysqli_error());

     $array_system = mysqli_fetch_array($consulta_system);


     $img_system = $array_system['logo'];



     //registro de moddulos 



     $buscar_modulos = mysqli_query($sql,"SELECT * FROM modelo_sis where fk_sistema = '$system32'")or die(mysqli_error());

     $cont_modulos = mysqli_num_rows($buscar_modulos);
    $lista_modulos = "";
     
           
           

     

   ?>
    <div class="br-mainpanel">
   <div class="br-pagetitle  cadastro_titulo">
        <?php echo "<img src='".$img_system."' class='wd-150 rounded-circle' alt=''>"; ?>
        <div>
          <h4>Seguimento</h4>
          <p class="mg-b-0 float-right"><a href="sistemas.php"><i style="font-size:18px " class="icon ion-reply"></i> menu sistema</a></p>
        </div>

      </div>
      <div class="ht-md-65 bg-black-2 pd-y-20 pd-md-y-0 pd-x-20 d-md-flex align-items-center justify-content-start mg-t-20">
            <h4 class="mg-b-0 tx-uppercase tx-bold tx-spacing--2 tx-white mg-r-20 tx-poppins"></h4>
            <ul class="nav nav-gray-600 active-info tx-uppercase tx-12 tx-medium tx-spacing-2 flex-column flex-md-row mg-t-20 mg-md-t-0" role="tablist">
              <li class="nav-item"><a href="">Modulos</a></li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
             </ul>
            
          </div>

      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
        <a href="" data-toggle="modal" data-target="#cadastra-modulo" class="br-menu-link active wd-70 float-right ">Inserir</a>
          <div class='row row-sm mg-t-20'>

           <div class=" rounded table-responsive">
            <table class="table table-bordered ">
              <thead class="thead-colored thead-primary">
                <tr>
                  <th>Modulo</th>
                  <th>Descrição</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <?php 

                $cont_modulos = mysqli_num_rows($buscar_modulos);

                $buscar_m_b =  mysqli_query($sql,"SELECT SUM(valor ) as soma from modelo_sis where fk_sistema = '$system32'");

                 $orw = mysqli_fetch_assoc($buscar_m_b);
                 $sum = $orw['soma'];

                if($cont_modulos == 0){

                    echo "<h3>Modulos não Cadastrados </h3>";
                  }
                  else{
                       
                 while ($array_modulos = mysqli_fetch_array($buscar_modulos)) {
                
               
                  
               echo "


                  <tr>
                  <th class='wd-200'><a  href='".$array_modulos['id']."'><i class='icon ion-edit'></i></a> ".$array_modulos['modelo']."</th>
                  <td class='table_obs'>".$array_modulos['descricao']."</td>
                  <td class='table_valor wd-50'>".number_format($array_modulos['valor'], 2, ',', '.')."</td>
  
                </tr>
               "; 
            


           }
         }

               ?>
               
                     
                <tr>
                    <td class="valign-middle" rowspan="2" colspan="2">
                      
                    </td>
                    <td class="tx-right"><?php echo   'R$ ' . number_format($sum, 2, ',', '.'); ?></td>
                  </tr>
              </tbody>
            </table>
          </div>


          </div><!-- row -->

         

         
          
          </div><!-- row -->

          


      </div><!-- br-pagebody -->
      
    </div>
 <div id="cadastra-modulo" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Novo Modulo para o <?php echo $array_system['nome']; ?></h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                  <span style="display: none"><?php echo $system32; ?></span>
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                    <input type="text" class="form-control" name="nome">
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Descrição:</label>
                    <input type="text" class="form-control" name="descricao">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Valor:</label>
                    <input type="text" class="form-control" name="valor">
                 </div>
                </div>
                
                
                
                
            </div><!-- row  -->

          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Cadastrar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->


          <!-- alterrar dados -->
          <div id="update_modulo"></div>

          


              <div id="sucesso-sistema" class="modal fade show" style="padding-right: 17px; display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-edit tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20">Falha ao logar</h4>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
     
 <?php   include 'padrao/footer.php'; ?>

 <script>
  
  $("#cadastra-modulo .modal-footer button").click(function(){
    
    var modulo = $("#cadastra-modulo input[name='nome'").val();
    var descricao =  $("#cadastra-modulo input[name='descricao'").val();
    var valor =  $("#cadastra-modulo input[name='valor'").val();

    var id =  $("#cadastra-modulo .modal-body span").text();
    
    $.ajax({
       type:'POST',
       url:'conf/cadastra_modulos.php',
       data:{
        id : id,
        modulo : modulo,
        obs : descricao,
        valor : valor 
       }
    }).done( function(retnull){
       
       var retnull = retnull;

         if (retnull == "empty") {

          alert("preencha todos os campos");
         }
          if (retnull == "true") {

          $("#cadastra-modulo").hide();
          $("#sucesso-sistema").show();
          $("#sucesso-sistema .modal-body h4").text("Modulo Cadastrado com Sucesso!");
          $("#sucesso-sistema .close").click(function(){
           $("#sucesso-sistema").hide();
           location.reload(); 
          })

         }
    })
  })

  $(".table a").click(function(event){
    event.preventDefault();

    var update = $(this).attr("href");

    $.ajax({
       type:'POST',
       url:'conf/update_sistem.php',
       data:{
        modulo : update
       }
    }).done(function(modulolist){


     $("#update_modulo").html(modulolist);

     $("#alterar-modulo .modal-footer button").click(function(event){
      event.preventDefault();
        var id =  $("#alterar-modulo .modal-body span").text();
        var modulo = $("#alterar-modulo input[name='nome'").val();
         var descri =  $("#alterar-modulo input[name='descricao'").val();
        var valor =  $("#alterar-modulo input[name='valor'").val();
        
        $.ajax({
           type:'POST',
           url:'conf/atualiza_modulo.php',
           data:{
            nome : modulo,
            descri : descri,
            valor: valor,
            id: id
           }
        }).done(function(atualizou){

         alert(atualizou); 
         location.reload();
        })
       
     })

    })
    
  })

 </script>
   