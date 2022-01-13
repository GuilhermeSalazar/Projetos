<?php 

 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");
   
    $busca = mysqli_query($sql,"SELECT * FROM empresa") or die(  "123");
      
      if($linha = mysqli_fetch_array($busca)){


         $nome = $linha['nome']; 

      }

  session_start();

  $login = $_SESSION['nome'];
  $senha = $_SESSION['senha'];
  $perfil = $_SESSION['perfil'];
  $id = $_SESSION['id'];
  $perfil = $_SESSION['perfil'];
  $cargoid = $_SESSION['cargo'];
  $email = $_SESSION['email'];
  $estatus = $_SESSION['estatus'];
   $d_email = '00';
        $d_telefone = '000';
        $d_endereco = '000';
        $d_municipio = '000';
        $d_cpf = '000';
        $d_rg = '0000';
        $d_data = '00';


   if (empty($login)) {
      session_destroy();
    header("location: /acesso%202/logar.php");



}




  $traz = mysqli_query($sql,"SELECT * FROM cargo where id like'$cargoid'");

  $carg = mysqli_fetch_array($traz);
 
 $cargo = $carg['cargo'];

      $dados = mysqli_query($sql,"SELECT * FROM usuario where id like '$id'");


     if($trazdados = mysqli_fetch_array($dados)){

        $d_email = $trazdados['email'];
        $d_nome = $trazdados['nome'];
        $d_telefone = $trazdados['telefone'];
        $d_endereco = $trazdados['endereco'];
        $d_municipio = $trazdados['bairro'];
        $d_cidade = $trazdados['cidade'];
        $d_uf = $trazdados['uf'];
        $d_cpf = $trazdados['cpf'];
        $d_rg = $trazdados['rg_cnh'];
        $d_data = $trazdados['data_nasc'];

     }   

 ?>


<!DOCTYPE html>
<html lang="pt-br">
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
    <title class="notfica"> PRONTO SOLUÇÕES</title>
   <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
    <link rel="stylesheet" href="css/bracket.dark.css">
    <link rel="stylesheet" href="css/config.css">
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="css/msg.css" type="text/css">
  </head>
 <body>
    
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><img class="wd-30" src="img/banners/logo.png" alt=""><a class="tx-18 mg-l-2" href="painel.php"><?php echo $nome; ?><span></span></a></div>
    