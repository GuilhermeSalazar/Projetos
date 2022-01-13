<?php 


 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");


  /*NUMERO DE CLIENTES  */

    $buscar_clientes = mysqli_query($sql,"SELECT * FROM fornecedor ");

    $numero_clientes = mysqli_num_rows($buscar_clientes);


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
<!--   codigo da pagina em html -->
   <div class="br-mainpanel " >
      <div class="br-pagetitle  cadastro_titulo">
        <i style="color:#17A2B8" class="fa fa-building tx-70 lh-10 "></i>
        <div>
          <h4>Fornecedores</h4>
          <p class="mg-b-0 float-right"></p>
        </div>

      </div>
         <div class="col-12   nav-cadastro-clientes">
            <ul class=" nav flex-column flex-md-row justify-content-center" role="tablist">
              <li class="nav-item mg-r-5  c_cadastrar br-menu-link  "><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon fa fa-building tx-16"></i> Novo Fornecedor</a></li>
              <li class="nav-item mg-r-5 c_clientes c_cadastrar br-menu-link active"><a style="color:#fff" class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="menu-item-icon icon ion-ios-paper-outline tx-16"></i>Lista</a></li>
            </ul>
          </div>
        
  <div class="br-pagebody ">
        <div class=" nossos row row-sm mg-t-20 ">
            
      <div class="row row-sm mg-b-0  ">
       
        </div><!-- row -->
          <div class="col-lg-12">
            <div class="card">

              <div class="d-md-flex justify-content-between pd-25">
                <div>
                  <h6 class="tx-20  tx-white tx-spacing-1">Fornecedores</h6>
                  <p><?php echo "Total = ".$numero_clientes; ?></p> 
                  

                </div>
                <select value="" name="categoria"  style="margin-right: -280px" class="form-control select2 wd-200 " data-placeholder="Choose Browser" >
                <option value="">--</option>
                <option value="1">Completa</option>
                <option value="2">Simplificada</option>
                </select>

               
        <div class="input-group hidden-xs-down wd-200 f_pes">
         <input value="" name="pesquisar" id="searchbox" type="text" class="form-control" placeholder="Pesquisar">
          <span class="input-group-btn">
            <button class="btn btn-secondary " type="button"><i class="fa fa-search"></i></button>
          </span>
        </div>
            </div><!-- d-flex -->
                <div class="bd bd-white-3 rounded table-responsive">
            <table class="table table-bordered mg-b-0  table-hover">
              <thead>
                <tr class="bg-black-9">
                  <th>Codigo</th>
                  <th>Nome</th>
                  <th>CNPJ / CPF</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tbody class="table_list">  
                                      
                  <?php 

                   $buscar_registro = mysqli_query($sql,"SELECT * FROM fornecedor ");
                       
                    while($registro = mysqli_fetch_array($buscar_registro)){
                           

                                     $acao = "<form action='dados_fornecedor.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$registro['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";
                             $perfil_t = "";

                                        $perfil_r = $registro['status'];

                                        if($perfil_r == '1'){

                                          $perfil_t = "Completa";


                                        }
                                        if($perfil_r == '2'){

                                          $perfil_t = "Simplificada";


                                        }




                                // logica nome ou razao social 
                                      if(!empty($registro['nome']) && empty($registro['razao'])){


                                          $regis = $registro['nome'];
                                      }
                                      if(!empty($registro['nome']) && !empty($registro['razao'])){


                                          $regis = $registro['razao'];
                                      }




                            echo "
                  <tr id='linha_cliente'>
                  <th scope='row'>".$registro['id']."
                  </th>
                  <td>".$regis."".$acao."
                  </td>
                  <td>".$registro['cnpj_cpf']."</td>
                  <td>".$registro['email']."</td>
                  <td>".$registro['telefone1']."</td>
                  <td>".$perfil_t."</td>


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
          <!-- Novos clientes -->
           <div class="row row-sm mg-t-20 cadastrar_clientes" style="display: none">
          <div class="col-lg-12">
            <div class="card">
              <div class="d-md-flex col-lg-4 justify-content-between pd-25">
                
                <div class="d-sm-flex">
                  <div class="cadastro_titulo">
                  <h6 class="tx-20  tx-white  tx-spacing-1">Cadastro  <span>Jurídica</span></h6>
                  <button value='2' style="display: none" class="p_juridica  border-0 br-menu-link active">Jurídica</button>
                  <button class="s p_fisica border-0 br-menu-link active">Física</button>
                </div>
               </div><!-- d-flex -->
                 </div><!-- d-flex -->
                <div class=" rounded table-responsive juridica">
                <!-- Pessoa juridica  -->  
            <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                 <div class="col-lg-4 cnpj">
                <div class="form-group">
                  <label class="form-control-label">CNPJ:</label>
                  <input class=" form-control form-control-dark" type="text" name="cnpj" value="" placeholder="">
                </div>
              </div>
                <div class="col-lg-6 razao">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Razão Social: </label>
                  <input class="form-control form-control-dark" type="text" name="razao"  placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-6 fantasia">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Nome Fantasia:</label>
                  <input class="form-control form-control-dark" type="text" name="fantasia"  placeholder="">
                </div>
              </div>
              <div class="col-lg-4 nome">
                <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                  <input class="form-control form-control-dark" type="text" name="nome" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
            <!-- col-4 -->
                 <div class="col-lg-3 inscricao">
                <div class="form-group">
                  <label class="form-control-label">Inscrição Estadual:</label>
                  <input class="form-control form-control-dark" type="text" name="inscri" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4 cpf" style="display:none">
                <div class="form-group">
                  <label class="form-control-label">CPF:</label>
                  <input class=" form-control form-control-dark" type="text" name="cpf" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input class="form-control form-control-dark" type="text" name="email" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-3 rg" style="display: none;">
                <div class="form-group">
                  <label class="form-control-label">RG:</label>
                  <input class="form-control form-control-dark" type="text" name="rg" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Telefone: <a href="#" class="tel_"><i class="fa fa-plus"></i></a><span class="tx-danger"></span></label>
                  <input class="form-control form-control-dark" type="text" name="telefone1" value="" placeholder="">
                  <input style="display: none" class="tel2 mg-t-5 form-control form-control-dark" type="text" name="telefone2" value="" placeholder="Telefone">
                </div>
              
              </div><!-- col-4 -->
               <div class="col-lg-4">
                  <div class="form-group ">
                  <label class="form-control-label">Celular: <a href="#" class="cel_"><i class="fab fa-whatsapp" style="color:#40c057"></i></a></label>
                  <input class="form-control form-control-dark" type="text" name="celular1" value="" placeholder="">
                  <input style="display: none" class=" cel2 mg-t-5 form-control form-control-dark" type="text" name="celular2" value="" placeholder="Whatsapp">
                </div>
              </div>
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">CEP:</label>
                  <input class="form-control form-control-dark" type="text" name="cep" value="" placeholder="">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Endereço:</label>
                  <input class="form-control form-control-dark" type="text" name="endereco" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Numero:</label>
                  <input class="form-control form-control-dark" type="text" name="numero" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-5">
                <div class="form-group">
                  <label class="form-control-label">Complemento:</label>
                  <input class="form-control form-control-dark" type="text" name="complemento" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control form-control-dark" type="text" name="bairro" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Cidade:</label>
                  <input class="form-control form-control-dark" type="text" name="cidade" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-1">
                <div class="form-group">
                  <label class="form-control-label">UF:</label>
                  <input class="form-control form-control-dark" type="text" name="uf" value="" placeholder="">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer float-right" style="margin-top:-30px ">
              <button value="J" class="submit_f_ju border-0 br-menu-link active">Cadastrar</button>
              <button style="display: none" value="F" class="submit_f_fi border-0 br-menu-link active">Cadastrar</button>
            </div><!-- form-layout-footer -->
          </div>
          </div>
                <div id="ch5" class="ht-250 ht-sm-30"></div>
              </div>
            
            </div><!-- card -->
            
          </div><!-- col-8 --> 
          <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            
           
            
          </div><!-- col-4 -->
        </div><!-- row -->          
      </div>
 <?php   include 'padrao/footer.php'; ?>