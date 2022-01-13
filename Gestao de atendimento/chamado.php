
  <?php 
  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';
  $hide = '';
   ?>
    <div class='br-mainpanel'>
    

      <div class="container pesquizzar">
        <div class="row  linha_busca_simples">

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mg-t-20 busca_rapida">

            <div class="container-flui titulo_busca_simples">
              <div class="br-pagetitle">
                <i class="fa fa-search tx-60 lh-2" aria-hidden="true"  style="color: #17A2B8"></i>
                <div>
                   <h2  style="color: #fff">Pesquisa de chamados</h2>
                </div>
               
              </div>
              
              
              <div class="row " style="float: right;">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                   <input type="text" placeholder="Pesquisar Rapida" alt="listagem" class="form-control ml-auto">
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 " style="width: auto;padding: 0px;">
                   <a href="" class="br-menu-link " onclick="addItem('f12')" id="btn_busca_avancada" >Pesquisa Avançada</a>
                </div>
              </div>
              
            </div>
       
           
          </div>
            
            <!-- Barra busca avancada -->
      
         </div>
             <div class="br-pagetitle titulo_busca_avancada" style="display: none">
                <i class="fa fa-search tx-60 lh-2" aria-hidden="true"  style="color: #17A2B8"></i>
                <div>
                   <h2  style="color: #fff; width: auto">Pesquisa Avançada </h2><h4>de chamados</h4>
                </div>
               
              </div>
         <div class="container-fluid minimizar_avancada" style="display: none;float: right;">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <a href="#" class="br-menu-link" id="minimizar_avancada" style="float: right;width: auto">Pesquisa Rápida</a>
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_razao" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_cnpj" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_tec" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_sit" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_periodo" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
              <a href="#"  type="submit" class="br-menu-link active" id="btn_aplicar_avancada_per_raz" style="width: auto;float: right;margin-right:2%; display: none;">Aplicar</a> 
             
            </div>
          </div>

         </div>
         
      

      
       </div>
       <div class="container-fluid">
        
       <div class="row m-3" style="border: solid #1a2432 2px; width: auto; margin:2px">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-1 busca_avancada" style="display: none">

            <div class="container-fluid ">
              <div class="row">
                  <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"style="float: left;">
                              <div class="form-check  w-auto">
                              <input class="form-check-input" type="radio" name="1" id="Radio_razao" value="option2">
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_razao" >
                                Razão
                               </label>
                              </div>
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="2" id="Radio_CNPJ" value="option2">
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_CNPJ">
                                CNPJ
                               </label>
                              </div>
                              <div class="form-check">
                               <input class="form-check-input" type="radio" name="3" id="Radio_tecnico" value="option3" >
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_tecnico">
                               Técnico
                              </label>
                              </div>
                               
                             
                  </div>
                 <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 "style="float: left; ">
                              
                              <div class="form-check" style="display: none">
                               <input class="form-check-input" type="radio" name="4" id="Radio_Situacao" value="option4" >
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_Situacao">
                               Situacao
                              </label>
                              </div>
                                <div class="form-check">
                               <input class="form-check-input" type="radio" name="5" id="Radio_Periodo" value="option5" >
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_Periodo">
                               Período
                              </label>
                              </div> <div class="form-check">
                               <input class="form-check-input" type="radio" name="6" id="Radio_Per_Raz" value="option5" >
                              <label class="form-check-label  br-menu-link w-auto h-auto p-0" for="Radio_Per_Raz">
                             Razao e Período
                              </label>
                              </div>
                  </div>
               <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3 busca_avancada2"style="float: left; display: none;">
                 
                 <div class="row">
                   <input type="text" placeholder="Razão Social" id="busc_avan_razao" name="busc_avan_razao" alt="listagem" class="form-control"  style="margin-left: 20px; display: none">  
                    <input type="text" placeholder="CNPJ / CPF" alt="listagem" name="busc_avan_cnpj" class="form-control"  style="margin: 9px;width: 40% ;float: left; display: none;"  id="busc_avan_cnpj">
                    
                      <select class="custom-select" id="busc_avan_tecnico" name="busc_avan_tecnico" style="width: 40%;margin:9px;display: none;">
                        <option value=""></option>
                       <?php
                          require 'conf/pdo.php';
                            $usuario = $pdo->query("SELECT * FROM usuario inner join hepdesk on hepdesk.conta_fk like usuario.id");
                            while ($user = $usuario->fetch()) {
                             echo "<option value='".$user['usuario']."'>".$user['usuario']."</option>";
                              }
                            ?>
                     </select>
                   
                       <div class="row ml-auto mt-2" id="busc_avan_data" style="display: none; margin:0px; padding: 0px;">
                          <label style="margin-left: 0px; float: left;">Período</label>
                           <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-left: 0px">
                            <input type="date" name="busc_avan_data1" >  
                           </div>
                           <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1 m-2" >
                           <label>até</label>
                           </div>
                   
                           <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5" >
                         <input type="date" name="busc_avan_data2">  
                       </div>
                     </div>

                    <select class="custom-select ml-2" id="busc_avan_nivel" name="busc_avan_nivel"style="width: auto;margin-top:9px;;margin-right: 2px; display: none"> 
                       <option value="Aberto">Aberto</option>
                       <option value="Fechado">Fechado</option>
                       <option value="Pendente">Pendente</option>
                   </select>

                  </div>
        
                </div>

              </div>
              
            </div>
            <div class="container-fluid " style="display: none;">
              <div class="row " >
                
                
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" >
                  <div class="row" style="margin-left: 20px" >

                  
                     
                  </div>
                  
                </div>
              </div>
        </div>
      </div>
        
      </div>
    </div>
  <div class="br-pagebody ">
        <div class="row row-sm mg-b-20 d-none">
        </div>
        <!-- TAbela modo pesquisa rapida -->
         <div class="bd bd-white-1 rounded table-responsive"  id="tabela_rapida">
          <table class="table table-bordered mg-b-0 listagem">
              <thead class="bg-black-5">
                <tr>
                  <th>Data</th>
                  <th>Cliente</th>
                  <th>Técnico</th>
                  <th>Aberto</th>
                  <th>Ocorrência</th>
                  <th>Protocolo</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
              <?php 

                $list = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo
                   FROM acesso inner join usuario on acesso.fk_tecnico = usuario.id");

                  while($attq = $list->fetch()){

                    $nivel = $attq['status'];
                    $star = "";

                    if($nivel == 2){

                    $star = "Finalizado";

                    }
                    if($nivel == 1){

                      $star = "Aberto";
                    }
                     if(empty($attq['razao'])){

                      $nome = $attq['cliente'];

                     }else{


                        $nome = $attq['razao'];

                     }



                  echo "
                  <tr>
                  <td>".$attq['hors_inicial']." ".$attq['data']."</td>
                  <td>".$nome."</td>
                   <td>".$attq['tecnico']."</td>
                   <td>".$attq['aberto']."</td>
                   <td>".$attq['descri']."</td>
                   <td>".$attq['protocolo']."</td>
                   <td><a href='".$attq['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>

                  ";     




                  }

                                       


                 ?>
              </tbody>
            </table>
          </div>
          <!-- Tabela modo busca avancada -->
          <div class="bd bd-white-1 rounded table-responsive"  id="tabela_avan" style="display: none" >
          <table class="table table-bordered mg-b-0 listagem">
              <thead class="bg-black-5">
                <tr>
                   <th>Data</th>
                  <th>Cliente</th>
                  <th>Técnico</th>
                  <th>Aberto</th>
                  <th>Ocorrência</th>
                  <th>CNPJ/CPF</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
              <?php 

                $list = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico = usuario.id inner join cliente on cliente.razao = acesso.razao");

                  while($attq = $list->fetch()){

                    $nivel = $attq['status'];
                    $star = "";

                    if($nivel == 2){

                    $star = "Finalizado";

                    }
                    if($nivel == 1){

                      $star = "Aberto";
                    }
                     if(empty($attq['razao'])){

                      $nome = $attq['cliente'];

                     }else{


                        $nome = $attq['razao'];

                     }



                  echo "
                 <tr>
                  <td>".$attq['hors_inicial']." ".$attq['data']."</td>
                  <td>".$nome."</td>
                   <td>".$attq['tecnico']."</td>
                   <td>".$attq['aberto']."</td>
                   <td>".$attq['descri']."</td>
                   <td>".$attq['cnpj_cpf']."</td>
                   <td><a href='".$attq['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";     




                  }

                                       


                 ?>
              </tbody>
            </table>
          </div>

          <!-- Novos clientes -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          </div><!-- col-4 -->
        </div><!-- row --> 
         <?php   include 'padrao/footer.php'; ?>         
      </div>
       <!-- LARGE MODAL -->
       
       
       <!-- Chamado  -->
        <div id="chamado_atendido" class="modal fade ">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm" style="background-color: #1a2432">
                <div class="modal-header ">
                  <div class="container-fluid p-0">
                   
                  <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 titulo">
                       Protocolo:<p name="protocolo"class="tx-uppercase  tx-bold" style="color: white">0201201906</p>
                    </div>

                    <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2 status">
                       <label>Status</label><h6 style="color: white">Finalizado</h6>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 data_abertura">
                       <label>Data de Abertura/Hora:</label><h6 style="color: white"> 15/05/2019 - 13:30</h6>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 h_encerramento">
                       <label>Hora do encerramento:</label><h6 style="color: white; text-align: center">15:30</h6>
                    </div>
                  </div>
                  </div>
                 
                  <h5 class="d-none"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <strong  style="color: white">Cliente:</strong> <h4 class="cliente_chamado">MR Bernard</h4> 
                  <hr>
               
                  <strong style="color: white">Aberto por:</strong> <h4 class="aberto_por_chamado">Nora</h4>
                   <hr>
                 <strong style="color: white">Solicitado:</strong> <h4 class="Solicitado_chamado">felipe</h4> 
                  <hr>
                  <strong style="color: white"> Técnico:</strong> <h4 class="tecnico_chamado">Fabiano</h4>
                  <hr>
                  <strong style="color: white">Ocorrência:</strong> <h4 class="Ocorrencia_chamado">Caixa 2 travando foi reiniciado o serviço</h4>
                  <hr>
                  <strong style="color: white">Laudo:</strong> <h4 class="laudo_chamado">Serviço do Windows parado</h4>
                  <hr>
                  
                
                </div>
          </div><!-- modal-body -->
          <div class="modal-footer">
          </div>
         </div>
       </div><!-- modal-dialog -->
       <!-- Editando e transferindo -->
        <div id="chamado_atendente" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Protocolo: 0201201906 <br> Aberto por: 12Nora
                  <br> Data de Abertura: 15/05/2019, 13:30hrs
                  </h6>
                  <h5 class="d-none"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
              <div class="form-layout form-layout-1 ">
                <div class="row mg-b-25">
                  <div class="col-lg-12">
                 <div class="form-group">
                  <label class="form-control-label">Nome do cliente / Contato:</label>
                  <input id="cliente" name="cliente" class=" form-control " type="text" placeholder="" value="">
                  <div id="acesso-resul" style="list-style: none"></div>
                 </div>
               </div>
                <fieldset style="width: 100%">
                <div class="col-lg-7">
                 <div class="form-group">
                  <label class="form-control-label">Fones:</label>
                  <input name="fones" class=" form-control " type="text" placeholder="">
                  <input name="id" class=" form-control d-none" type="text" placeholder="">

                 </div>
               </div>
                <div class="col-lg-7">
                 <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input name="email" class=" form-control " type="text" placeholder="">
                 </div>
               </div>
                <div class="col-lg-12">
                 <div class="form-group">
                  <label class="form-control-label">Endereço:</label>
                  <input name="endereco" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
                </fieldset>
                <div class="col-lg-12">
                 <div class="form-group">
                   <div class="aberto d-none"><?php echo $login; ?></div>
                  <label class="form-control-label">Ocorrência:</label>
                  <textarea style="background: black; color: green;" class="form-control text-uppercase" name="ocorrencia" id=""  cols="30" rows="5"></textarea>
                  </div>
                 </div>
            
               </div>  
               </div>
             <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Editar</button>
          <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Excluir</button>
            <button type="button" data-toggle='modal' data-target="#transferir_tecnico"  class="border-0 br-menu-link active float-right mg-l-5">Transferir</button>
            </div><!-- row -->
          </div>
          </div><!-- modal-body -->
         </div>
        <!-- transferir o tecnico pela atendente  -->
        <div id="transferir_tecnico" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Trnasferencia de Chamado</h6>
                  <h5 class="d-none"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row mg-b-25">
                  <div class="col-lg-3">
                    <div class="from-group">
                      <label class="form-control-label">Tecnico</label>
                      <select name="tecnico" class="form-control para">
                        <?php 
                          // conexão 
                          require 'conf/pdo.php';
                          // function 
                          $helpdesk = $pdo->query("SELECT usuario.usuario as conta,  hepdesk.id as id, usuario.id as conta_id  FROM hepdesk inner join usuario on  usuario.id = hepdesk.conta_fk && hepdesk.status > 0");
                          
                          while($help = $helpdesk->fetch()){

                            echo "<option value='".$help['conta_id']."'>".$help['conta']."</option>";

                          } 

                         ?>
                      </select> 
                    </div>
                  </div>
                   <div class="col-lg-6">
                    <div class="from-group">
                      <label class="form-control-label">Motivo</label>
                      <input type="text" class="form-control" name="motivo">

                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="from-group">
                      <button class="br-menu-link active border-0 mg-t-20">Transferir</button>
                    </div>
                  </div>
                 </div> 
                </div>               
             </div>
          </div><!-- modal-body -->
         </div>
         <!-- transferir já em atendimento --->
         <!-- clientes atendidos  -->
          <div id="lista_atendidos" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Clientes em Atendimento</h6>
                  <h5 class="d-none"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body " style="height: 300px; overflow: auto">
                  <div class="row mg-b-25">
                    <table class="table ">
                    <thead>
                        <tr>
                          <th>Protocolo</th>
                          <th>Cliente</th>
                          <th>Técnico</th>
                          <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                      <div>
                         <?php 

                          $registro = $pdo->query("SELECT 
                            acesso.id as id ,
                            usuario.id as tecnico_id,
                             usuario.usuario as tecnico,
                              acesso.n_chamado as protocolo,
                              acesso.nome_contato as cliente
                               FROM acesso inner join usuario on acesso.fk_tecnico = usuario.id && acesso.nivel = 1 && usuario.id like '$id'"); 

                          while($while = $registro->fetch()){

                            echo "
                        <tr>    
                       <td>".$while['protocolo']."</td>
                        <td>".$while['cliente']."</td>
                        <td>".$while['tecnico']."</td>
                        <td><a data-toggle='modal' data-target='#chamado_atend' alt='".$while['tecnico_id']."'  href='".$while['id']."' class=''>ver</a></td>
                      </tr>";
                          }


                          ?>
                        
                    </div>
                    </tbody>
                    </table>
                 </div> 
                </div>               
             </div>
          </div><!-- modal-body -->
         </div>

         <!-- em atendimentos -->
         <div id="chamado_atend" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">
                   Protocolo: 01010110 | Data :12/06/2019 | Hora_abertura :15:00hrs  <br>
                   Tecnico : Bruno | Aberto: nora
                  </h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body ">
                  <div class="row mg-b-25">
                   
                <div class="col-lg-4">
                    <div class="form-group">
                  <label class="form-control-label">Nome do cliente / Contato:</label>
                  <input id="cliente" name="cliente" class=" form-control " type="text" placeholder="" value="">
                  <div id="acesso-resul" style="list-style: none"></div>
                 </div>
               </div>
               
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Fones:</label>
                  <input name="fones" class=" form-control " type="text" placeholder="">
                  <input name="id" class=" form-control d-none" type="text" placeholder="">

                 </div>
               </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input name="email" class=" form-control " type="text" placeholder="">
                 </div>
               </div>
                <div class="col-lg-10">
                 <div class="form-group">
                  <label class="form-control-label">Endereço:</label>
                  <input name="endereco" class=" form-control " type="text" placeholder="" value="">
                  <input name="id" class=" form-control d-none" type="text" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-11">
                 <div class="form-group">
                  <label class="form-control-label">Ocorrência:</label>
                   <textarea style="background: black; height: 150px; color:green" class="form-control "></textarea>
                  </div>
               </div>

               <div class="col-lg-8">
                    <div class="from-group">
                      <label class="form-control-label float-left mg-r-5">Transferir para </label>
                      <select name="novo" id="tecnovo" class="form-control para wd-100 float-left">
                        <?php 
                          // conexão 
                          require 'conf/pdo.php';
                          // function 
                          $helpdesk = $pdo->query("SELECT usuario.usuario as conta,  hepdesk.id as id, usuario.id as conta_id  FROM hepdesk inner join usuario on  usuario.id = hepdesk.conta_fk && hepdesk.status > 0 && usuario.id != '$id'");
                          
                          while($help = $helpdesk->fetch()){

                            echo "<option value='".$help['conta_id']."'>".$help['conta']."</option>";

                          } 

                         ?>
                      </select>
                       <button data-toggle='modal' data-target='#trans_tecnico' class=" float-left br-menu-link active border-0 mg-l-5 ">Transferir</button> 
                    </div>
                  </div>
                 </div>  
                </div>               
             </div>
          </div><!-- modal-body -->
         </div>
       </div><!-- modal-dialog -->
    </div><!-- modal -->
      <div id="return" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20">Numero do Atendimento <br> 123456789</h4>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

 <script src="js/acesso.js"></script>
