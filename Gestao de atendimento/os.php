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
<!-- link css -->
<link rel="stylesheet" type="text/css" href="css/os.css">
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
     div h6{
      margin-top: 3px;
      text-align: left;
     }
     h1,h2,h3,h4,h5,h6{
      color: white;
     }
    label{
      color: white;
      text-align: left;
     
    }
  </style>
</head>
<!-- PDO -->
<?php
 require 'conf/pdo.php';

// mysql

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
 
// modal
 
?>

<body>
  <!-- Inicio da parte fixa -->
  <div class="corpo-os">
    <div class="br-mainpanel" >
   	
	<div class="card text-center">
   <div class="card-header">
    <h1>Ordem de Serviço</h1>
     
   </div>
   <div class="card-body">
     
    <form>
      <div class="row">
      
       <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" style="text-align: left; font-size: 40px; padding: 0px; margin: 0px; height: 40px">
        <div class="">
       <p style="color:#00FF00">N° 0000</p>
       </div>    
       
  </div>
  <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9" >
    <div class="row">
       <ul class=" nav flex-column flex-md-row justify-content-center ml-auto" role="tablist">
              <li class="nav-item mg-r-5  br-menu-link  "><a    class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="  menu-item-icon icon fa fa-ban tx-16"></i> Cancelar</a></li>
              <li class="nav-item mg-r-5 br-menu-link active"><a style="color:#fff; width: auto" class="nav-link  " data-toggle="tab" href="#" role="tab"><i class="menu-item-icon icon fas fa-save tx-16"></i>Gravar</a></li>
            </ul>
    </div>
       
      
       </div>
  </div>
  <div class="form-row" style="text-align: left;">


  </div>
  <div class=" row">
  
<div class="card col-lg-8 col-md-8 mt-3">
  <div style="text-align: left;margin-right:auto; margin-top: 5px">
  <h4 >Razão social:<span class="OsRazao"></span></h4>
  <h6 >Nome Fantasia:<span class="OsFantasia"></span></h6>
  <h6>CNPJ/IE:<span class="OsCNPJ"></span></h6>
  <h6>e-mail:<span class="Osemail"></span></h6>
  <h6>Telefones:<span class="Ostelefone"></span></h6>
</div>
 </div>
 <div class="col-md-1 mt-3 mr-auto ">
  <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Editar" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
  <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary " data-toggle="tab" value="Trocar cliente" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432;">
  <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Outros" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
 </div>
 <div class="container-fluid">
  <div class="row">
    
 
 <div class="card col-lg-8 col-md-8 mt-3 p-0">
  
  	<div class="row mt-3" id="osentrada">
  		<div class="col-md-4"  style="text-align: left;" id="osentradatipo">
  		<label>Entrada:</label><input type="date" name="" style="padding-left: 5px;margin-left: 4px;" ><br>
  			<label>Pronto: </label> <input type="date" name="" style="padding-left: 5px;margin-left: 7px;"><br>
  			<label>Saída:</label>   <input type="date" name="" style="padding-left: 5px;margin-left: 14px;">
  		</div>
  		<div class="col-md-8" id="osentradatipo" >
  			<div class="input-group mb-1" >
            <select class="custom-select" id="inputGroupSelect02">
             <option selected>Abertura de chamado externo</option>
             <option value="1">Aguardando autorização do Orçamento</option> 
             <option value="1">Aguardando avaliação técnica</option> 
             <option value="1">Entrada de equipamento</option> 
             <option value="1">Manutenção agendada</option>
             <option value="1">Serviço não aprovado</option>
             </select>
                <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Histórico" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
  		    </div>
  	  </div>
  	  
  </div>
   
</div>
<div class="card col-md-3 ml-1 mt-3 mr-1" style="padding: 0;margin-top:1px; font-size: 15px; max-height: 200px;overflow: auto;">
  <table class="table table-striped">
    <thead>
       <tr>
          <td>Adiatamento: </td>
          <td>R$ 100,00</td>
       </tr>
        <tr>
          <td>Mão de Obra: </td>
          <td>R$ 100,00</td>
       </tr>
        <tr>
          <td>Peça: </td>
          <td>R$ 100,00</td>
       </tr> 
       <tr>
          <td>Frete: </td>
          <td>R$ 100,00</td>
       </tr>
        <tr>
          <td>Chamado a cobrar: </td>
          <td>R$ 100,00</td>
       </tr>
       <tr>
          <td>Preço Parceiro: </td>
          <td>R$ 100,00</td>
       </tr>
       <tr>
          <td>Total: </td>
          <td>R$ 600,00</td>
       </tr>
    </thead>
    
  </table>
   </div>
 </div>
