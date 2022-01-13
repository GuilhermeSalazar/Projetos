<?php 
 $sql = mysqli_connect('localhost','root','','mldisplay')or die("erro");
   
 $nome = $_POST['nome'];
 $razao = $_POST['razao'];
 $cnpj = $_POST['cnpj'];
 $inscri = $_POST['inscri'];
 $telefone = $_POST['telefone'];
 $cep = $_POST['cep'];
 $endereco = $_POST['endereco'];
 $numero = $_POST['numero'];
 $complemento = $_POST['complemento'];
 $bairro = $_POST['bairro'];
 $cidade = $_POST['cidade'];
 $estado = $_POST['estado'];

  mysqli_query($sql,"INSERT INTO empresa  values (default,'$nome','$razao','$cnpj','$inscri','$telefone','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$estado')")or die(mysqli_error());
 ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Configuração do sistema</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <link rel="stylesheet" href="../css/bracket.dark.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">

      <div class='login-wrapper wd-400 wd-xs-700 pd-25 pd-xs-40 bg-br-primary bd bd-white-1 rounded'>
        <div class='signin-logo tx-center tx-28 tx-bold tx-white'><span class='tx-normal'></span>Configuração Finalizada<span class='tx-info'></span> <span class='tx-normal'></span></div>
        <a href='http://localhost/acesso%202/'><div class='tx-center mg-b-4'>Iniciar o sistema</div></a>          
        </div>
        
        <div class="mg-t-40 tx-center"> <a href="" class="tx-info"></a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    
   
  </body>
</html>
