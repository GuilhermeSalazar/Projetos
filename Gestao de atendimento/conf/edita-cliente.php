<?php 
   /*conexão com a base de dados local */

      require 'db.php';

/*variaveis */

session_start();

$id = $_SESSION['clienteid'];

$nome = $_POST['nome'];
$razao = $_POST['razao'];
$fantasia = $_POST['fantasia'];
$rg = $_POST['rg'];
$inscricao = $_POST['inscricao'];
$cnpj = $_POST['cnpj'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone1 = $_POST['telefone1'];
$telefone2 = $_POST['telefone2'];
$celular1 = $_POST['celular1'];
$celular2 = $_POST['celular2'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
 



/* Envio para o banco de dados */

if(empty($razao)){

mysqli_query($sql,"UPDATE cliente set nome = '$nome', razao = '$razao',  fantasia = '$fantasia', telefone1 = '$telefone1', telefone2 = '$telefone2', celular1 = '$celular1', celular2 = '$celular2', email = '$email', cnpj_cpf = '$cpf', rg_inscri = '$rg', cep = '$cep', endereco = '$endereco', numero = '$numero', complemento ='$complemento', bairro ='$bairro', cidade ='$cidade', uf = '$uf' WHERE id = '$id'")or die(mysqli_error());


   echo "Alteração realizada com Sucesso";



}
if(! empty($razao)){


mysqli_query($sql,"UPDATE cliente set nome = '$nome', razao = '$razao',  fantasia = '$fantasia', telefone1 = '$telefone1', telefone2 = '$telefone2', celular1 = 'celular1', celular2 = '$celular2', email = '$email', cnpj_cpf = '$cnpj', rg_inscri = '$inscricao', cep = '$cep', endereco = '$endereco', numero = '$numero', complemento ='$complemento', bairro ='$bairro', cidade ='$cidade', uf = '$uf' WHERE id = '$id'")or die(mysqli_error());


   echo "Alteração realizada com Sucesso";



}


 
 ?>

