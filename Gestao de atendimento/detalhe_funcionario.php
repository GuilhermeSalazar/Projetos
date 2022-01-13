  <?php 

 

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   /*capiturando variavel */


   $funcionario = $_POST['cadastro'];


   $buscando_cliente = mysqli_query($sql,"SELECT * FROM usuario where id = '$funcionario'");

    $array_usuario = mysqli_fetch_array($buscando_cliente);
     
    $cargo_cliente =  $array_usuario['cargo'];

   $buscando_cargo = mysqli_query($sql,"SELECT * FROM cargo where id = '$cargo_cliente'");

   $array_cargo = mysqli_fetch_array($buscando_cargo);

   $nome_cargo = $array_cargo['cargo'];


        $f_email = $array_usuario['email'];
        $f_nome = $array_usuario['nome'];
        $f_telefone = $array_usuario['telefone'];
        $f_endereco = $array_usuario['endereco'];
        $f_municipio = $array_usuario['bairro'];
        $f_cidade = $array_usuario['cidade'];
        $f_uf = $array_usuario['uf'];
        $f_cpf = $array_usuario['cpf'];
        $f_rg = $array_usuario['rg_cnh'];
        $f_data = $array_usuario['data_nasc'];



   ?>


    <div class="br-mainpanel br-profile-page">

      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
          </div>
          <div class="tx-24 hidden-xs-down">
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <?php echo "<img style='height: 100px' src='update/".$array_usuario['perfil']."' alt= ''>"; ?>
            
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto tx-white"><?php echo $array_usuario['nome']; ?></h4>
          <p class="mg-b-25"><?php echo $nome_cargo; ?></p>

          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Ativo</p>

          <p class="mg-b-0 tx-24">
            <a href="" class="tx-white-8 mg-r-5"><i class="fab fa-facebook"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fab fa-whatsapp"></i></a>
          </p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#posts" role="tab" aria-selected="true">Imformações</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab" aria-selected="false">Chamados</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#os" role="tab" aria-selected="false">OS</a></li>
          <li class="nav-item hidden-xs-down"><a class="nav-link" data-toggle="tab" href="#mochila" role="tab" aria-selected="false">Mochila </a></li>
        </ul>
      </div>

      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-8">
              <div class="media-list bg-br-primary rounded bd bd-white-1">
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                        <h6 class="mg-b-2 tx-white tx-14">Usuario</h6>
                        <span class="tx-12 tx-gray-500">Permições</span>
                      </div>
                    </div><!-- d-flex -->
                    <p class="mg-b-20">Essa categoria de cadastro possui limitações em acesso em algumas paginas do sistema </p>
                    <!-- d-flex -->
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media pd-20 pd-xs-30">
                  <div class="media-body mg-l-20">
                    <div class="d-flex justify-content-between mg-b-10">
                      <div>
                       <button class="btn btn-outline-success btn-block"><i class="fa fa-download mg-r-10"></i>Abrir Chamado</button>
                      </div>
                     
                    </div><!-- d-flex -->
                  
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- card -->
            </div><!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <div class="card pd-20 pd-xs-30 bd-gray-400">
                <h6 class="tx-white tx-uppercase tx-13 mg-b-25">Informações da conta</h6>
                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefone</label>
                <p class="tx-info mg-b-25"><?php echo $f_telefone; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Email</label>
                <p class="tx-white mg-b-25"><?php echo $f_email; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Endereço</label>
                <p class="tx-white mg-b-50"><?php echo $f_endereco; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Bairro</label>
                <p class="tx-white mg-b-50"><?php echo $f_municipio; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Cidade</label>
                <p class="tx-white mg-b-50"><?php echo $f_cidade.' '.$f_uf; ?></p>
                <h6 class="tx-white tx-uppercase tx-medium tx-13 mg-b-25">Dados pessoais</h6>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">CPF</label>
                <p class="tx-white mg-b-25"><?php echo $f_cpf; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">RG / CNH</label>
                <p class="tx-white mg-b-25"><?php echo $f_rg; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">DATA NASC</label>
                <p class="tx-white mg-b-25"><?php echo date('d/m/Y ', strtotime($f_data)); ?></p>
              </div><!-- card -->
              <!-- card -->
            </div><!-- col-lg-4 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="photos">
          <div class="row">
            <div class="col-lg-12">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Chamados</h6>

                <div class="row row-xs">
                
                </div><!-- row -->

                <p class="mg-t-20 mg-b-0">Loading more photos...</p>

              </div><!-- card -->
            </div><!-- col-lg-8 -->
     
          </div><!-- row -->
        </div><!-- tab-pane -->
           <div class="tab-pane fade" id="os">
          <div class="row">
            <div class="col-lg-12">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">OS</h6>

                <div class="row row-xs">
                
                </div><!-- row -->

                <p class="mg-t-20 mg-b-0">Loading more photos...</p>

              </div><!-- card -->
            </div><!-- col-lg-8 -->
     
          </div><!-- row -->
        </div><!-- tab-pane -->
           <div class="tab-pane fade" id="mochila">
          <div class="row">
            <div class="col-lg-12">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Mochila</h6>
                  <a href="" data-toggle="modal" data-target="#add-peca" class="br-menu-link active border-0 wd-150 ">Add Peças</a>
                <div class="row row-xs">
                <table class="table table-bordered mg-b-0 lista-clientes">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th class="wd-50">Quantidade</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                  <td>Memoria 4GB</td>
                  <td>Adata</td>
                  <td> 1600 PC3-12800</td>
                  <td>2</td>
                </tr>
             </tbody>
            </table>
                </div><!-- row -->

                <p class="mg-t-20 mg-b-0">Loading more photos...</p>

              </div><!-- card -->
            </div><!-- col-lg-8 -->
     
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- br-pagebody -->

    </div>
      
              

       <!-- LARGE MODAL -->
          <div id="add-peca" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">ADD PEÇAS</h6>
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
                  <input id="nome"  name="nome" class=" form-control " type="text" placeholder="" value="">
                  <div id="modelo-resul">
                    
                  </div>
                 </div>
               </div> <span>
                 
                 <div class='col-lg-2 '>
                 <div class='form-group'>
                  <label class='form-control-label'>Marca:</label>
                  <input name='marca' class=' form-control ' type='text' placeholder='' value=''>
                 </div>
               </div>
                <div class='col-lg-2'>
                 <div class='form-group'>
                  <label class='form-control-label'>Modelo</label>
                  <input name='modelo' class=' form-control ' type='text' placeholder='' value=''>
                 </div>
               </div>
               </span>
              
               <div class='col-lg-2'>
                 <div class='form-group'>
                  <label class="form-control-label">Quantidade:</label>
                  <input name="quantidade" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
            </div><!-- row -->
          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="border-0 br-menu-link active">Lançar peças</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

     
 <?php   include 'padrao/footer.php'; ?>
<script>


  $("#nome").keypress(function(){
    $(this).keyup(function(e) {
        var keyword = $(this).val();
          // ajax enviando 
          $.ajax({
            type:'post',
            url:'conf/detalhe_buscar_p.php',
            data:{
             nome : keyword 
            },
            beforeSend: function(){
              $("#modelo-resul").text("Carregando...");
            }
          }).done(function(returno){
             $("#modelo-resul").html(returno);
            
            $("#modelo-resul a ").click(function(event){
              event.preventDefault();

              var valor = $(this).text();
              var href = $(this).attr("href");



              $("#nome").val(valor);
                  
              $.ajax({
                type:'post',
                url:'conf/phpcomplet.php',
                data:{
                 id: href 
                }
              }).done(function(ttr123){
                $("#retsul").html(ttr123);
              })    
            })

          })
        })
  });
  
</script>   