</div>
<!-- fim da parte fixa -->
<!-- Abas -->

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <ul class="nav nav-tabs " id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link br-menu-link active shown.bs.tab" id="home-tab" data-toggle="tab" href="#equipamento" role="tab" aria-controls="home" aria-selected="true">Equipamento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link br-menu-link" id="profile-tab" data-toggle="tab" href="#nav-maoobra" role="tab" aria-controls="profile" aria-selected="false">Mão de obra/serviços</a>
  </li>
  <li class="nav-item">
    <a class="nav-link br-menu-link" id="messages-tab" data-toggle="tab" href="#nav-pecas" role="tab" aria-controls="messages" aria-selected="false">Peças Utilizadas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link br-menu-link" id="settings-tab" data-toggle="tab" href="#nav-ObsLaudotecnico" role="tab" aria-controls="settings" aria-selected="false">Obs/Laudo técnico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link br-menu-link" id="settings-tab" data-toggle="tab" href="#nav-miscelanea" role="tab" aria-controls="settings" aria-selected="false">Miscelânea</a>
  </li>
</ul>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <!-- inicio da primeira aba -->
  <div class="tab-pane fade show active" id="equipamento" role="tabpanel" aria-labelledby="nav-home-tab">
    <form class="form-control  col-sm-12 col-md-12 col-xl-12 col-lg-12">
      <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-3 mr-1">
           <div class="container-fluid">
               <div class="row">
                <!-- botao do alterar equipamento -->
                    <div class="col-md-12 mt-3 ">
                      <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary ml-auto" data-toggle="modal" data-target=".bd-equipamento-modal-xl" value="Alterar dados equip." style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
                    </div>
                    <!-- modal do alterar equipamento -->
                    
         <div class="modal fade bd-equipamento-modal-xl" id="modalequip" tabindex="1" role="dialog" aria-labelledby="myExtraLargeModalLabel" arial-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            
              <div class="modal-content" style="height: 400px; background-color: #1a2432; border-radius: 10px">
                <div class="modal-header">
              <h5 class="modal-title">Selecione a opção</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin-top: 100px; margin-left: 1px;margin-right: 24px; ">
                    <input type="button" class="nav-link br-menu-link" name="" style="width: auto;border-radius: 40px;background-color:   #008000;color: black;" value="Alterar equipamento por um outro">

                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4"  style="margin-top: 100px; margin-left: 55px;">
                     <input type="button" class="nav-link br-menu-link active" name="" style="width: auto;border-radius: 40px;" value="Alterar dados do Equipamento">
                     <!--  -->
                  </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4"  style="margin-top: 10px; margin-left: 110px">
                        <input type="button" class="nav-link br-menu-link active border-primary ml-1" data-toggle="modal" data-target=".cadastra-equipamento" value="Cadastrar Novo equipamento" style="border-radius: 50px;">
                      
                               
                       </div>
                    </div>
                </div>
                 
                
              </div>
          </div>
           
         </div>
           <!-- MOdal de cadastro de produto -->
              <div id="cadastra-equipamento" class="modal fade cadastra-equipamento">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm" style="background-color: #1a2432">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase">Cadastrar Equipamento</h6>
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
                     <option value="Ga: OnSite">Ga: Balcão</option>
                   </select>
                 </div>
               </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">De: </label>
                  <input name="data-de" class=" form-control " type="date" placeholder="" value="">
                 </div>
               </div>
               <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">até:</label>
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
          </div>
            <!-- fim do modal de alterar equipamento -->
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" style="margin-left: -8px">
                  <div style="position: left; padding: 3px"> 
                     <h6 style="position: left;margin-bottom: 10px ">Modelo: 
                     <input  type="text" class=" form-control" name="" placeholder="Modelo" style="margin-left: 1px; width: 250px"></h6>
                     <h6 style="position: left; padding: 3px">Descrição: 
                     <input  type="text" name="" class=" form-control" placeholder="Descrição" style="margin-left: 1px; width: 250px"></h6>
                     </div>
                 </div>
                 <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <h6 style="position: left; padding: 3px">Marca: 
                     <input  type="text" name=""  class=" form-control" placeholder="Marca" style="margin-left: 1px; width: 300px"></h6>
                     <h6 style="position: left; padding: 3px">Nº Série: 
                     <input  type="text" name="" class=" form-control" placeholder="Nº Série" style="margin-left: 1px; width: 300px"></h6>
                 </div>
                 <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <h6 style="; padding: 3px; margin-left: 55px">Nº OS Ext.: 
                     <input  type="text" class=" form-control" name="" placeholder="Nº OS Ext." style=" width: 450px"></h6>
                     <h6 style="position: left; padding: 3px;margin-left: 56px;">Garantia/Contrato: 
                     <input  type="text" class="form-control" name="" placeholder="Garantia/Contrato" style=";width: 450px"></h6>
                </div>
                
                </div>
                <div class="row">
                <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 ml-1" style="margin-right:0px ">
                    <h6 style="margin-left: -7px;">Acessórios: 
                     <textarea type="text" class=" form-control"name="" placeholder="Acessórios" style=" width: 400px; height: 70px"></textarea></h6>
                     <h6 style="margin-left: -7px;">Observações: 
                     <textarea type="text" class="form-control" name="" placeholder="Observações" style=" width: 400px; height: 70px"></textarea></h6>
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7 col-xl-7 " style="margin-left:-7px; margin-right: -10px">
                    <h6 style="margin-left: -7px;">Defeito/Sintoma: 
                     <textarea type="text" class=" form-control " name="" placeholder="Defeito / Sintomas" style=" max-width: 650; height:250px"></textarea></h6>
                     
                </div>
                </div>
               </div>

      </div>
  
   </form>
 </div>
 <!-- inicio da segunda aba -->
  <div class="tab-pane fade" id="nav-maoobra" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-3 mr-1" style="width:1100px;">
      
    <div class="row">
      
    
    <div class="col-md-8 col-lg-8 col-sm-8 col-xl-8">
       <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-1 ml-3" style="width:100%; padding: 0px">
           <div class="container-fluid">
             <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                
              
               <div class="bd bd-white-3 rounded table-responsive">
                <table class="table table-bordered table-hover m-0 listagem"  style="max-height: 300px; float: left">
                  <thead class="bg-black-9">
                  <tr class="bg-black-9">
                  <th>Descrição</th>
                  <th>Tipo</th>
                  <th>Início</th>
                  <th>Fim</th>
                  <th>QTD</th>
                  <th>Valor</th>
                  <th>Técnico</th>
                  </tr>
                  </thead>
                  <tbody class="table_list"> 
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
         
      </div>
     <div class="col-md-4 col-lg-4 col-xl-4 mt-3"  style="float: left;">

        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Padrões" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432"><input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Avulsos" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432"><input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-danger" data-toggle="tab" value="Excluir" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        </div>
        </div>
       <div class="container-fluid mt-3" style="position: left; margin-left: 4px; margin-right: 5px">
             <div class="row">
              <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <h6>OBS Internas.:</h6>
                <textarea class="form-control mb-1 ml-0" placeholder="Observações Interna" style="max-width: auto; width: 700px;height:  150px;"></textarea>
                </div>
                <div class="col-md-3 mt-3">
                 <h6>Total de Horas:
                <input type="text" class="form-control" placeholder="00:00"style="height: 30px; 
                "></h6>
                <h6>Total:     
                <input type="text" class="form-control" placeholder="R$ 1.00" style=";height: 30px; "></h6>
               <input type="button" class="nav-link br-menu-link border-primary" data-toggle="tab" value="Deslocamento" style="height: 30px; width:auto; background-color: #1a2432">
              </div>
                
              </div>
             </div>
      </div>
      
    </div>
    <!-- terceira aba -->
  <div class="tab-pane fade" id="nav-pecas" role="tabpanel" aria-labelledby="nav-messages-tab">
    <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-3 mr-1">
      
    <div class="row">
      
    
    <div class="col-md-8 col-lg-8 col-sm-8 col-xl-8" style="float: left; width: 1200px">
       <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-1 ml-3" style="width:auto; padding: 0px">
           <div class="container-fluid">
             <div class="row">
               <div class="bd bd-white-3 rounded table-responsive">
                <table class="table table-bordered table-hover m-0 listagem"  style="max-height: 300px; float: left">
                  <thead class="bg-black-9">
                  <tr class="bg-black-9">
                  <th>Peça Nº</th>
                  <th>Descrição</th>
                  <th>Valor UN</th>
                  <th>QTD</th>
                  <th>Valor Total</th>
                  <th>Técnico</th>
                   </tr>
                  </thead>
                  <tbody class="table_list"> 
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
               
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
             
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                 
                </tr>
                 <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                 
                </tr>
              </tbody>
                </table>
              </div>
              
            </div>
          </div>
        </div>
         
      </div>
      <!-- Botoes da esquerda -->
     <div class="col-md-4 col-lg-4 col-xl-4 mt-3"  style="float: left;">

        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Peças do Estoque" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Peças Avulsos" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Kit Montado" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Inserir Orc. Padrao" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-primary" data-toggle="tab" value="Requisição" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
         <input type="button" class="nav-link br-menu-link border-top-0 border-right-0 border-left-0 border-danger" data-toggle="tab" value="Excluir" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432">
        </div>
        </div>
   
      </div>
    </div>
  
  <!-- Quarta aba -->
  <div class="tab-pane fade" id="nav-ObsLaudotecnico" role="tabpanel" aria-labelledby="nav-ObsLaudotecnico-tab">
    <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3 mb-3 mr-1">
      
    <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-3">
       <textarea placeholder="Laudo técnico detalhado"  style=" min-width: 1000px; max-width: 1600px;min-height: 300px; max-height: 550px "></textarea>
       <input type="button" class="br-menu-link border-top-0 border-left-0 border-right-0 border-primary mb-1" name="" value="Preencher laudo" style="background-color: transparent">
      </div>
    </div>
   </div>   
    </div>
  <!-- Quinta aba -->
