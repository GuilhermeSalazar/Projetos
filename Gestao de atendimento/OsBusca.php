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
<style type="text/css">
	.card *{
   padding: 1px;
   margin: 10px;}

  

input{
 	padding-left: 10px;
 	height: 30px; 
 	width:60px;
 }
 
</style>
<link rel="stylesheet" type="text/css" href="css/os.css">
<!-- codigo da pagina -->
<div class="br-mainpanel" >

<div class="corpo-osbusca">
<form >
  <div class="card mb-0">
  <div class="row">
  	<!-- input de pesquisa -->
    <div class="col-4 ml-auto" id="corpo-osbusca">

      <input type="text"  placeholder="Pesquisar" name="pesquisar" id="searchbox" type="text" class="form-control" alt="listagem">
     
    </div>
   <!--  <div class="col-4">
      <input type="cnpj" class="form-control" placeholder="CNPJ/CPF" style="width: 300px;">
    </div> -->
    <!-- tabela -->
 <div class="bd bd-white-3 rounded table-responsive"  style="max-height: 250px ;overflow: auto;">
  <table class="table table-bordered mg-b-0  table-hover m-0 listagem">
  <thead class="bg-black-9">

                <tr class="bg-black-9">
                  <th>Codigo</th>
                  <th>Nome</th>
                  <th>CNPJ / CPF</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Contratos</th>
                  <th>Software</th>
                  <th>Status</th>
                </tr>
              </thead>
  <tbody class="table_list"> 
  	<!-- PDO -->
  	<?php
     require 'conf/pdo.php';
      $registro = $pdo->query('SELECT * FROM cliente');
      while ($tabelacliente = $registro->fetch()) {
         

       switch ($tabelacliente['status']) {
       	case '1':
       		 $status = "Ativo";
       		 $corbusca = " text-success";

       		break;
       	case '2':
       		$status = "Cancelado";
       		$corbusca = "text-danger";
       		break;
       }

       
// logica do nome e Razao
        if(!empty($tabelacliente['nome']) && empty($tabelacliente['razao'])){
         
          $regis = $tabelacliente['nome'];
        }
        if(!empty($tabelacliente['nome']) && !empty($tabelacliente['razao'])){


                                          $regis = $tabelacliente['razao'];
                                      }

      	echo "
      <tr id='linha_clientes'>
      <th scope='row'>".$tabelacliente['id']."</th>
     
      <td>".$regis." <a href='Osequipamentos.php' style='color:#0866C6'>Selecionar</a>
      </td>
      
      <td>".$tabelacliente['cnpj_cpf']."</td>
      <td>".$tabelacliente['email']."</td>
      <td>".$tabelacliente['telefone1']."</td>
      <td>".$tabelacliente['contratos']."</td>
      <td></td>
      <td class='".$corbusca."'>".$status."</td>
    </tr>";
      }
  	?>
    
  </tbody>
</table>

</div>
<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"><input type="button" value="Novo Cliente" class="br-menu-link border-0"style="padding-left: 4px;height: 30px; width:100px; background-color: #1a2432"></a>

<!-- <li class="nav-item mg-r-5 c_clientes c_cadastrar br-menu-link active ml-auto"><a style="color:#fff" class="nav-link  " data-toggle="tab" href="#" role="tab" style="padding-left: 4px;height: 30px; width:100px"><i class="menu-item-icon icon ion-ios-paper-outline tx-16"></i>Lista</a></li>
<input type="button" value="Cancelar"  class="border-0 btn-cancelar"style="padding-left: 3px;height: 41px; width:60px"> -->
  </div>
   
   </div>
    <!-- modal cliente -->
 

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background-color: #141d28">
      <div class="d-md-flex col-lg-4 justify-content-between pd-25">
                
                <div class="d-sm-flex">
                  <div class="cadastro_titulo">
                  <h6 class="tx-20  tx-white  tx-spacing-1">Cadastro de Pessoa <span>Jurídica</span></h6>
                  <button  style="display: none" class="p_juridica  border-0 br-menu-link active">Jurídica</button>
                  <!-- <button class="s p_fisica border-0 br-menu-link active">Física</button> -->
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
              <button value="J" name="Cadastrar_cliente" class="submit_c_ju border-0 br-menu-link active">Cadastrar</button>
              <button style="display: none" value="F" class="submit_c_fi border-0 br-menu-link active">Cadastrar</button>
            </div><!-- form-layout-footer -->
          </div>
          </div>
                <div id="ch5" class="ht-250 ht-sm-30"></div>
              </div>
    </div>
  </div>
  </div>
  <?php include 'padrao/footer.php';?>
</form>
<div id="ch5" class="ht-250 ht-sm-30"></div>
</div>

</div>

 <div class="col-lg-4 mg-t-20 mg-lg-t-0"></div>

<script type="text/javascript">
$(function(){
    $("#corpo-osbusca input").keyup(function(){
        //pega o css da tabela 
        var tabela = $(this).attr('alt');
        if( $(this).val() != ""){
            $("."+tabela+" tbody>tr").hide();
            $("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        } else{
            $("."+tabela+" tbody>tr").show();
        }
    }); 
});
$.extend($.expr[":"], {
    "contains-ci": function(elem, i, match, array) {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});
 $(".table tr td a").click(function(event){
    event.preventDefault();

    var href = $(this).attr("href");

    $.ajax({
     type:'POST',
     url:'Osequipamentos.php',
     data: { id : href} 
    }).done(function(retdd){
           location.replace("Osequipamentos.php");
    });

  
   })

</script>
