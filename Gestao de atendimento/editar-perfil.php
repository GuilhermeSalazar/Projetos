<?php 


 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");


      $nome = "nome";

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   ?>
  <div class="br-mainpanel br-profile-page">
      <div class="card widget-4 bd-0 rounded-0">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="" class="mg-r-10"><span class="tx-medium"></span>Perfil</a>
          </div>
          <div class="tx-24 hidden-xs-down">
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <?php echo "<img style='height:100px' src='update/".$perfil."' alt=''>"; ?>
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto tx-white"><?php echo $login; ?></h4>
          <p class="mg-b-25"><?php echo $cargo; ?></p> 
        </div><!-- card-body -->
      </div><!-- card -->
      <div class="ht-70 bg-black-1 pd-x-20 d-flex align-items-center justify-content-center bd-b bd-white-1">
        <ul class="nav nav-outline active-primary align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Configuração</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Perfil</a></li>
        </ul>
      </div>
      <div class="tab-content br-profile-body">
        <div class="tab-pane fade active show" id="posts">
          <div class="row">
            <div class="col-lg-8">
             <div class="form-layout form-layout-1">
              <form action="" class="form-cadastrar">
            <div class="row mg-b-25">
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nome: <span class="tx-danger"></span></label>
                   <?php echo "<input class='form-control form-control-dark' type='text' name='nome' value='".$d_nome."'>"; ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">E-mail: <span class="tx-danger"></span></label>
                  <?php echo "<input class='form-control form-control-dark' type='text' name='Email'
                   value=".$d_email.">";?>
                  <?php echo "<input style='display: none' class='form-control form-control-dark' type='text' name='id' value='".$id."'>"; ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Telefone: <span class="tx-danger"></span></label>
                   <?php echo "<input class='form-control form-control-dark' type='text' name='telefone'value='".$d_telefone."'>"; ?>
                </div>
              </div><!-- col-4 -->
              <!-- col-4 -->
             <!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Endereço<span class="tx-danger"></span></label>
                  <?php echo "<input class='form-control form-control-dark' type='text' name='endereco' value='".$d_endereco." '>"; ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Bairro: <span class="tx-danger"></span></label>
                   <?php echo "<input class='form-control form-control-dark' type='text' name='bairro' value='".$d_municipio."'>"; ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Cidade: <span class="tx-danger"></span></label>
                   <?php echo "<input class='form-control form-control-dark' type='text' name='cidade' value='".$d_cidade."'>"; ?>
                </div>
              </div>
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">UF: <span class="tx-danger"></span></label>
                   <?php echo "<input class='form-control form-control-dark' type='text' name='uf' value='".$d_uf."'>"; ?>
                </div>
              </div>
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">CPF<span class="tx-danger"></span></label>
                  <?php echo "<input class='form-control form-control-dark' type='text' name='CPF' value='".$d_cpf."'>"; ?>
                </div>
              </div>
                <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">RG / CNH<span class="tx-danger"></span></label>
                  <?php echo "<input class='form-control form-control-dark' type='text' name='RG'value='".$d_rg."'>"; ?>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">DATA NASC<span class="tx-danger"></span></label>
                  <?php echo "<input class='form-control form-control-dark' type='date' name='data-nasc' value='".$d_data."'>"; ?>
                </div>
              </div>
              <!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer">
             <input style="margin-top:-20px;" class="br-menu-link active border-0 float-right" type="submit" value="Alterar">
            </div><!-- form-layout-footer -->
             </form>
             </div>
             
            </div><!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <div class="card pd-20 pd-xs-30 bd-gray-400">
                <h6 class="tx-white tx-uppercase tx-13 mg-b-25">Informações da conta</h6>
                <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Telefone</label>
                <p class="tx-info mg-b-25"><?php echo $d_telefone; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Email</label>
                <p class="tx-white mg-b-25"><?php echo $d_email; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Endereço</label>
                <p class="tx-white mg-b-50"><?php echo $d_endereco; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Bairro</label>
                <p class="tx-white mg-b-50"><?php echo $d_municipio; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">Cidade</label>
                <p class="tx-white mg-b-50"><?php echo $d_cidade.' '.$d_uf; ?></p>
                <h6 class="tx-white tx-uppercase tx-medium tx-13 mg-b-25">Dados pessoais</h6>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">CPF</label>
                <p class="tx-white mg-b-25"><?php echo $d_cpf; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">RG / CNH</label>
                <p class="tx-white mg-b-25"><?php echo $d_rg; ?></p>
                <label class="tx-10 tx-uppercase tx-mont tx-semibold tx-spacing-1 mg-b-2">DATA NASC</label>
                <p class="tx-white mg-b-25"><?php echo date('d/m/Y ', strtotime($d_data)); ?></p>
              </div><!-- card -->
              <!-- card -->
            </div><!-- col-lg-4 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
        <div class="tab-pane fade" id="photos">
          <div class="row">
            <div class="col-lg-8">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Redefinir Senha</h6>
                   <form action="" id="form-cadastrar">
                   <div class="d-md-flex pd-y-20 pd-md-y-0">      
              <input type="password" name="atual" class="form-control form-control-dark" placeholder="Senha atual">
              <input type="password" name="senha" class="form-control form-control-dark mg-md-l-10 mg-t-10 mg-md-t-0" placeholder="Nova senha">
              <input type="submit" class="br-menu-link active pd-y-13 pd-x-20 bd-0 mg-md-l-10 mg-t-10 mg-md-t-0 tx-uppercase tx-11 tx-spacing-2"value="Redefinir">
            </div>
       <?php echo "<input type='password' name='id_senha' class='form-control form-control-dark' placeholder='Senha atual' value=".$id." style='display: none'>"; ?>
           </form>
              </div><!-- card -->
            </div><!-- col-lg-8 -->
            <div class="col-lg-4 mg-t-30 mg-lg-t-0">
              <div class="card pd-20 pd-xs-30 bd-gray-400 mg-t-30">
                <h6 class="tx-white tx-uppercase tx-14 mg-b-30">Foto perfil atual</h6>
                <div class="row row-xs mg-b-15">
                  <div class="col"><?php echo "<img src='update/".$perfil."' class='wd-150 ht-100 img-fluid rounded-circle' alt=''>"; ?></div>
                  <div class="col">
                    <!-- overlay -->
                  </div>
                </div><!-- row -->
               <!-- d-flex -->
               <div class="custom-file">
                <input type="file" class="custom-file-input" id="perfil" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
                <a href="editar-perfil.php" class="d-block mg-t-20"><i class="fa fa-angle-down mg-r-5"></i>Atualizar</a>
              </div><!-- card -->
            </div><!-- col-lg-4 -->
          </div><!-- row -->
        </div><!-- tab-pane -->
      </div><!-- br-pagebody -->
    </div>
 <?php   include 'padrao/footer.php'; ?>
 <script src="js/configurar.js" type="text/javascript"></script>