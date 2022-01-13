<div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label">Menu</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="painel.php" class="br-menu-link ">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Home</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <!-- <li class="br-menu-item">
          <a href="mailbox.html" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Data e Hora</span>
          </a>
        </li> --><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Vendas</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="card-dashboard.html" class="sub-link">Faturamentos</a></li>
            <li class="sub-item"><a href="card-social.html" class="sub-link">Equipamentos</a></li>
            <li class="sub-item"><a href="card-listing.html" class="sub-link">Peças</a></li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Atendimentos</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="remoto.php" class="sub-link">Acesso Remoto</a></li>
            <li class="sub-item"><a href="chamado.php" class="sub-link">Clientes Atendidos</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Cadastro</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="cliente.php" class="sub-link">Clientes</a></li>
            <li class="sub-item"><a href="fornecedor.php" class="sub-link">Fornecedores</a></li>
            <li class="sub-item"><a href="funcionario.php" class="sub-link">Funcionario</a></li>
            <li class="sub-item"><a href="equipamento.php" class="sub-link">Equipamentos</a></li>
            <li class="sub-item"><a href="produtos.php" class="sub-link">Peças</a></li>
            <li class="sub-item"><a href="sistemas.php" class="sub-link">Sistemas</a></li>
            <li class="sub-item"><a href="servico.php" class="sub-link">Serviços</a></li>
          </ul>
        </li><!-- br-menu-item -->
         <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Ordem de Serviço</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="OsBusca.php" class="sub-link">Abrir O.S</a></li>
            <li class="sub-item"><a href="border.html" class="sub-link">Alterar O.S</a></li>
            <li class="sub-item"><a href="height.html" class="sub-link">Encerrar O.S</a></li>
            <li class="sub-item"><a href="margin.html" class="sub-link">Localizar O.S</a></li>
            <li class="sub-item"><a href="padding.html" class="sub-link">Orçamento</a></li>
            <li class="sub-item"><a href="position.html" class="sub-link">Relatorio de O.S</a></li>
          </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-briefcase-outline tx-22"></i>
            <span class="menu-item-label">Relatórios</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="background.html" class="sub-link">Chamados</a></li>
            <li class="sub-item"><a href="border.html" class="sub-link">Clientes</a></li>
            <li class="sub-item"><a href="height.html" class="sub-link">Contratos</a></li>
            <li class="sub-item"><a href="margin.html" class="sub-link">Fornecedores</a></li>
            <li class="sub-item"><a href="padding.html" class="sub-link">Peças</a></li>
            <li class="sub-item"><a href="position.html" class="sub-link">Atendimentos a Cobrar</a></li>
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->
      <div class="info-list">
        <div class="info-list-item">
          <div>
            <p class="info-list-label">Clientes em Atendimento</p>
           <?php 

             require 'conf/pdo.php';

             $cliente = $pdo->query("select * from acesso where nivel like '1'");

              echo "<h5 class='info-list-amount'>".$cliente->rowCount()."</h5>";

             ?>
            
          </div>
      
          </div><!-- info-list-item -->
      <div class="info-list-item">
          <div>
            <p class="info-list-label">Clientes Atendidos</p>
            <?php 

             require 'conf/pdo.php';

             $cliente = $pdo->query("select * from acesso where nivel like '2'");

              echo "<h5 class='info-list-amount'>".$cliente->rowCount()."</h5>";

             ?>
            
          </div>
        </div><!-- info-list-item -->
<!-- info-list-item -->

      </div><!-- info-list -->
      <br>
    </div>
 <div  id="bar-msg">
  <div class="carrd d-none">
    <div class="header">  
      <h4><span class="square-10 bg-success"></span> Bruno
       <button class="close"><i class="fa fa-window-close tx-12" aria-hidden="true"></i></button>
       <button class="min"><i class="fa fa-window-minimize tx-12" aria-hidden="true"></i></button>
       <button class="true d-none "><i class="fa fa-window-maximize tx-12"aria-hidden="true"></i></button>
     </h4><p></p>
     <a class="de_id" href=""></a>
     <a class="para_id" href=""></a>
    </div>
    <div class="body ">
       <div class="recebida">
        <p> oi como vai  </p>
       </div>
       <div class="enviada">
        <p>Tranquilo ai </p>
       </div>
       <div class="recebida">
        <p>
          


        </p>

       </div>
       <div class="enviada">
        <p>Tranquilo ai </p>
       </div>
    </div>
    <div class="smood d-none">
      <button type="button" class="btn btn-sm">😁</button>
      <button type="button" class="btn btn-sm">😂</button>
      <button type="button" class="btn btn-sm">😃</button>
      <button type="button" class="btn btn-sm">😄</button>
      <button type="button" class="btn btn-sm">😅</button>
      <button type="button" class="btn btn-sm">😆</button>
      <button type="button" class="btn btn-sm">😉</button>
      <button type="button" class="btn btn-sm">😊</button>
      <button type="button" class="btn btn-sm">😋</button>
      <button type="button" class="btn btn-sm">😌</button>
     </div>
    <div class="footer ">
      <textarea class="form-control" name="" id="" cols="30" rows="3">
      </textarea>
      <ul>
        <li><a alt="smood" class="false" href="#">😁</a></li>
        <li><a style="display: none" alt="smood" class="tre" href="#">😁</a></li>
        <li><a  href="#" data-toggle='modal' data-target="#anexo"><i class="icon ion-images tx-20"></i></a></li>
      </ul>
    </div>
  </div>
 </div>

 <!-- MODAL PARA EXIBIR A IMAGEM DO CHAT -->

   <div id="img_chat" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <div class="container-fluid">
                   <div class="row">
                     
                   <img style="width: 100%;" src="img/banners/logo.png">
                   </div>
                    
                  </div>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
 
            </div><!-- modal -->   



