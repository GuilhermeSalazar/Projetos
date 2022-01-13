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
    <div class="br-mainpanel " >
      
      <div class="br-pagetitle  cadastro_titulo">
        <i style="color:#17A2B8" class="icon ion-man tx-70 lh-10 "></i>
        <div>
          <h4>Funcionario</h4>
          <p class="mg-b-0 float-right"></p>
        </div>

      </div>
     <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30 busca_funcionario">

        

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
    
        <!-- END: DISPLAYED FOR MOBILE ONLY -->
         <a href=""  data-toggle="modal" data-target="#cadastra-funcionario" class="br-menu-link active">Cadastrar novo</a>
        <div class="btn-group mg-l-auto hidden-sm-down">
          
         <input type="text" id="busca_funcionario" class="form-control mg-r-10" >
               <button class="border-0 br-menu-link active">Pesquizar</button>
        </div><!-- btn-group -->

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
       
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

      </div>
    

         <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-gray-400">
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th class="tx-10-force tx-mont tx-medium">Nome</th>
                <th class="tx-10-force tx-mont tx-medium">Telefone</th>
                <th class="tx-10-force tx-mont tx-medium">Data de Nascimento</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Tipo</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Status</th>
                <th class="wd-5p">Ação</th>
              </tr>
            </thead>
            <tbody>
             <?php 
              $buscar_funcionario = mysqli_query($sql,"SELECT  * FROM usuario");
             

              while($array_funci = mysqli_fetch_array($buscar_funcionario)){
                  $user_id = $array_funci['id'];
                  $user_tipo = $array_funci['cargo'];

                  

                  $array_cargo = mysqli_fetch_array(mysqli_query($sql,"SELECT * FROM cargo where id = '$user_tipo'"));


                   $status = "";
                  if($array_funci['estatus'] == 0){


                    $status = "<i style='color:red' class='fa fa-globe'></i>";
                  }
                  if($array_funci['estatus'] > 0){
                    $status = "<i style='color:green' class='fa fa-globe'></i>";
                    
                  }
                    $nascimento = date('d/m/Y ', strtotime($array_funci['data_nasc']));

                    $acao = "<form action='detalhe_funcionario.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$array_funci['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";


              echo "
                 
                 <tr>
                <td>
                  <div class='pd-t-2'>
                     <span class=' pd-l-5'>".$array_funci['nome']."</span>
                  </div>
                </td>
                <td>".$array_funci['telefone']."</td>
                <td>".$nascimento."</td>
                <td>".$array_cargo['cargo']."</td>
                <td class='hidden-xs-down'>".$status."</td>
                <td class='dropdown'>
                  <a href='#' data-toggle='dropdown' class='btn pd-y-3 tx-gray-500 hover-info'><i class='icon ion-more'></i></a>
                  <div class='dropdown-menu dropdown-menu-right pd-10'>
                    <nav class='nav nav-style-1 flex-column'>
                      <a href='#' class='nav-link'>".$acao."</a>
                      <a href='".$array_funci['id']."' data-toggle='modal' data-target='#alterar-senha' class='nav-link alterar_s'>Alterar Senha </a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
         


              ";





              }

              ?>
            </tbody>
          </table>
        </div>
      </div>
        
  <div class="br-pagebody ">
        <div class=" nossos row row-sm mg-t-20 ">

         </div> 
          <!-- Novos clientes -->
            
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            
           
            
          </div><!-- col-4 -->
        </div><!-- row -->          
      </div>
       <!-- LARGE MODAL -->
          <div id="cadastra-funcionario" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Cadastrar Funcionario</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Nome Completo:</label>
                    <input type="text" class="form-control" name="nome">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">CPF ou CNH:</label>
                  <input name="cpf"  type="text" class="form-control">
                 </div>
                </div>
               <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">RG:</label>
                  <input  name="rg" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Data Nascimento:</label>
                  <input name="nasci" class=" form-control " type="date" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Função</label>
                   <select name="funcao" id="" class=" form-control ">
                     <option value=""></option>
                     <option value="1">Atendente</option>
                     <option value="2">Suporte</option>
                     <option value="3">Técnico</option>
                     <option value="4">Administrador</option>
                     <option value="5">Vendendor</option>
                     <option value="6">Comercial</option>
                     <option value="7">Financeiro</option>
                   </select>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Telefone:</label>
                   <input type="text" name="telefone" class="form-control">
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Email:</label>
                   <input type="text" name="email" class="form-control">
                 </div>
               </div>
              <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Endereco</label>
                  <input name="endereco" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input name="bairro" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Cidade:</label>
                  <input name="cidade"  class=" form-control " type="text" placeholder="" value=""> 
                 </div>
               </div>
                <div class="col-lg-2">
                 <div class="form-group">
                  <label class="form-control-label">UF:</label>
                  <input name="uf" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
               <span>Usuario faz login no sistema? <a href="#" class="wd-100 br-menu-link active">Add Conta</a></span>
                <div class="col-lg-3 login" style="display: none">
                 <div class="form-group">
                  <label class="form-control-label">Login:</label>
                  <input name="login" id="login" class=" form-control " type="text" placeholder="" value="">
                  <div class="valid_login">
                  </div>
                 </div>
               </div>
               <div class="col-lg-3 login" style="display: none">
                 <div class="form-group">
                  <label class="form-control-label">Senha:</label>
                  <input name="senha" class=" form-control " type="password" placeholder="" value="">
                 </div>
               </div>
            </div><!-- row -->

          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Cadastrar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

          <div id="modaldemo4" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismis="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
          
                  
                  <h4 class="tx-success tx-semibold mg-b-20">Cadastro Realizado com Sucesso</h4>
                  <p class="mg-b-20 mg-x-20">
                   Esse e seu novo Funcionario</p>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->
<div id="error-fun" class="modal fade show" style="padding-right: 17px; display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-help-circled tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-danger tx-semibold mg-b-20">OPS</h4>
                  <p class="mg-b-20 mg-x-20">Cadastro não localizado na base de dados!</p>
                  </div><!-- modal-body -->
                </div><!-- modal-content icon ion-ios-checkmark-outline-->
              </div><!-- modal-dialog icon ion-settings-->
            </div><!-- modal -->

             <!-- MODAL ALERT MESSAGE -->
          <div id="alterar-senha" class="modal fade ">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-settings tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20">Alterar Senha</h4>
                  <p style="display: none"></p>
                    <input style="text-align: center" type="password" name="senha" class="form-control">
                  <button type="button" class="submit btn btn-success mg-t-5 tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold mg-b-20">
                    Redefinir</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

     
 <?php   include 'padrao/footer.php'; ?>
   