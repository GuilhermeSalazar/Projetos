<?php 
session_start();

require '../conf/db.php';

$id_cliente = $_SESSION['clienteid'];

 $busca = mysqli_query($sql,"SELECT * FROM cliente where id like '$id_cliente'");

 $arry = mysqli_fetch_array($busca);

 $nome = $arry['nome'];
 $razao = $arry['razao'];


 $fisica= "";
 $juridica= "";


   if (empty($razao)) {
    
    $juridica = "style='display:none'";
    
   }else{

    $fisica = "style='display:none'";



   }


 ?>
<h2>Editar Cadastro</h2>
<div class="form-layout form-layout-1 editar_cliente_dados">
            <div class='row mg-b-25'>
                <div class='col-lg-4'>
                <div class='form-group'>
                  <label class='form-control-label'>Nome: </label> 
                  <input class='form-control form-control-dark' type='text' name='nome' <?php echo " value='".$arry['nome']."'"; ?> placeholder=''>
                </div>
              </div>
               <div class='col-lg-3' <?php echo $juridica; ?> >
              <div class='form-group'>
                  <label class='form-control-label'>Razão Social: </label> 
                  <input class='form-control form-control-dark' type='text' name='razao' <?php echo "value='".$arry['razao']."'"; ?> placeholder=''>
                </div>
              </div>
              <div class='col-lg-5' <?php echo $juridica; ?> >
              <div class='form-group'>
                  <label class='form-control-label'>Nome Fantasia: </label> 
                  <input class='form-control form-control-dark' type='text' name='fantasia' <?php echo "value='".$arry['fantasia']."'"; ?> placeholder=''>
                </div>
              </div>
              <div <?php echo $fisica; ?> class='col-lg-3'>
                <div class='form-group'>
                  <label class='form-control-label'>CPF: </label>
                  <input class='form-control form-control-dark' type='text' name='cpf' <?php echo "value='".$arry['cnpj_cpf']."'"; ?>  placeholder=''>
                </div>
              </div>
              <div class='col-lg-3' <?php echo $juridica; ?>>
                <div class='form-group'>
                  <label class='form-control-label'>CNPJ: </label>
                  <input class='form-control form-control-dark' type='text' name='cnpj' <?php echo "value='".$arry['cnpj_cpf']."' "; ?> placeholder=''>
                </div>
              </div>
              <div class='col-lg-2' <?php echo $juridica; ?>>
                <div class='form-group'>
                  <label class='form-control-label'>Inscrição Est:</label>
                  <input class='form-control form-control-dark' name='inscricao'<?php echo "value='".$arry['rg_inscri']."' "; ?> type='text' name='rg' placeholder=''>
                </div>
              </div>

              <div  <?php echo $fisica; ?> class='col-lg-2'>
                <div class='form-group'>
                  <label class='form-control-label'>RG:</label>
                  <input class='form-control form-control-dark' <?php echo "value='".$arry['rg_inscri']."'";  ?>  type='text' name='rg' placeholder=''>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email:</label>
                  <input class="form-control form-control-dark" type="text" name="email" <?php echo "value='".$arry['email']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Telefone:</label>
                  <input class="form-control form-control-dark" type="text" name="telefone1" <?php echo "value='".$arry['telefone1']."'"; ?> placeholder="">
                  <input class="form-control form-control-dark  mg-t-10" type="text" <?php echo "value='".$arry['telefone2']."'"; ?> name="telefone2"  placeholder="telefone2">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Celular:</label>
                  <input class="form-control form-control-dark" type="text" name="celular1"  <?php echo "value='".$arry['celular1']."'"; ?> placeholder="">
                  <input class="form-control form-control-dark mg-t-10" type="text" name="celular2"  <?php echo "value='".$arry['celular2']."'"; ?> placeholder="Whatsapp">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">CEP:</label>
                  <input class="form-control form-control-dark" type="text" name="cep"  <?php echo "value='".$arry['cep']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Endereço:</label>
                  <input class="form-control form-control-dark" type="text" name="endereco"  <?php echo "value='".$arry['endereco']."'"; ?> placeholder="">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">Número:</label>
                  <input class="form-control form-control-dark" type="text" name="numero"  <?php echo "value='".$arry['numero']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Complemento:</label>
                  <input class="form-control form-control-dark" type="text" name="complemento"  <?php echo "value='".$arry['complemento']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Bairro:</label>
                  <input class="form-control form-control-dark" type="text" name="bairro"  <?php echo "value='".$arry['bairro']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Cidade:</label>
                  <input class="form-control form-control-dark" type="text" name="cidade"  <?php echo "value='".$arry['cidade']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
               <div class="col-lg-2">
                <div class="form-group">
                  <label class="form-control-label">UF:</label>
                  <input class="form-control form-control-dark" type="text" name="uf"  <?php echo "value='".$arry['uf']."'"; ?> placeholder="">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer" >
              <button  style="margin-top: -30px" class="float-right border-0 br-menu-link active">Editar</button>
            </div><!-- form-layout-footer -->
          </div>
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
                       url:'conf/edita-cliente.php',
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