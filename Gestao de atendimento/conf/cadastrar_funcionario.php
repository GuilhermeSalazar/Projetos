<?php 

require 'db.php';


// declarando variaveis 


 $nome = $_POST['nome'];
 $cpf = $_POST['cpf'];
 $nasc = $_POST['nasc'];
 $funcao = $_POST['funcao'];
 $tel = $_POST['telefone'];
 $email = $_POST['email'];
 $endereco = $_POST['endereco'];
 $bairro = $_POST['bairro'];
 $cidade = $_POST['cidade'];
 $uf = $_POST['uf'];
 $rg = $_POST['rg'];
 $login = $_POST['login'];
 $senha =  $_POST['senha'];

  mysqli_query($sql,"INSERT INTO usuario Values('','$login','$nome','$senha','$email','default.jpg','$funcao','0','$rg','$cpf','$nasc','$tel','$endereco','$bairro','$cidade','$uf')")or die(mysqli_error());


  echo "Funcionario Cadastrado com Sucesso";

 ?>