<div class="tab-pane fade" id="nav-miscelanea" role="tabpanel" aria-labelledby="nav-miscelanea-tab">

   <div class="container-fluid">
    <div class="card col-sm-12 col-md-12 col-xl-12 col-lg-12 mt-3 mb-3">
  
  <div class="card-body" style="width: 1000px">
    
     <div class="row m">
      <!-- coluna início da um -->
      <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 m-0 p-0" >

     <p class=" m-0 p-0" style="float: left; color:#F5FFFA"><u><strong>Garantia/Garantidor</strong></u></p>  
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 ">
              <p style="color:#F5FFFA"><u><strong>Nota Fiscal Entrada / Remessa</strong></u></p>  
             </div>
    </div>
    <div class="row">
      <div class="card col-md-8 col-lg-8 col-sm-8 col-xl-8">
     
       <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-1 p-2">
        <h6 >Fábrica / Garantidor(Lista de clientes garantidores)</h6>
          <div class="input-group mb-3">
  
           <select class="custom-select" id="inputGroupSelect01">
           <option selected>Selecionar</option>
            <option value="1">a</option>
            <option value="2">b</option>
           <option value="3">c</option>
            </select>
          </div>
                 <div class="row">
            
          
                 <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1">
                     <h6>Nº NF de venda: </h6>
                    <input type="text" class="form-control p-2 mb-2" placeholder="Nº NF de venda" name="" >
                     <h6>Data da compra: </h6>
                     <input type="date" class="form-control mb-2" placeholder="Revendedor" name="" >
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1">
                       <h6>Nº Certificado de garantia: </h6>
                     <input type="text" class="form-control p-2 mb-2" placeholder="Nº certificado de garantia" name="" >
                      <h6>Revendedor: </h6>
                     <input type="text" class="form-control mb-2" placeholder="Revendedor" name="" >
                   </div>
                    
                   </div>
                    
          </div>
             </div>
             <!-- coluna dois -->

           <div class="col-md-4 col-lg-4 col-sm-4 col-xl-4 mt-0">
              
           <div class="card col-md-12 col-lg-12 col-sm-12 col-xl-12 mt-0 p-0">
               <div class="card p-2">
                <div class="row">

                 <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1 mb-1">
                    <input type="text" class="form-control p-2 mb-2" placeholder="Nº da NF" name="" >
                                     
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1 ">
                     <input type="text" class="form-control p-2 mb-2" placeholder="Valor NF" name="" >
                    
                   </div>
                   </div>
                   <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     
                   
                   <div class="row">
                     <h6 style="font-size: 14px">Emissor:(lista de fornecedores) </h6>
                       <div class="input-group mb-3">
                            
                              <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Selecionar</option>
                               <option value="1">a</option>
                               <option value="2">b</option>
                              <option value="3">c</option>
                               </select>
                      </div>    
                   </div>
                   </div>
               </div>
               <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 m-0  mt-3 p-3">

                    <p class=" m-0 p-0" style="color:#F5FFFA"><u><strong>Ordem de serviço de Terceiros/Parceiros</strong></u></p>  
              </div>
               <div class="card mt-1 p-2">
                <div class="row">
                  
                 <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1 mb-1">

                    <input type="text" class="form-control p-2 mb-2" placeholder="Nº OS Terceiros" name="" >
                                     
                   </div>
                   <div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-1 ">
                     <input type="text" class="form-control p-2 mb-2" placeholder="Nº OS fabricante" name="" >
                    
                   </div>
                   </div>
                   <div class="col-sm-12">
                     
                   
                   <div class="row">
                    <h6 style="font-size: 14px">Emissor:(lista de fornecedores) </h6>
                       <div class="input-group mb-3">
  
                              <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Selecionar</option>
                               <option value="1">a</option>
                               <option value="2">b</option>
                              <option value="3">c</option>
                               </select>
                      </div>    
                   </div>
                   </div>
               </div>
               </div>
       </div>
     </div>
  </div>
  
