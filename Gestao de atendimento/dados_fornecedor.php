<?php 
session_start();

 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");

/* trabalhando variaveis */


$cliente_id = $_POST['cadastro'];


$_SESSION['clienteid'] = $cliente_id;


 /* buscando cliente no banco */


 $buscar = mysqli_query($sql,"SELECT * FROM fornecedor where id like '$cliente_id'");

 $array = mysqli_fetch_array($buscar);

 $nome = $array['nome'];
 $razao = $array['razao'];

$nome_razao = "";
$cnpj_cpf = "";
$rg_inscri = "";
 $fisica= "";
 $juridica= "";
   if(empty($razao)){

    $nome_razao = $nome;
    $cnpj_cpf = "CPF:";
    $rg_inscri = "RG:";
   }else{
    $nome_razao = $razao;
    $cnpj_cpf = "CNPJ:";
    $rg_inscri = "INSCRIÇÃO ESTADUAL:";
   }

if (empty($razao)) {
    
    $juridica = "style='display:none'";
    
   }else{

    $fisica = "style='display:none'";



   }




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
       <i style="color:#17A2B8" class="fa fa-building tx-70 lh-10 "></i>
        <div>
          <h4><?php echo $nome_razao; ?></h4>
          <p class="mg-b-0"></p>
        </div>
      </div>
  <div class="br-pagebody">

        <div class="card bd-gray-400">
          <div class="card-body pd-30 pd-md-60">
            <div class="d-md-flex justify-content-between flex-row-reverse">
              <h1 class="mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold"><?php echo $cliente_id; ?></h1>
              <div class="col-md mg-t-40 mg-l-20">
              </div><!-- col -->
              <div class="mg-t-25 mg-md-t-0">
                <h2 class="tx-primary">DADOS</h2>
                <p class="lh-7"><strong><?php echo $cnpj_cpf; ?></strong> <?php echo $array['cnpj_cpf']; ?><br>
                <strong><?php echo $rg_inscri; ?> </strong><?php echo $array['inscri_rg']; ?><br>
                <strong>Telefone </strong> <?php echo $array['telefone1']." : ".$array['telefone2']; ?><br>
                <strong>Celular </strong> <?php echo $array['celular1']." : ".$array['celular2']; ?><br>
               <strong>Email: </strong> <?php echo $array['email']; ?></p>
              </div>

            </div><!-- d-flex -->

            <div class="row mg-t-20">
              <div class="col-md">
                <label class="tx-uppercase tx-13 tx-bold mg-b-20">Endereço</label>
                <p class="lh-7"><?php echo $array['endereco']; ?>,  <?php echo $array['numero']; ?>, <?php echo $array['complemento']; ?>,  <?php echo $array['bairro']; ?>, <?php echo $array['cidade']; ?>, <?php echo $array['uf']; ?><br>
                CEP: <?php echo $array['cep']; ?><br>
                </p>
              </div><!-- col -->
           

            </div><!-- row -->
            <div class="ht-md-60 wd-200 wd-md-auto bg-black-2 pd-y-20 pd-md-y-0 pd-md-x-20 d-md-flex align-items-center justify-content-center">
            <ul class="nav nav-effect nav-effect-1 flex-column flex-md-row menu-dados-cliente" role="tablist">
              <li class="nav-item current"><a class="nav-link " data-toggle="tab" href="altera-cadastro.php" role="tab" aria-selected="true">Alterar Cadastro</a></li>
            </ul>
          </div>
          <div id="contender">
            <h2>Editar Cadastro</h2>
