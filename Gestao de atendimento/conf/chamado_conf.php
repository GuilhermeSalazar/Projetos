<?php 
// banco de dados conexã!!
require 'db.php';

$acao = $_POST['acao'];
$busca =@$_POST['texto'];
$item_lista =@$_POST['item'];


if($acao == '1'){


  $busca = mysqli_query($sql,"SELECT * FROM cliente where nome like '%$busca%' || razao like '%$busca%'")or die(mysqli_error());

  while($linha = mysqli_fetch_array($busca)){
           
        if(empty($linha['razao'])){
        $nome = $linha['nome'];	
            echo "<li><a href='".$linha['id']."'>".$nome."</a></li>";
        
        }else{
        $nome = $linha['razao'];	
        echo "<li><a href='".$linha['id']."'>".$nome."</a></li>";
        }
    }
 }
 if($acao == '2'){


 $achar = mysqli_query($sql,"SELECT * FROM cliente where id = '$item_lista'")or die(mysqli_error());


 $array = mysqli_fetch_array($achar);


echo "<div class='col-lg-7'>
                 <div class='form-group'>
                  <label class='form-control-label'>Fones:</label>
                  <input value='".$array['telefone1']." ".$array['telefone2']." ".$array['celular1']." ".$array['celular2']."' name='fones' class=' form-control ' type='text' placeholder=''>
                 </div>
               </div>
                <div class='col-lg-7'>
                 <div class='form-group'>
                  <label class='form-control-label'>Email:</label>
                  <input value='".$array['email']."' name='email' class=' form-control' type='text' >
                 </div>
               </div>
                <div class='col-lg-12'>
                 <div class='form-group'>
                  <label class='form-control-label'>Endereço:</label>
                  <input name='endereco' class=' form-control ' type='text' placeholder='' value='".$array['endereco']." ".$array['numero'].", ".$array['complemento'].", ".$array['bairro'].", ".$array['uf']."'>
                 </div>
               </div>";


    


 }



 ?>