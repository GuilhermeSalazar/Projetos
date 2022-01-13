<?php
require 'db.php';

//variaves 

$tipo =@$_POST['tipo']; 
$razao =@$_POST['razao']; 
$fantasia =@$_POST['fantasia']; 
$nome =@$_POST['nome']; 
$cnpj =@$_POST['cnpj']; 
$cpf =@$_POST['cpf']; 
$inscri =@$_POST['inscri']; 
$rg =@$_POST['rg']; 
$email =@$_POST['email']; 
$tel1 =@$_POST['tel1']; 
$tel2 =@$_POST['tel2']; 
$cel1 =@$_POST['cel1']; 
$cel2 =@$_POST['cel2']; 
$cep =@$_POST['cep']; 
$endereco =@$_POST['endereco']; 
$numero =@$_POST['numero']; 
$complemento =@$_POST['complemento']; 
$bairro =@$_POST['bairro']; 
$cidade =@$_POST['cidade']; 
$uf =@$_POST['uf_c'];
 
     

      if($tipo == 'J'){
        
         if(empty($razao) || empty($nome) || empty($cnpj)){

           echo "Preencha todos os campos ";


         }else{

            
            mysqli_query($sql,"INSERT INTO cliente VALUES('','$nome','$razao','$fantasia','$tel1','$tel2','$cel1','$cel2','$email','$cnpj','$inscri','','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$uf','NENHUM','1')")OR die('nao cadastrou');

            echo "cadastrado com sucesso!".$fantasia;


         }
       

      }
      if ($tipo == 'F'){
      	 if(empty($rg) || empty($nome) || empty($cpf)){

           echo "Preencha todos os campos ";


         }else{

            
            mysqli_query($sql,"INSERT INTO cliente VALUES('','$nome','','$tel1','$tel2','$cel1','$cel2','$email','$cpf','$rg','','$cep','$endereco','$numero','$complemento','$bairro','$cidade','$uf','NENHUM','1')")OR die('nao cadastrou');

            echo "Cliente cadastrado com sucesso!";


         }
      }


 ?>