</div>
  
</div>
</div>
</div>

<!-- fim  da quinta aba -->

</div>
<!-- fim das abas -->
   <div class="container mt-1">
       <div class="row">
           <div class=" col-sm-3 col-md-3 col-lg-3 col-xl-3" >
            <h6 style="font-size: 14px; color: #F5FFFA">Técnico Responsável:</h6>
                <div class="input-group mb-3" style="float: left;">
             
               <select class="custom-select" id="inputGroupSelect01">
               <?php
                 require 'conf/pdo.php';
                 $usuario = $pdo->query("SELECT * FROM usuario");
                 while ($user = $usuario->fetch()) {
                  echo "<option value='".$user['usuario']."'>".$user['usuario']."</option>";
                 }
               ?>
                </select>
              </div>
              
       </div>
       <div class=" col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <h6 style="font-size: 14px; color: #F5FFFA">Prioridade:</h6>
                <div class="input-group mb-3">
             
             <select class="select" id="inputGroupSelect01">
               <option selected>Baixa</option>
               <option value="1">média</option>
               <option value="2">Crítico</option>
               
                </select>
              </div>
           </div>
           <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mr-auto mt-3">
              <input type="button" class="nav-link br-menu-link ml-auto mt-3 far fa-folder-open" data-toggle="tab" value="Fotos/Docs" style="padding-left: 4px;height: 30px; width:auto; background-color: #1a2432; border-radius: 10px">
              
           </div>

   </div>
</div>
 
</form>
<form>
   
</form>
    
   </div>
     <?php include 'padrao/footer.php'; ?>
   </div>
  
     </div>


   </div>
   
<!-- Modal de busca -->
<div class="modal" id="modalbusca" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Abri OS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Confirmar</button>

      </div>
    
    </div>
 
  </div>

</div>
<!-- fim do modal busca -->
<!-- inicio da modal de equipamento -->

<!-- modal cadastro equipamento -->


 </body>
</html>

<script>
  $(function () {
    $('#myTab li:first-child a').tab('show')
  })
</script>
   <script src="js/equipamento.js"></script>