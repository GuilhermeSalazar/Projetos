<?php 
  $sql = mysqli_connect("localhost","root","","mldisplay");
 

  $email = $_POST['email'];
  $quem = $_POST['quem'];
  $nome = $_POST['nome'];
  $cidade = $_POST['cidade'];
  $uf = $_POST['uf'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $municipio = $_POST['bairro'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $data = $_POST['data'];
    
  $consulta = mysqli_query($sql,"SELECT * FROM usuario where  id like '$quem'");
  

    mysqli_query($sql,"UPDATE  usuario SET nome = '$nome', email = '$email', telefone = '$telefone', endereco =  '$endereco', bairro = '$municipio', cidade = '$cidade', uf = '$uf',
    cpf = '$cpf', rg_cnh = '$rg', data_nasc = '$data' where id = '$quem'")or die(mysqli_error());

   echo "alterado  com sucesso!";

 
    


 ?>