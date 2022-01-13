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
    

       <?php 
           
           $deskb = mysqli_query($sql,"SELECT * FROM hepdesk where conta_fk = '$id'")or die(mysqli_error());

           $deskarr = mysqli_fetch_array($deskb);

            $desk_star = $deskarr['status'];

            if($desk_star == 0){

                if($cargoid == 1){

                $hide=@'d-none';
                $show=@'d-block';

                }else{
                 $hide="";
                }
             echo " <div class='br-pagetitle  cadastro_titulo '>
        <i style='color:#17A2B8' class='fa fa-user-circle tx-70 lh-10 '></i>
        <div>
          <h4>Acesso Remoto</h4>
          <a href='".$id."' class='ativacao ".$hide."'>Offline</a>
        </div>
      </div>";    


            }


            if($desk_star >= 1){

              $hepdesk = mysqli_query($sql,"SELECT * FROM hepdesk where conta_fk = '$id'");

              $array_desk = mysqli_fetch_array($hepdesk);

              $time = $array_desk['status'];
              $acess = "";
             

                    if($time == 1){

                     $status_time = "Livre";
                     $color_time = "text-success";
                     $acess = "  
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";

                    }
                    if($time == 2){

                     $status_time = "Medio";
                     $color_time = "text-primary";
                      $acess = "
                        <option  value='5'>Fácil</option>
                        <option  value='2'>Medio</option>
                        <option  value='3'>critico</option>
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";
                    

                    }
                    if($time == 3){

                     $status_time = "Critico";
                     $color_time = "text-danger";
                      $acess = "
                        <option  value='5'>Fácil</option>
                        <option  value='2'>Medio</option>
                        <option  value='3'>critico</option>
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";

                    }
                    if($time == 4){

                     $status_time = "Almoço ";
                     $color_time = "text-info";
                      $acess = "
                        <option  value='1'>Livre</option>
                        <option  value='5'>Fácil</option>
                        <option  value='2'>Médio</option>
                        <option  value='3'>critico</option>
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";

                    }
                    if($time == 5){

                     $status_time = "Fácil ";
                     $color_time = "text-warning";
                      $acess = "
                        <option  value='5'>Fácil</option>
                        <option  value='2'>Medio</option>
                        <option  value='3'>critico</option>
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";

                    }
                    if($time == 6){

                     $status_time = "Ausente";
                     $color_time = "text-info";
                       $acess = "
                        <option  value='1'>Livre</option>
                        <option  value='5'>Fácil</option>
                        <option  value='2'>Medio</option>
                        <option  value='3'>critico</option>
                        <option value='4'>Almoço</option>
                        <option value='6'>Ausente</option>

                     ";

                    }

             

              echo "
        <div style='float:right; margin: 30px 90px -30px 0'>
          <h4 style='' class='".$color_time."'>".$login." ".$status_time."</h4>
          <a href='' class='alt_status br-menu-link wd-60'>Status</a>
          <select class='form-control nivel d-none' name='' id=''>
            ".$acess."
          </select>
        </div>
        <div class='br-pagetitle  cadastro_titulo'>
         <h3>ACESSO</h3>
      </div>
     <div style='margin: 5px auto; max-height:360px; overflow:auto;' class=' card col-md-10 border-0   mg-left-15'>
          <h5 class='text-center'>Acesando</h5>
          <table class='table bd bd-white-1 rounded '>
             <thead>
               <tr>
                 <th>Protocolo</th>
                 <th>Razão Social</th>
                 <th>Telefones</th>
                 <th>Ocorrencia</th>
                 <th>Status</th>
                 <th>Ações</th>
               </tr>
             </thead>
             <tbody>
              "; 
              $acesso = mysqli_query($sql,"SELECT * FROM acesso where fk_tecnico = '$id' && nivel = '1'")or die(mysqli_error());

              $cont_acesso = mysqli_num_rows($acesso);


              while ($acessando = mysqli_fetch_array($acesso)) {
                

                 echo "

                 <tr>
                 <td>".$acessando['n_chamado']."</td>
                 <td>".$acessando['nome_contato']."</td>
                 <td>".$acessando['fone']."</td>
                 <td><textarea style='border:none; background:none; color:#868ba1;  overflow-Y: hidden; ' cols='30' rows='2'>".$acessando['ocorrencia']."</textarea>
                 <td>Acessando</td>
                 <td>
                  <a data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link active acets' alt='".$login."' href='".$acessando['id']."'>Editar</a>
                </td>
               </tr>

                 ";

              }

              
             echo "
             </tbody>
          </table>

        </div>
    ";
        
            }
            

        ?>
         <div class="col-12   nav-cadastro-clientes">
      <a href="" data-toggle="modal" data-target="#lista_atendidos" class="br-menu-link   float-right mg-r-15">Transferir chamado</a>
      <a href="" data-toggle="modal" data-target="#abrir_chamado" class="br-menu-link float-right mg-r-15">Abrir chamado</a>
      <a href="chamado.php"  class="br-menu-link float-right mg-r-15">Chamados</a>
      <a href="" id="cpaniel" class="br-menu-link   float-right mg-r-15">Painel de Acesso</a>
          </div>
  <div class="br-pagebody ">
        <div class="row row-sm mg-b-20 d-none">
        </div>
         <div class="bd bd-white-1 rounded table-responsive">
          <table class="table table-bordered mg-b-0 fila_atendimento">
            <h3 class="text-center">Fila de Atendimento</h3>
              <thead>
                <tr>
                  <th>Solicitado</th>
                  <th>Razão Social</th>
                  <th>Aberto por</th>
                  <th>Ocorrencia</th>
                  <th>Tempo</th>
                  <th>Ações</th>
                </tr>
              </thead>
                <div id="update">
              <tbody style="max-height: 100px; overflow: auto">
                
              </tbody>
                 </div> 
            </table>
          </div>

          <!-- Novos clientes -->
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
          </div><!-- col-4 -->
        </div><!-- row -->          
       <?php   include 'padrao/footer.php'; ?>
      </div> 
       <!-- LARGE MODAL -->
          <div  id="abrir_chamado" class="modal fade " >
            <div  class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div style="background-color:#1a2432" class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 text-white mg-b-0 tx-uppercase tx-inverse tx-bold">Abertura de chamado Interno</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
              <div class="form-layout form-layout-1 ">
                <div class="row mg-b-25">
                  <div class="col-lg-12">
                 <div class="form-group">
                  <label class="form-control-label">Razão Social:</label>
                  <input id="cliente" name="cliente" class=" form-control " type="text" placeholder="" value="">
                  <div id="acesso-resul" style="list-style: none"></div>
                 </div>
               </div>
               <div class="col-lg-4">
                  <div class="form-group">
                    <label>Solicitante:</label>
                    <input type="text" class="form-control" name="contato">
                  </div>
               </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Fones:</label>
                  <input name="fones" class=" form-control " type="text" placeholder="">
                 </div>
               </div>
                <div class="col-lg-4">
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
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Para:</label>
                  <select name="para" id="para" class=" form-control ">
                    <option value="1">Técnico</option>
                    <option value="2">Fila de Espera</option>
                  </select>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group tecnico_cha">
                  <label class="form-control-label">Tecnico:</label>
                   <select name="tecnico" id="" class=" form-control ">
                     <?php 
                      $tecnico_busca = mysqli_query($sql,"SELECT * FROM usuario  WHERE cargo =  '3' || cargo =  '2' order by usuario")or die(mysqli_error());
                      while($chamado_array = mysqli_fetch_array($tecnico_busca)){
                        echo "<option value='".$chamado_array['id']."'>".$chamado_array['usuario']."</option>";
                      }
                      ?>
                  </select>
               <div id="cliente-resul"></div>
                 </div>
               </div>
                <h6 class="tx-success contrato"></h6>
               <div class="col-lg-12">
                 <div class="form-group">
                   <div class="aberto d-none"><?php echo $login; ?></div>
                  <label class="form-control-label">Ocorrencia:</label>
                  <textarea  class="form-control text-uppercase" name="ocorrencia" id=""  cols="30" rows="5"></textarea>
                  </div>
                 </div>
               </div>
            </div><!-- row -->
          <button type="button" data-toggle="modal" data-target="#return" class="border-0 br-menu-link active float-right">Abrir Chamado</button>
          </div>
          </div><!-- modal-body -->
          <div class="modal-footer">
          </div>
         </div>
       </div><!-- modal-dialog -->
       <!-- CONTRATO E SOFFTWARE DO CLIENTE  -->

   

       <!-- chamados em andamento -->
        <div id="chamado-andamento" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Abertura de chamado Interno</h6>
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
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Para:</label>
                  <select name="para" id="para" class=" form-control ">
                    <option value="1">Tenico</option>
                    <option value="2">Fila de Espera</option>
                  </select>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="form-group tecnico_cha">
                  <label class="form-control-label">Tecnico:</label>
                   <select name="tecnico" id="" class=" form-control ">
                     <?php 
                      $tecnico_busca = mysqli_query($sql,"SELECT * FROM usuario  WHERE cargo =  '3' || cargo =  '2' order by usuario")or die(mysqli_error());
                      while($chamado_array = mysqli_fetch_array($tecnico_busca)){
                        echo "<option value='".$chamado_array['id']."'>".$chamado_array['usuario']."</option>";
                      }
                      ?>
                  </select>
               <div id="cliente-resul"></div>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="form-group">
                   <div class="aberto d-none"><?php echo $login; ?></div>
                  <label class="form-control-label">Ocorrencia:</label>
                  <textarea style="background: black; color: green;" class="form-control text-uppercase" name="ocorrencia" id=""  cols="30" rows="5"></textarea>
                  </div>
                 </div>
               </div>
            </div><!-- row -->
          <button type="button" data-toggle="modal" data-target="#return" class="border-0 br-menu-link active float-right">Abrir Chamado</button>
          </div>
          </div><!-- modal-body -->
          <div class="modal-footer">
          </div>
         </div>
       </div><!-- modal-dialog -->
       <!-- Chamado  -->
        <div id="chamado_atendido" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm" style="background: #1a2432">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-white tx-bold">Protocolo: 0201201906 <br> Aberto por: Nora
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
                  <div class="col-lg-6">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Razão Social:</label>
                  <input id="cliente" name="cliente" class=" form-control " type="text" placeholder="" value="">
                  <div id="acesso-resul" style="list-style: none"></div>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Solicitante:</label>
                  <input id="cliente" name="solicitado" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-6">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Fones:</label>
                  <input name="fones" class=" form-control " type="text" placeholder="">
                  <input name="id" class=" form-control d-none" type="text" placeholder="">

                 </div>
               </div>
                <div class="col-lg-6">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Email:</label>
                  <input name="email" class=" form-control " type="text" placeholder="">
                 </div>
               </div>
                <div class="col-lg-10 d-none">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Endereço:</label>
                  <input name="endereco" class=" form-control " type="text" placeholder="" value="">
                 </div>
                 </div>
                  <div class="col-lg-10 ">
                 <div class="form-group">
                  <label class="form-control-label tx-white">Ocorrencia:</label>
                  <input name="ocorrencia" class=" form-control " type="text" placeholder="" value="">
                 </div>
                 </div>
                <div class="col-lg-12">
                 <div class="form-group">
                   <div class="aberto d-none"><?php echo $login; ?></div>
                  <label class="form-control-label tx-white">Laudo / Serviços:</label>
                  <textarea  class="form-control text-uppercase" name="laudo" id=""  cols="30" rows="5"></textarea>
                  </div>
                 </div>
              
               </div>
            </div><!-- row -->
          <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Finalizar</button>
          <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Salvar</button>
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
                  <label class="form-control-label">Ocorrencia:</label>
                  <textarea  class="form-control text-uppercase" name="ocorrencia" id=""  cols="30" rows="5"></textarea>
                  </div>
                 </div>
            
               </div>  
               </div>
             <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Editar</button>
          <button type="button"  class="border-0 br-menu-link active float-right mg-l-5">Excluir</button>
            </div><!-- row -->
          </div>
          </div><!-- modal-body -->
         </div>
        <!-- transferir o tecnico pela atendente  -->
        <div id="transferir_tecnico" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div  class="modal-content tx-size-sm">
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
              <div style="background-color:#1a2432" class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14  mg-b-0 tx-uppercase tx-white tx-bold">Clientes em Atendimento</h6>
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
                          <th>Ocorrencia</th>
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
                              acesso.nome_contato as cliente,
                              acesso.ocorrencia as ocorrencia
                               FROM acesso inner join usuario on acesso.fk_tecnico = usuario.id && acesso.nivel = 1 && usuario.id like '$id'"); 

                          while($while = $registro->fetch()){

                            echo "
                        <tr>    
                       <td>".$while['protocolo']."</td>
                        <td>".$while['cliente']."</td>
                        <td>".$while['ocorrencia']."</td>
                        <td><a data-toggle='modal' data-target='#chamado_atend' alt='".$while['tecnico_id']."'  href='".$while['id']."' class='br-menu-link wd-50'>ver</a></td>
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
         <div id="chamado_atend" class="modal fade ">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div style="background-color: #1a2432"  class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-secondary tx-bold">
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
                  <label class="form-control-label">Ocorrencia:</label>
                   <textarea  class="form-control "></textarea>
                  </div>
               </div>

               <div class="col-lg-8">
                    <div class="from-group">
                      <label class="form-control-label float-left mg-r-5">Trnasferir para </label>
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
                 
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
 
            </div><!-- modal -->
 <script src="js/acesso.js"></script>
