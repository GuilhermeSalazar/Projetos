

<?php

$sql = mysqli_connect('localhost','root','','mldisplay')or die('erro');


  $busca = mysqli_query($sql,'SELECT * FROM Empresa');

  $cont = mysqli_num_rows($busca);

 $result = "";
   

   if ($cont == 1) {
     $linha = mysqli_fetch_array($busca);
    $result = "<form action='Editar.php' method='post' id='form'>
             <div class='form-group'>
          <input type='text' name='nome' value='".$linha['nome']."' class='form-control form-control-dark' placeholder='Nome'>
        </div>
        <div class='form-group'>
          <input type='text' name='razao' value='".$linha['razao']."' class='form-control form-control-dark' placeholder='Razão Social'>
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text' name='cnpj' value='".$linha['cnpj']."' class='form-control form-control-dark' placeholder='CNPJ'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' value='".$linha['inscri']."' name='inscri' class='form-control form-control-dark' placeholder='Inscrição estadual'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' value='".$linha['telefone']."' name='telefone' class='form-control form-control-dark' placeholder='Telefone'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text' name='cep' value='".$linha['cep']."' class='form-control form-control-dark' placeholder='CEP'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='endereco' value='".$linha['endereco']."' class='form-control form-control-dark' placeholder='Endereço'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='numero' value='".$linha['numero']."' class='form-control form-control-dark' placeholder='Numero'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
         <div class='form-group'>
          <input type='text'value='".$linha['complemento']."' name='complemento' class='form-control form-control-dark' placeholder='Complemento'>
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text' value='".$linha['bairro']."' name='bairro' class='form-control form-control-dark' placeholder='Bairro'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text'value='".$linha['cidade']."' name='cidade' class='form-control form-control-dark' placeholder='Cidade'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='estado' value='".$linha['estado']."' class='form-control form-control-dark' placeholder='Estado'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
               <input class=' btn btn-info' type='submit' value='Editar'>
             </form> ";
    } 
 if ($cont == 0) {
     $linha = mysqli_fetch_array($busca);
    $result = "<form action='cadastrar.php' method='post' id='form'>
             <div class='form-group'>
          <input type='text' name='nome'  class='form-control form-control-dark' placeholder='Nome'>
        </div>
        <div class='form-group'>
          <input type='text' name='razao'  class='form-control form-control-dark' placeholder='Razão Social'>
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text' name='cnpj'  class='form-control form-control-dark' placeholder='CNPJ'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text'  name='inscri' class='form-control form-control-dark' placeholder='Inscrição estadual'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text'  name='telefone' class='form-control form-control-dark' placeholder='Telefone'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text' name='cep'  class='form-control form-control-dark' placeholder='CEP'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='endereco'  class='form-control form-control-dark' placeholder='Endereço'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='numero'  class='form-control form-control-dark' placeholder='Numero'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
         <div class='form-group'>
          <input type='text' name='complemento' class='form-control form-control-dark' placeholder='Complemento'>
        </div>
        <div class='form-group'>
          <div class='row row-xs'>
            <div class='col-sm-4'>
               <div class='form-group'>
          <input type='text'  name='bairro' class='form-control form-control-dark' placeholder='Bairro'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='cidade' class='form-control form-control-dark' placeholder='Cidade'>
        </div>
            </div><!-- col-4 -->
            <div class='col-sm-4 mg-t-20 mg-sm-t-0'>
               <div class='form-group'>
          <input type='text' name='estado'  class='form-control form-control-dark' placeholder='Estado'>
        </div>
            </div><!-- col-4 -->
          </div><!-- row -->
        </div>
               <input class=' btn btn-info' type='submit' value='cadastrar'>
             </form> ";
    }


?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Twitter -->
    <meta name='twitter:site' content='@themepixels'>
    <meta name='twitter:creator' content='@themepixels'>
    <meta name='twitter:card' content='summary_large_image'>
    <meta name='twitter:title' content='Bracket Plus'>
    <meta name='twitter:description' content='Premium Quality and Responsive UI for Dashboard.'>
    <meta name='twitter:image' content='http://themepixels.me/bracketplus/img/bracketplus-social.png'>

    <!-- Facebook -->
    <meta property='og:url' content='http://themepixels.me/bracketplus'>
    <meta property='og:title' content='Bracket Plus'>
    <meta property='og:description' content='Premium Quality and Responsive UI for Dashboard.'>

    <meta property='og:image' content='http://themepixels.me/bracketplus/img/bracketplus-social.png'>
    <meta property='og:image:secure_url' content='http://themepixels.me/bracketplus/img/bracketplus-social.png'>
    <meta property='og:image:type' content='image/png'>
    <meta property='og:image:width' content='1200'>
    <meta property='og:image:height' content='600'>

    <!-- Meta -->
    <meta name='description' content='Premium Quality and Responsive UI for Dashboard.'>
    <meta name='author' content='ThemePixels'>

    <title>Configuração do sistema </title>

    <!-- vendor css -->
    <link href='../lib/@fortawesome/fontawesome-free/css/all.min.css' rel='stylesheet'>
    <link href='../lib/ionicons/css/ionicons.min.css' rel='stylesheet'>
    <link href='../lib/select2/css/select2.min.css' rel='stylesheet'>

    <!-- Bracket CSS -->
    <link rel='stylesheet' href='../css/bracket.css'>
    <link rel='stylesheet' href='../css/bracket.dark.css'>
  </head>

  <body>

    <div class='d-flex align-items-center justify-content-center ht-100v'>

      <div class='login-wrapper wd-400 wd-xs-700 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded'>
        <div class='signin-logo tx-center tx-28 tx-bold tx-white'><span class='tx-normal'></span>Configuração<span class='tx-info'></span> <span class='tx-normal'></span></div>
        <div class='tx-center mg-b-40'>Empresa</div>
            <?php echo $result; ?>         <!-- row -->
        </div><!-- form-group -->
        
        <div class='mg-t-40 tx-center'> <a href=' class='tx-info'></a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    <script src='../lib/jquery/jquery.min.js'></script>
    <script src='../lib/jquery-ui/ui/widgets/datepicker.js'></script>
    <script src='../lib/bootstrap/js/bootstrap.bundle.min.js'></script>
    <script src='../lib/select2/js/select2.min.js'></script>
    <script type='text/javascript'>
     $('#form').submit(function(event){
      event.prevenDefault();

      alert('toi');
     });

    </script>
   
  </body>
</html>
