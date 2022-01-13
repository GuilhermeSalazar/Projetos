    
  <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- sensor de pessoas online no chat -->
            <div id="sensor_online">
              
            </div>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link Offline" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
      </ul><!-- sidebar-tabs -->
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 contact-scrollbar active" id="contacts" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Contatos</label>
          <div class="contact-list pd-x-10">
              <div id="contato_perfil-list">
                      
        </div>
            <!-- contact-list-link -->
          </div><!-- contact-list -->
        </div><!-- #contacts -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
        
          <label class="sidebar-label pd-x-25 mg-t-25">Agenda de hoje</label>
          <div class="pd-x-25">
            <div class="list-group sidebar-event-list mg-b-20">
              <?php 
              
               $conagendar = mysqli_query($sql,"SELECT * FROM agenda where id_quem like '$id'")or die(mysqli_error());


                 while ($agenapos = mysqli_fetch_array($conagendar)){
                   $agedate = date('d/m/Y ', strtotime($agenapos['dia']));
                   
                  
                    echo "
                <div class='list-group-item'>
                <div>
                  <h6 class='tx-white tx-13 mg-b-5 tx-normal'>".$agenapos['descricao']."</h6>
                  <p class='mg-b-0 tx-gray-600 tx-12'>".$agedate." : ".$agenapos['hora']."</p>
                </div>
                <a href='' class='more'><i class='icon ion-android-more-vertical tx-18'></i></a>
              </div>
                    ";


                 }

               ?>
              
              
            </div><!-- list-group -->
                   
                   <a href=""data-toggle="modal" data-target="#minhaagenda" class="btn btn-block br-menu-link tx-uppercase tx-10 tx-mont tx-semibold">Minha agenda</a>
            <br>
          </div>
        </div>
      </div><!-- tab-content -->
    </div>
    <!-- modal para notificação  -->
    <div id="modaldemo1" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Notificação</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                 <div class="form-group ">
                          <input  type="email" name="titulo" class="form-control pd-y-5" placeholder="titulo">
                        </div><!-- form-group -->
                        <div class="form-group mg-b-20">
                          <textarea class="form-control pd-y-12" placeholder="Descrição " name="descricao" id="" cols="30" rows="10"></textarea> 
                          <input style="width: 170px" type="date" name="data" class="form-control pd-y-5" placeholder="data">
                          
                        </div><!-- form-group -->
                          <div class="form-group">
                          <input style="max-width: 170px" type="text" name="responsavel" class="form-control pd-y-5" placeholder="Horario ?">
                        </div>
                </div>
                <div class="modal-footer">
                  <button  type="button" class="adicionar_form btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">Adicionar</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      <!-- modal agenda pessoal  -->
          <div id="agenda" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background: #1a2432">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-white tx-bold">Agenda pessoal</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                        <div class="form-group mg-b-20">
                          <textarea class="form-control pd-y-12" placeholder="Descrição " name="descricao" id="" cols="30" rows="10"></textarea> 
                          <input style="width: 170px" type="date" name="data" class="form-control pd-y-5" placeholder="data">
                          
                        </div><!-- form-group -->
                          <div class="form-group">
                          <input style="max-width: 170px" type="text" name="responsavel" class="form-control pd-y-5" placeholder="Horario ?">
                          <?php echo "<input style='display:none' type='text' name='id' class='form-control pd-y-5' placeholder='Horario ?' value='".$id."'>"; ?>
                        </div>
                </div>
                <div class="modal-footer">
                  <button  type="button" class="adicionar_agenda br-menu-link border-0 tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">Adicionar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal lista da agenda -->
          
      
          <!-- fim do modal de selecional -->
            <div id="minhaagenda" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background: #1a2432;">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-white tx-bold">Minha agenda</h6> <a href=""data-toggle="modal" data-target="#agenda" class="btn btn-block br-menu-link tx-uppercase tx-10 tx-mont tx-semibold mg-l-10 wd-150 agenda_nova">Marca na Agenda</a>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div style="overflow: auto; max-height: 390px" class="modal-body pd-25 notificacao_form">
             <table  class="table mg-b-0">
              <thead>
                <tr>
                  <th>Descrição</th>
                  <th>Data</th>
                  <th>Hora</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                 
                 $buscar_na_agenda = mysqli_query($sql,"SELECT * FROM agenda where id_quem = '$id'");

                 while($slqn = mysqli_fetch_array($buscar_na_agenda)){

                     $sqldat = date('d/m/Y', strtotime($slqn['dia']));
                   echo "
                     <tr class='talet'>
                  <th>".$slqn['descricao']."</th>
                  <td>".$sqldat."</td>
                  <td>".$slqn['hora']."</td>
                  <td> <a href='".$slqn['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a><a href='".$slqn['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></td>
                </tr>


                   ";

                 } 



                 ?>
              </tbody>
            </table>
                </div>
                <div class="modal-footer">
                  <input  type="date" name="de">  A <input  type="date" name="ate"> 
                  <a   class="buscar_agenda br-menu-link " style="color:#fff">Pesquisar</a>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          <div id="agendapessoal">
          <div id='agenda_edit' class='modal '  >
            <div class='modal-dialog modal-dialog-centered' role='document' >
              <div class='modal-content bd-0 tx-14' style="background:#1a2432">
                <div class='modal-header pd-y-20 pd-x-25'>
                  <h6 class='tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold'>Editar</h6>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body pd-25 notificacao_form'>
                 <div class='form-group '>
                           <input type='hidden' value='' name='editar'>
                        </div>
                        <div class='form-group mg-b-20'>
                          <textarea  class='form-control pd-y-12' placeholder='' name='descricao' id='' cols='30' rows='10'></textarea> 
                          <input style='width: 170px' value='' type='date' name='data' class='form-control pd-y-5 t-10' placeholder='data'>
                          
                        </div><!-- form-group -->
                          <div class='form-group'>
                          <input value='' style='max-width: 170px' type='text' name='responsavel' class='form-control pd-y-5' placeholder='Horario ?'>
                        </div>
                </div>
                <div class='modal-footer '>
                  <button  type='button' class='agenda_edita br-menu-link border-0 tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold'>Editar</button>
                </div>
              </div>
            </div>
          </div>
          </div>
          <script>
          </script>
    <!-- ########## END: RIGHT PANEL ########## --->
 
      <!-- ########## START: MAIN PANEL ########## -->

      <!--bug modal de selecionar-->

           <div id="bug" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background-color: #1a2432; color: white">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-bold">Relatar Ocorrência</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6" >
                             <input type="button"  class="nav-link br-menu-link" value="Relatar Bug" data-toggle="modal" data-target="#bug_relatar" style="width: auto;border-radius: 40px;background-color:   #008000;color: black; margin-left: 60px">
                          </div>
                          
                          <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 " >
                            <input type="button" class="nav-link br-menu-link active"  data-toggle="modal" data-target="#Enviarsuges" name="" value="Sugestões" style="width: auto;border-radius: 40px; margin-left: 10px">
                          </div>
                        </div>
                         
                       </div>
                </div>
                
              </div>
            </div><!-- modal-dialog -->
          </div>
          <!-- bug relatar bug -->

           <div id="bug_relatar" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background-color: #1a2432; color: white">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-bold">Relatar Bug</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form relata_bug">
                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-2" >
                             <input type="text" name="titulo" placeholder="Título da Ocorrência" class="form-control" style="width: 100%; margin-bottom: 5px">
                             <textarea style="width: 100%;height: 300px;" name="descricao" placeholder="Descrição do Bug"></textarea>
                             <div class="row mt-2">
                                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 border-1">
                                  
                                  <br><label>Técnico</label>
                                  <select name="usuario">
                                   <!-- configuração de conexão de bancos -->
                                    <?php 
                                      require 'conf/pdo.php';
                                      $usuario = $pdo->query('SELECT * FROM usuario');
                                      while ($user = $usuario->fetch()){
                                        echo "<option value='".$user['usuario']."'>".$user['usuario']."</option>";
                                      }

                                                  ?>
                                   
                                 </select>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                  
                                    
                                    <select name="setor" style="height: 20px; margin-left:50px;">
                                      <option value="Abertura de Chamado">Abertura de Chamado</option>
                                      <option value="Agenda">Agenda</option>
                                      <option value="Aparência">Aparência</option>
                                      <option value="Cadastro de Funcionário">Cadastro de Funcionário</option>
                                      <option value="Transferência">Transferência</option>
                                    </select>
                                  <label style="font-size: 10px; margin-left:16px">Data Ocorrência:</label>
                                   <input style="width: 135px;" type="date" name="data" placeholder="dd/mm/aaaa">
                                   
                                </div>
                             </div>

                             <div class="row">
                              <div class="modal-footer" style="width: 100%">
                                
                              
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                    <ul class=" nav flex-column flex-md-row justify-content-center ml-auto" role="tablist">
                                        <li class="nav-item mg-r-5  br-menu-link ml-auto " data-dismiss="modal"><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon icon fa fa-ban tx-16"></i> Cancelar</a></li>
                                        <li class="nav-item mg-r-5 br-menu-link active "><a style="color:#fff; width: auto" class="nav-link  " data-toggle="tab" href="#" role="tab" id="btn_relatar_bug"><i class="menu-item-icon icon fas fa-save tx-16"></i>Enviar</a></li>
                                    </ul>
                               </div>
                               </div>
                             </div>
                          </div>                   
                        </div>
                         
                       </div>
                </div>
                
              </div>
            </div><!-- modal-dialog -->
          </div>
          <!-- bug fim do relatar -->
          <!-- Modal enviar sugestoes -->
          <div id="Enviarsuges" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background-color: #1a2432; color: white">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-bold">Relatar Sugestão</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form relata_sugestao">
                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-2" >
                             <input type="text" name="titulo" placeholder="Título da Ocorrência" class="form-control" style="width: 100%; margin-bottom: 5px">
                             <textarea style="width: 100%;height: 300px;" name="descricao" placeholder="Descrição da Ocorrência"></textarea>
                             <div class="row mt-2">
                                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                  
                                 <label>Solicitado:</label>
                                  <select name="usuario" style="width: 88px">
                                    <?php
                                      
                                      $usuario1 = $pdo->query('SELECT * FROM usuario');
                                      while ($user2 = $usuario1->fetch()){
                                        echo "<option value='".$user2['usuario']."'>".$user2['usuario']."</option>";
                                      }
                                     ?>
                                 </select>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                  
                                    <select name="setor" style="height: 20px; margin-left:50px;">
                                      <option value="Abertura de Chamado">Abertura de Chamado</option>
                                      <option value="Agenda">Agenda</option>
                                      <option value="Aparência">Aparência</option>
                                      <option value="Cadastro de Funcionári">Cadastro de Funcionário</option>
                                      <option value="Transferência">Transferência</option>
                                    </select>
                                   <label style="font-size: 10px; margin-left:16px">Data Ocorrência:</label>
                                    <input style="width: 135px;" type="date" name="data">
                                </div>
                             </div>
                             <div class="row">
                               <div class="modal-footer" style="width: 100%">
                                
                              
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <ul class=" nav flex-column flex-md-row justify-content-center ml-auto p-2" role="tablist">
                                        <li class="nav-item mg-r-5  br-menu-link ml-auto " data-dismiss="modal"><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon icon fa fa-ban tx-16"></i> Cancelar</a></li>
                                        <li class="nav-item mg-r-5 br-menu-link active " ><a style="color:#fff; width: auto" class="nav-link  " data-toggle="tab" href="#" role="tab" id="Enviarsugestao"><i class="menu-item-icon icon fas fa-save tx-16"></i>Enviar</a></li>

                                    </ul>
                               </div>
                               </div>
                             </div>
                          </div>                   
                        </div>
                         
                       </div>
                </div>
                
              </div>
            </div><!-- modal-dialog -->
          </div>
          <!-- fim do modal de selecional -->