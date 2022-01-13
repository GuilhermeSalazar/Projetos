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
        <i style="color:#17A2B8" class="fa fa-inbox tx-70 lh-10 "></i>
        <div>
          <h4>Equipamentos</h4>
          <p class="mg-b-0 float-right"></p>
        </div>

      </div>
      <div class="  ht-md-60 wd-200 wd-md-auto bg-black-2 pd-y-20 pd-md-y-0 pd-md-x-20 d-md-flex align-items-center justify-content-center">
            <ul class="nav nav-effect nav-effect-1 flex-column flex-md-row menu-pagina-equipamento" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="lista.php" role="tab" aria-selected="false">Por cliente</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="categoria.php" role="tab" aria-selected="false">Categoria e Marcas</a></li>
            </ul>
          </div>
         <div class="col-12   nav-cadastro-clientes">
            
          </div>
        
  <div class="br-pagebody ">
        <div class=" nossos row row-sm mg-t-20 ">

     <div id="lista-equipamento">
        
         <div class="pesquizar">
           <div class="input-group hidden-xs-down wd-200 float-right">
         <input name="pesquisar" class="form-control" id="searchbox" type="text" placeholder="Pesquisar" value="">
          <span class="input-group-btn">
            <button class="btn btn-secondary " type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
         </div>
         <a href="" style="float: right;" data-toggle="modal" data-target="#cadastra-equipamento" class="br-menu-link   mg-r-50 mg-b-20 br-menu-link active">Cadastrar</a> 
      <div class="row row-sm mg-b-0  ">
        </div><!-- row -->
          <div class="col-lg-12" style="float: left">
            <div class="card">


              
                <div  class="bd bd-white-3 rounded table-responsive">
               <table class="table table-bordered mg-b-0  table-hover">
              <thead>
                <tr class="bg-black-9">
                  <th>Codigo</th>
                  <th>Cliente</th>
                  <th>Telefone</th>
                  <th>Equipamento</th>
                  <th>Modelo</th>
                  <th>Marca</th>
                  <th>Nº serie</th>
                  <th>Garantia</th>
                  <th>Data : Compra</th>
                </tr>
              </thead>
              <tbody class="table_list">  
                 
                <?php   

                 $buscar_produto = mysqli_query($sql,"SELECT * FROM equipamento");

                   
                  while($lista_array =  mysqli_fetch_array($buscar_produto)){
                     $clientequem = $lista_array['cliente'];
                     $cliente_bu =  mysqli_query($sql,"SELECT * from cliente where id = '$clientequem'");

                     $array_c_busc = mysqli_fetch_array($cliente_bu);

                     $nomec = "";


                     $dataequi = date('d/m/Y ', strtotime($lista_array['data_compra']));

                                     if(empty($array_c_busc['razao'])){


                                            $nomec =$array_c_busc['nome'];
                                      
                                     }else{

                                          $nomec =$array_c_busc['razao'];

                                     }
 

                              $acao = "<form action='dados_cliente.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$array_c_busc['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";
                           

                  echo "
                   <tr id='linha_cliente'>
                     <th scope='row'>".$lista_array['id']."</th>
                     <td>".$nomec."<a href='".$array_c_busc['id']."' style='color:#868ba1;'>Ver mais</a></td>
                     <td>".$array_c_busc['telefone1']."</td>
                     <td>".$lista_array['equipamento']."</td>
                     <td>".$lista_array['marca']."</td>
                     <td>".$lista_array['modelo']."</td>
                     <td>".$lista_array['n_serie']."</td>
                     <td>".$lista_array['garantia_contrato']." </td>
                     <td>".$dataequi."</td>
                    </tr>

                  ";

                  }


                 ?>
                            
                 
                            
                </tbody>
            </table>
          </div>
                <div id="ch5" class="ht-250 ht-sm-30"></div>
              </div>
            
            </div><!-- card -->
            
          </div>
         </div> 
          <!-- Novos clientes -->
            
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            
           
            
          </div><!-- col-4 -->
        </div><!-- row -->          
      </div>
       <!-- LARGE MODAL -->
          <div id="cadastra-equipamento" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Cadastrar Equipamento</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Equipamento:</label>
                     <select class=" form-control " name="categoria" id="">
                       
                     <?php 
                   
                   $buscar_categoria = mysqli_query($sql,"SELECT * FROM categoria");

                   $array = mysqli_fetch_array($buscar_categoria);

                   while($array = mysqli_fetch_array($buscar_categoria)){
                       
                      echo "   <option value='".$array['nome']."'>".$array['nome']."</option>"; 


                   }


                   ?>
                     </select>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Marca:</label>
                    <select class=" form-control " name="marca" id="">
                       
                     <?php 
                   
                   $buscar_marca = mysqli_query($sql,"SELECT * FROM marca");

                   $arrayr = mysqli_fetch_array($buscar_marca);

                   while($arrayr = mysqli_fetch_array($buscar_marca)){
                       
                      echo "   <option value='".$arrayr['nome']."'>".$arrayr['nome']."</option>"; 


                   }


                   ?>
                     </select>
                  <div id="Marca-resul"></div>
                 </div>
                </div>
               <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Modelo:</label>
                  <input id="modelo" name="modelo" class=" form-control " type="text" placeholder="" value="">
                  <div id="modelo-resul"></div>
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Nº Serie:</label>
                  <input name="n-serie" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Garantia / Contrato</label>
                   <select name="contrato" id="" class=" form-control ">
                     <option value=""></option>
                     <option value="Ga: Balcão">Ga: Balcão</option>
                   </select>
                 </div>
               </div>
                               <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">De</label>
                  <input name="data-de" class=" form-control " type="date" placeholder="" value="">
                 </div>
               </div>
               <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">ate:</label>
                  <input name="data-ate" class=" form-control " type="date" placeholder="" value="">
                 </div>
               </div>
               <div class="col-lg-8">
                 <div class="form-group">
                  <label class="form-control-label">Cliente:</label>
                  <input name="cliente" id="cliente-equipamento" class=" form-control " type="text" placeholder="" value="">
                     <button style="display: none" id="id_cliente"></button>
                  <div id="cliente-resul"></div>
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Data Compra:</label>
                  <input name="data-compra" class=" form-control " type="date" placeholder="" value="">
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Valor Total:</label>
                  <input name="valor-total" class=" form-control " type="text" placeholder="" value="">
                 </div>
               </div>
            </div><!-- row -->

          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="button" class="border-0 br-menu-link active">Cadastrar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

          <style type="text/css">
            #Marca-resul, #modelo-resul, #cliente-resul{
            width:90%;
            background:#fefefe;
            position:absolute;
            z-index: 1;
                 
            }
            #Marca-resul ul, #modelo-resul ul, #cliente-resul ul{
             margin-left:-30px;  
        
            }
            #Marca-resul ul li, #modelo-resul ul li, #cliente-resul ul li{
             list-style: none;
             padding: 0 50px;      
            }
            #Marca-resul ul li:hover{
              background-image: linear-gradient(to right, rgb(28, 175, 154) 0%, rgb(23, 162, 184) 100%);
               background-repeat: repeat-x;
            } 
            #Marca-resul ul li a:hover{

             color: #fff;


            }
            #modelo-resul ul li:hover{
              background-image: linear-gradient(to right, rgb(28, 175, 154) 0%, rgb(23, 162, 184) 100%);
               background-repeat: repeat-x;
            } 
            #modelo-resul ul li a:hover{

             color: #fff;
            }
            #cliente-equipamento ul li:hover{
              background-image: linear-gradient(to right, rgb(28, 175, 154) 0%, rgb(23, 162, 184) 100%);
               background-repeat: repeat-x;
            } 
            #cliente-equipamento ul li a:hover{

             color: #fff;
            }
            
            #Marca-resul ul li a, #modelo-resul ul li a, #cliente-resul ul li a{
             text-decoration:none;
             color:#868ba1;
             padding:0 50px 0 2px;       
            }

          </style>
 <?php   include 'padrao/footer.php'; ?>
   <script src="js/equipamento.js"></script>