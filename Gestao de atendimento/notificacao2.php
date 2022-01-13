    
  <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
            <!-- start: if statement -->
            <span class="sensormsg  square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
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
          <label class="sidebar-label pd-x-25 mg-t-25">Online Contatos</label>
          <div class="contact-list pd-x-10">
              <div id="contato_perfil-list">
                       <?php 

                    $lista = mysqli_query($sql,"SELECT * FROM usuario");

                 while ($list = mysqli_fetch_array($lista)) {
                  
                     $estatus = $list['estatus'];
                       

                       if($estatus == 1 ){
                            
                            if($list['id'] !== $id){
                           echo "
                  <a href='".$list['id']."' alt='".$id."' class='contact-list-link new'>
              <div class='d-flex'>
                <div class='pos-relative'>
                  <img src='update/".$list['perfil']."' alt=''  style='height: 35px'>
                  <div class='contact-status-indicator bg-success bd-white'></div>
                </div>
                <div class='contact-person'>
                  <p>".$list['usuario']."</p>
                  <span>ativo</span>
                </div>
                <span class='tx-info tx-12'>
              </div>
            </a>
                  ";
                  }       
                }   
           }

                    echo "
            </div>
          <label class='sidebar-label pd-x-25 mg-t-25'>Contatos Offline </label>
          <div class='contact-list pd-x-10'>
              ";    
                $lista1 = mysqli_query($sql,"SELECT * FROM usuario");

               while ($list1= mysqli_fetch_array($lista1)) {
                  
                     $estatus1 = $list1['estatus'];
                       

                       if($estatus1 == 0 ){

                           echo "
               <a href=''".$list1['id']."' alt='".$id."'' class='contact-list-link'>
              <div class='d-flex'>
                <div class='pos-relative'>
                  <img src='update/".$list1['perfil']."' alt='' style='height: 35px'>
                  <div class='contact-status-indicator bg-gray-500 bd-white'></div>
                </div>
                <div class='contact-person'>
                  <p>".$list1['usuario']."</p>
                  <span>Offline</span>
                </div>
              </div>
            </a>
                  ";       
                  }
                }

                  ?>
        </div>
            <!-- contact-list-link -->
          </div><!-- contact-list -->
        </div><!-- #contacts -->
        <div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Data &amp; Hora</label>
          <div class="pd-x-25">
            <h2 id="Horas" class="br-time"><div id="relogio"></div></h2>
            <h6 id="brDate" class="br-date"> <?php echo date("d/m/Y"); ?></h6>
          </div>
          <div class="datepicker sidebar-datepicker"></div>
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
                   <a href=""data-toggle="modal" data-target="#agenda" class="btn btn-block btn-primary tx-uppercase tx-10 tx-mont tx-semibold">Marca na Agenda</a>
                   <a href=""data-toggle="modal" data-target="#minhaagenda" class="btn btn-block btn-primary tx-uppercase tx-10 tx-mont tx-semibold">Minha agenda</a>
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
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Agenda pessoal</h6>
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
                  <button  type="button" class="adicionar_agenda btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">Adicionar</button>
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal lista da agenda -->
          
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
                             <input type="button" name="" class="nav-link br-menu-link" value="Relatar Bug" data-toggle="modal" data-target="#bug_relatar" style="width: auto;border-radius: 40px;background-color:   #008000;color: black; margin-left: 60px">
                          </div>
                          
                          <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 " >
                            <input type="button" class="nav-link br-menu-link active" Enviar_sug data-toggle="modal" data-target="#Enviar_sug" name="" value="Sugestões" style="width: auto;border-radius: 40px; margin-left: 10px">
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
                <div class="modal-body pd-25 notificacao_form">
                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-2" >
                             <input type="text" name="" placeholder="Título da Ocorrência" class="form-control" style="width: 100%; margin-bottom: 5px">
                             <textarea style="width: 100%;height: 300px;" placeholder="Descrição do Bug"></textarea>
                             <div class="row mt-2">
                                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                  <label style="margin-right: 40px">Nível</label>
                                  <select>
                                    <option value="">Baixo</option>
                                    <option value="">Médio</option>
                                    <option value="">Crítico</option>
                                    
                                  </select>
                                  <br><label>Técnico</label>
                                  <select>
                                   <!-- configuração de conexão de bancos -->
                                    <?php 
                                      require 'conf/pdo.php';
                                      $usuario = $pdo->query('SELECT * FROM usuario');
                                      while ($user = $usuario->fetch()){
                                        echo "<option value=''>".$user['usuario']."</option>";
                                      }

                                                  ?>
                                   
                                 </select>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                  <label style="font-size: 10px">Data Ocorrência:</label>
                                    <input style="width: 130px;margin-left: 20px" type="date" name="">
                                    <label style="font-size: 10px">Campo da Ocorrência:</label>
                                    <input style="width: 120px; margin-left: 3px" type="text" name="">
                                </div>
                             </div>
                             <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                    <ul class=" nav flex-column flex-md-row justify-content-center ml-auto" role="tablist">
                                        <li class="nav-item mg-r-5  br-menu-link ml-auto " data-dismiss="modal"><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon icon fa fa-ban tx-16"></i> Cancelar</a></li>
                                        <li class="nav-item mg-r-5 br-menu-link active "><a style="color:#fff; width: auto" class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="menu-item-icon icon fas fa-save tx-16"></i>Enviar</a></li>
                                    </ul>
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
          <div id="Enviar_sug" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14" style="background-color: #1a2432; color: white">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-bold">Relatar Bug</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                       <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-2" >
                             <input type="text" name="" placeholder="Título da Ocorrência" class="form-control" style="width: 100%; margin-bottom: 5px">
                             <textarea style="width: 100%;height: 300px;" placeholder="Descrição da Ocorrência"></textarea>
                             <div class="row mt-2">
                                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
                                  
                                 <label>Solicitado:</label>
                                  <select style="width: 88px">
                                    <?php
                                        require 'conf/select_usuario.php';
                                     ?>
                                 </select>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7">
                                  <label style="margin-left: 56px; ">Setor:</label>
                                    <input style="width: 118px" type="text" name="">
                                    <label style="font-size: 10px">Data da Solicitação:</label>
                                    <input style="width: 120px; margin-left: 3px" type="date" name="">
                                </div>
                             </div>
                             <div class="row">
                               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                    <ul class=" nav flex-column flex-md-row justify-content-center ml-auto" role="tablist">
                                        <li class="nav-item mg-r-5  br-menu-link ml-auto " data-dismiss="modal"><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon icon fa fa-ban tx-16"></i> Cancelar</a></li>
                                        <li class="nav-item mg-r-5 br-menu-link active "><a style="color:#fff; width: auto" class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="menu-item-icon icon fas fa-save tx-16"></i>Enviar</a></li>
                                    </ul>
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
            <div id="minhaagenda" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Minha agenda</h6>
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
                  <button  type="button" class="buscar_agenda btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold">Pesquizar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          <div id="agendapessoal">
          <div id='agenda_edit' class='modal '   style='padding-right: 17px; display: blok;'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
              <div class='modal-content bd-0 tx-14'>
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
                  <button  type='button' class='agenda_edita btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold'>Editar</button>
                </div>
              </div>
            </div>
          </div>
          </div>
          <script>
          </script>
    <!-- ########## END: RIGHT PANEL ########## --->
 
      <!-- ########## START: MAIN PANEL ########## -->