<?php 


 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");
  

   /* clientes  status */


     $buscar_totais = mysqli_query($sql,"SELECT * FROM Cliente");
      
      $cliente_total =  mysqli_num_rows($buscar_totais);

       $buscar_cliente_bloqueado = mysqli_query($sql,"SELECT * FROM cliente where status = 20");
      $cliente_bloqueados= mysqli_num_rows($buscar_cliente_bloqueado);
       
       $buscar_cliente_ativo = mysqli_query($sql,"SELECT * FROM cliente where status = 1 ");
       $buscar_cliente_inadiplente = mysqli_query($sql,"SELECT * FROM cliente where status = 3 ");
      
      $cliente_inadiplente = mysqli_num_rows($buscar_cliente_inadiplente);
      $cliente_ativos= mysqli_num_rows($buscar_cliente_ativo);
      
       $buscar_cliente_cancelado = mysqli_query($sql,"SELECT * FROM cliente where status = 2");

      $cliente_cancelado = mysqli_num_rows($buscar_cliente_cancelado);

      $nome = "nome";


      /*  sistemas numero */


      $sistema  = mysqli_query($sql,"SELECT * FROM sistema");

      $contar_sis = mysqli_num_rows($sistema);

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
        <i class="icon ion-ios-home-outline tx-70 lh-0"></i>
        <div>
          <h4>Home</h4>
          <p class="mg-b-0">Gerenciando sua empresa de uma maneira inteligente</p>
        </div>
      </div>
  <div class="br-pagebody">
        <div class="row row-sm mg-b-20">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-info rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-12 tx-spacing-1 tx-mont tx-semibold  tx-white-8 mg-b-10">Clientes</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1"><?php echo $cliente_total; ?></p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch1" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="bg-purple rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-12 tx-spacing-1 tx-mont tx-semibold  tx-white-8 mg-b-10">OS Em Andamento</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">20</p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch3" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-12 tx-spacing-1 tx-mont tx-semibold  tx-white-8 mg-b-10">OS Finalizadas</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">1231</p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch2" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="bg-primary rounded overflow-hidden">
              <div class="pd-x-20 pd-t-20 d-flex align-items-center">
                <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-12 tx-spacing-1 tx-mont tx-semibold  tx-white-8 mg-b-10">Sistemas</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1"><?php echo $contar_sis; ?></p>
                  <span class="tx-11 tx-roboto tx-white-8"></span>
                </div>
              </div>
              <div id="ch4" class="ht-50 tr-y-1"></div>
            </div>
          </div><!-- col-3 -->
        </div><!-- row -->
        <div class="row row-sm mg-t-20">
          <div class="col-lg-8">
            <div class="card">
              <div class="d-md-flex justify-content-between pd-25">
                <div>
                  <h6 class="tx-14 tx-white tx-spacing-1">Estatisticas de Satisfação</h6>
                  <p>2019</p>
                </div>
                <div class="d-sm-flex">
                  <div>
                    <p class="mg-b-5  tx-13 tx-mont tx-semibold">Bom</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0">97.32%</h4>
                    <span class="tx-12 tx-success tx-roboto">2.7%</span>
                  </div>
                  <div class="bd-sm-l bd-white-1-force pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Regular</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0">89.12%</h4>
                    <span class="tx-12 tx-danger tx-roboto">4.65% </span>
                  </div>
                  <div class="bd-sm-l bd-white-1-force pd-sm-l-20 mg-sm-l-20 mg-t-20 mg-sm-t-0">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Ruim</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0">01.12%</h4>
                    <span class="tx-12 tx-success tx-roboto">1.22% </span>
                  </div>
                </div><!-- d-flex -->
              </div><!-- d-flex -->
              <div class="pd-l-25 pd-r-15 pd-b-25">
                <div id="ch5" class="ht-250 ht-sm-300"></div>
              </div>
            </div><!-- card -->
            <div class="card bd-gray-400 pd-25 mg-t-20">
              <div class="d-md-flex justify-content-between align-items-center">
                <div>
                  <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">Localização dos Clientes</h6>
                  <p class="mg-b-0">Busca por Cidade</p>
                </div>
                <div class="wd-200 mg-t-20 mg-md-t-0">
                  <select class="form-control select2" data-placeholder="Choose location">
                    <option label="Choose one"></option>
                    <option value="1" selected>Rio de Janeiro</option>
                    <option value="2">Duque de Caxias</option>
                    <option value="3">Nova Iguaçu</option>
                    <option value="4">Niteroi</option>
                    <option value="5">Belford Roxo</option>
                  </select>
                </div><!-- wd-200 -->
              </div><!-- d-flex -->
              <div id="mapShiftWorker" class="ht-300 ht-sm-400 mg-t-25"></div>
              <div class="row row-xs mg-t-25">
                <div class="col-sm-4">
                  <div class="tx-center pd-y-15 bd bd-white-1">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Clientes Cancelados</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0"><?php echo $cliente_cancelado; ?></h4>
                    <span class="tx-12 tx-danger tx-roboto">Excluidos</span>
                  </div>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                  <div class="tx-center pd-y-15 bd bd-white-1">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Clientes Bloqueados</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0"><?php echo $cliente_bloqueados;  ?></h4>
                    <span class="tx-12 tx-danger tx-roboto">falta de pagamento</span>
                  </div>
                </div><!-- col-4 -->
                <div class="col-sm-4 mg-t-20 mg-sm-t-0">
                  <div class="tx-center pd-y-15 bd bd-white-1">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold">Clientes ativos</p>
                    <h4 class="tx-lato tx-white tx-bold mg-b-0">
                      <?php
                     $soma_cliente =  $cliente_inadiplente + $cliente_ativos; 

                       echo $soma_cliente;
                     ?></h4>
                    <span class="tx-12 tx-success tx-roboto">Em dia</span>
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->
            </div><!-- card -->
          </div><!-- col-8 -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="card bd-gray-400 overflow-hidden">
              <div class="pd-x-25 pd-t-25">
                <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1 mg-b-20">Sistemas</h6>
                <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0">Instalados</p>
                <h1 class="tx-56 tx-light tx-white mg-b-0">750<span class="tx-teal tx-24"></span></h1>
                <p><span class="tx-primary">Meta</span>1.000</p>
              </div><!-- pd-x-25 -->
              <div id="ch6" class="ht-115 mg-r--1"></div>
              <div class="bg-teal pd-x-25 pd-b-25 d-flex justify-content-between">
                <div class="tx-center">
                  <h3 class="tx-lato tx-white mg-b-5">150<span class="tx-light op-8 tx-20"></span></h3>
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0 tx-white-8">Hiper</p>
                </div>
                <div class="tx-center">
                  <h3 class="tx-lato tx-white mg-b-5">150<span class="tx-light op-8 tx-20"></span></h3>
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0 tx-white-8">Colibri</p>
                </div>
                <div class="tx-center">
                  <h3 class="tx-lato tx-white mg-b-5">250<span class="tx-light op-8 tx-20"></span></h3>
                  <p class="tx-10 tx-spacing-1 tx-mont tx-semibold tx-uppercase mg-b-0 tx-white-8">FDC sistemas</p>
                </div>
              </div>
            </div><!-- card --><!-- card -->
            <div class="card bd-0 mg-t-20">
              <div id="carousel12" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel12" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel12" data-slide-to="1"></li>
                  <li data-target="#carousel12" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="bg-br-primary pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-20 r-20">
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Mantenha Calma </p>
                        <h5 class="lh-5 mg-b-20">Gerencie da melhor forma o seu Tempo</h5>         
                     </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-info pd-30 ht-300 pos-relative d-flex align-items-center rounded">
                      <div class="pos-absolute t-20 r-20">
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Respeite Seus Limites </p>
                        <h5 class="lh-5 mg-b-20">Estar com duvida pessa ajuda</h5>
                      </div>
                    </div><!-- d-flex -->
                  </div>
                  <div class="carousel-item">
                    <div class="bg-purple pd-30 ht-300 d-flex pos-relative align-items-center rounded">
                      <div class="pos-absolute t-20 r-20">
                      </div>
                      <div class="tx-white">
                        <p class="tx-uppercase tx-11 tx-semibold tx-mont tx-spacing-2 tx-white-5">Alcance seus objetivos</p>
                        <h5 class="lh-5 mg-b-20">Trabalhe com metas durante o seu dia </h5>   
                      </div>
                    </div><!-- d-flex -->
                  </div>
                </div><!-- carousel-inner -->
              </div><!-- carousel -->
            </div><!-- card -->
            <div class="card bg-danger bd-0 mg-t-20">
              <div class="pd-x-25 pd-t-25">
                <h6 class="tx-13 tx-uppercase tx-white tx-medium tx-spacing-1 mg-b-10">Estatisticas de acesso</h6>
                <p class="mg-b-20 tx-white-6">Ultimos  30  dias, 2019</p>
                <div class="row row-sm mg-t-20">
                  <div class="col">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold tx-white-6">Resolvidos</p>
                    <h4 class="tx-lato tx-white tx-bold tx-normal mg-b-0">23.32%</h4>
                    <span class="tx-12 tx-white-6 tx-roboto">2.7% completos</span>
                  </div><!-- col -->
                  <div class="col">
                    <p class="mg-b-5 tx-uppercase tx-10 tx-mont tx-semibold tx-white-6">aguardando</p>
                    <h4 class="tx-lato tx-white tx-normal mg-b-0">42.58%</h4>
                    <span class="tx-12 tx-white-6 tx-roboto">1.5% Em Andamento</span>
                  </div><!-- col -->
                </div><!-- row -->
                <div id="ch13" class="ht-160"></div>
              </div><!-- pd-x-25 -->
            </div><!-- card -->
          </div><!-- col-4 -->
        </div><!-- row -->          
      </div>
 <?php   include 'padrao/footer.php'; ?>