<div class="form-layout form-layout-1 editar_cliente_dados">
            <div class='row mg-b-25'>
                <div class='col-lg-4'>
                <div class='form-group'>
                  <label class='form-control-label'>Nome: </label> 
                  <input class='form-control form-control-dark' type='text' name='nome' <?php echo " value='".$array['nome']."'"; ?> placeholder=''>
                </div>
              </div>
               <div class='col-lg-3' <?php echo $juridica; ?> >
              <div class='form-group'>
                  <label class='form-control-label'>Razão Social: </label> 
                  <input class='form-control form-control-dark' type='text' name='razao' <?php echo "value='".$array['razao']."'"; ?> placeholder=''>
                </div>
              </div>
              <div class='col-lg-5' <?php echo $juridica; ?> >
              <div class='form-group'>
                  <label class='form-control-label'>Nome Fantasia: </label> 
                  <input class='form-control form-control-dark' type='text' name='fantasia' <?php echo "value='".$array['fantasia']."'"; ?> placeholder=''>
                </div>
              </div>
              <div <?php echo $fisica; ?> class='col-lg-3'>
                <div class='form-group'>
                  <label class='form-control-label'>CPF: </label>
                  <input class='form-control form-control-dark' type='text' name='cpf' <?php echo "value='".$array['cnpj_cpf']."'"; ?>  placeholder=''>
                </div>
              </div>
              <div class='col-lg-3' <?php echo $juridica; ?>>
                <div class='form-group'>
                  <label class='form-control-label'>CNPJ: </label>
                  <input class='form-control form-control-dark' type='text' name='cnpj' <?php echo "value='".$array['cnpj_cpf']."' "; ?> placeholder=''>
                </div>
              </div>
              <div class='col-lg-2' <?php echo $juridica; ?>>
                <div class='form-group'>
                  <label class='form-control-label'>Inscrição Est:</label>
                  <input class='form-control form-control-dark' name='inscricao'<?php echo "value='".$array['inscri_rg']."' "; ?> type='text' name='rg' placeholder=''>
                </div>
              </div>

              <div  <?php echo $fisica; ?> class='col-lg-2'>
                <div class='form-group'>
                  <label class='form-control-label'>RG:</label>
                  <input class='form-control form-control-dark' <?php echo "value='".$array['inscri_rg']."'";  ?>  type='text' name='rg' placeholder=''>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input class="form-control form-control-dark" type="text" name="email" <?php echo "value='".$array['email']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Telefone:</label>
                  <input class="form-control form-control-dark" type="text" name="telefone1" <?php echo "value='".$array['telefone1']."'"; ?> placeholder="">
                  <input class="form-control form-control-dark  mg-t-10" type="text" <?php echo "value='".$array['telefone2']."'"; ?> name="telefone2"  placeholder="telefone2">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Celular:</label>
                  <input class="form-control form-control-dark" type="text" name="celular1"  <?php echo "value='".$array['celular1']."'"; ?> placeholder="">
                  <input class="form-control form-control-dark mg-t-10" type="text" name="celular2"  <?php echo "value='".$array['celular2']."'"; ?> placeholder="Whatsapp">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">CEP:</label>
                  <input class="form-control form-control-dark" type="text" name="cep"  <?php echo "value='".$array['cep']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Endereço:</label>
                  <input class="form-control form-control-dark" type="text" name="endereco"  <?php echo "value='".$array['endereco']."'"; ?> placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Número:</label>
                  <input class="form-control form-control-dark" type="text" name="numero"  <?php echo "value='".$array['numero']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Complemento:</label>
                  <input class="form-control form-control-dark" type="text" name="complemento"  <?php echo "value='".$array['complemento']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control form-control-dark" type="text" name="bairro"  <?php echo "value='".$array['bairro']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Cidade:</label>
                  <input class="form-control form-control-dark" type="text" name="cidade"  <?php echo "value='".$array['cidade']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">UF:</label>
                  <input class="form-control form-control-dark" type="text" name="uf"  <?php echo "value='".$array['uf']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer" >
              <button  style="margin-top: -30px" class="float-right border-0 br-menu-link active">Editar</button>
            </div><!-- form-layout-footer -->
          </div>
          </div>
           
            <hr class="mg-b-60 bd-white-1">
            
          </div><!-- card-body -->
        </div><!-- card -->
      </div>      
      </div>
 <?php   include 'padrao/footer.php'; ?>
       <script type="text/javascript">
                 $(".form-layout-footer button").click(function(){
                  
                  var nome = $(".form-group input[name='nome']").val();
                  var razao = $(".form-group input[name='razao']").val();
                  var fantasia = $(".form-group input[name='fantasia']").val();
                  var rg = $(".form-group input[name='rg']").val();
                  var inscricao = $(".form-group input[name='inscricao']").val();
                  var cnpj = $(".form-group input[name='cnpj']").val();
                  var cpf = $(".form-group input[name='cpf']").val();
                  var email = $(".form-group input[name='email']").val();
                  var telefone1 = $(".form-group input[name='telefone1']").val();
                  var telefone2 = $(".form-group input[name='telefone2']").val();
                  var celular1 = $(".form-group input[name='celular1']").val();
                  var celular2 = $(".form-group input[name='celular2']").val();
                  var cep = $(".form-group input[name='cep']").val();
                  var endereco = $(".form-group input[name='endereco']").val();
                  var numero = $(".form-group input[name='numero']").val();
                  var complemento = $(".form-group input[name='complemento']").val();
                  var bairro = $(".form-group input[name='bairro']").val();
                  var cidade = $(".form-group input[name='cidade']").val();
                  var uf = $(".form-group input[name='uf']").val();

                  /*envio em ajax*/


                   $.ajax({
                       type:'post',
                       url:'conf/edita-fornecedor.php',
                       data:{
                         nome : nome,
                         razao : razao,
                         fantasia : fantasia,
                         rg : rg,
                         inscricao : inscricao,
                         cnpj : cnpj,
                         cpf : cpf,
                         email : email,
                         telefone1 : telefone1,
                         telefone2 : telefone2,
                         celular1 : celular1,
                         celular2 : celular2,
                         cep : cep,
                         endereco : endereco,
                         numero : numero,
                         complemento : complemento,
                         bairro : bairro,
                         cidade : cidade,
                         uf : uf
                       }}).done(function(returno){
                        alert(returno);
                  $(".form-group input[name='nome']").val(nome);
                  $(".form-group input[name='razao']").val(razao);
                  $(".form-group input[name='fantasia']").val(fantasia);
                  $(".form-group input[name='rg']").val(rg);
                  $(".form-group input[name='inscricao']").val(inscricao);
                  $(".form-group input[name='cnpj']").val(cnpj);
                  $(".form-group input[name='cpf']").val(cpf);
                  $(".form-group input[name='email']").val(email);
                  $(".form-group input[name='telefone1']").val(telefone1);
                  $(".form-group input[name='telefone2']").val(telefone2);
                  $(".form-group input[name='celular1']").val(celular1);
                  $(".form-group input[name='celular2']").val(celular2);
                  $(".form-group input[name='cep']").val(cep);
                  $(".form-group input[name='endereco']").val(endereco);
                  $(".form-group input[name='numero']").val(numero);
                  $(".form-group input[name='complemento']").val(complemento);
                  $(".form-group input[name='bairro']").val(bairro);
                  $(".form-group input[name='cidade']").val(cidade);
                  $(".form-group input[name='uf']").val(uf);
                 })
                 })
          </script>