  <?php 

 

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   ?>
    <div class="br-mainpanel">
   <div class="br-pagetitle  cadastro_titulo">
        <i class="fa fa-tasks tx-70 lh-10 " style="color:#17A2B8"></i>
        <div>
          <h4>Serviços</h4>
          <p class="mg-b-0 float-right"></p>
        </div>

      </div>
      <div class="ht-md-60 pd-x-20 bg-black-2 rounded d-flex align-items-center justify-content-center">
            <ul class="menu-servico nav nav-outline active-info align-items-center flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="servico/servico.php" role="tab">Serviços</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="servico/garantia.php" role="tab">Garantia</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="servico/tipo.php" role="tab">Tipos de Contratos</a></li>
            </ul>
          </div>


  <div id="conteudo">
             <a href="" data-toggle="modal" data-target="#cadastra-servico" class="br-menu-link active wd-150 border-0 float-right" style="margin: 10px 10px 20px 0">Cadastrar serviço</a>
      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
                

           <div class="bd bd-white-1 rounded table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Cod</th>
                  <th>Serviço</th>
                  <th>Descrição</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                   
                   $consultar_servico = mysqli_query($sql,"SELECT  * FROM  servico ");
                     while($array_ser = mysqli_fetch_array($consultar_servico)){


                          echo "
                <tr>
                  <th scope='row'>".$array_ser['id']."</th>
                  <td  alt='nome'>".$array_ser['nome']."</td>
                  <td  alt='servico'>".$array_ser['servico']." <a href='".$array_ser['id']."'>Editar</a></td>
                  <td  alt='valor'>".$array_ser['valor']."</td>
                </tr>
                

                          ";



                     }


                 ?>
                
              </tbody>
            </table>
          </div>
          
          </div><!-- row -->
         </div> 

          


      </div><!-- br-pagebody -->
      
    </div>
    <div id="return"></div>
 <div id="cadastra-servico" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Serviço</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
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
                    <input type="text" class="form-control" name="descri">
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


          <!--  MODAL PARA GARANTIA  -->

           <div id="cadastra-garantia" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Garantia</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
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
                    <input type="text" class="form-control" name="descri">
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
               <!-- modal itens -->
           <div id="cadastra-itens" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Itens de contrato</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
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
                    <input type="text" class="form-control" name="descri">
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



 <?php   include 'padrao/footer.php'; ?>

 <script>

  $("#cadastra-servico .modal-footer button").click(function(){
   // variaves 

     var nome, descri, valor;

       nome = $("#cadastra-servico .form-group input[name='nome']").val();
       descri = $("#cadastra-servico .form-group input[name='descri']").val();
       valor = $("#cadastra-servico .form-group input[name='valor']").val();

        // envio 

         $.ajax({
              type:'post',
              url:'conf/cadastra-servico.php',
              data:{
                nome : nome,
                descri : descri,
                valor: valor
              }
         }).done(function(ret44){
             var ret40 = ret44;


             if(ret40 == "Preencha todos os campos!"){


                alert(ret44);
                $("#cadastra-servico .form-group input[name='nome']").val('');
                $("#cadastra-servico .form-group input[name='descri']").val('');
                $("#cadastra-servico .form-group input[name='valor']").val('');

             }else{

                alert(ret44);
                 location.reload();

             }
         })


  })
    $(".table tr a").click(function(event){
      event.preventDefault();
          var objeto = $(this).attr("href");
           
            $.ajax({
                type: 'post',
                url: 'conf/altera-servico.php',
                data:{
                 objeto : objeto 
                } 
            }).done(function(ret11){

              $("#return").html(ret11);
                  $("#editar-servico .close").click(function(){
                    $("#editar-servico").hide();
                  })
                 $("#editar-servico .modal-footer button").click(function(){
                     nome = $("#editar-servico .form-group input[name='nome']").val();
                     descri = $("#editar-servico .form-group input[name='descri']").val();
                      valor = $("#editar-servico .form-group input[name='valor']").val();
                  

                        $.ajax({
                            type:'post',
                            url: 'conf/altera-serviço.php',
                            data:{
                             nome: nome,
                             descri: descri,
                             valor: valor,
                             id: objeto 
                            } 
                        }).done(function(ret00){

                          alert(ret00);
                          location.reload();
                        })

                  })
            })
    })
 
    $(".menu-servico li a").click(function(){
        var item = $(this).attr("href");


        $("#conteudo").load(item);
             
    })
    $("#cadastra-garantia .modal-footer button").click(function(){

      var nome = $("#cadastra-garantia .form-group input[name='nome']").val();
      var descri = $("#cadastra-garantia .form-group input[name='descri']").val();
      var  tipo = "1";

      $.ajax({
           type:'post',
           url:'conf/garantia.php',
           data:{
          nome : nome,
          descri: descri,
          tipo: tipo

           }
      }).done(function(ret47){

        alert(ret47);
        $("#cadastra-garantia .form-group input[name='nome']").val('');
        $("#cadastra-garantia .form-group input[name='descri']").val('');
      }) 

    })
    $("#cadastra-itens .modal-footer button").click(function(){
       var     nome = $("#cadastra-itens .form-group input[name='nome']").val();
       var descri = $("#cadastra-itens .form-group input[name='descri']").val();
      var valor = $("#cadastra-itens .form-group input[name='valor']").val();
      var tipo = "2";

        $.ajax({
          type:'post',
          url:'conf/garantia.php',
          data:{
            nome : nome,
            descri : descri,
            valor: valor,
            tipo: tipo
          }
        }).done(function(ret26){
          alert(ret26);
         $("#cadastra-itens .form-group input[name='nome']").val('');
        $("#cadastra-itens .form-group input[name='descri']").val('');
       $("#cadastra-itens .form-group input[name='valor']").val('');
        })

    })
 </script>
   