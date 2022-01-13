<?php 
//conexão com banco de dados com pdo 
try{
$pdo = new PDO('mysql:host=localhost;dbname=mldisplay', 'root', '');
$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);	
}
catch(PDOException $e){
echo 'error'. $e->getMessage();
}
//----------------------------------------------------------------------------\\
//----------------------VARIAVEIS DADOS HTML----------------------------------//

    $nome =@$_POST['nome'];
    $fone =@$_POST['fone'];
    $id =@$_POST['id'];
    $email =@$_POST['email'];
    $endereco =@$_POST['endereco'];
    $ocorrencia =@$_POST['ocorrencia'];
    $acao =@$_POST['acao'];
    $hora =@$_POST['hora'];
    $chamado =@$_POST['chamado'];
    $novotec =@$_POST['novo_tecnico'];
//-----------------------------------------------------------------------------\\
//-------------------------AÇÕES ----------------------------------------------//

  switch($acao){
     
       case 'editar':
     
       $pdo->query("UPDATE acesso SET nome_contato = '$nome', fone = '$fone', endereco = '$endereco', ocorrencia = '$ocorrencia' where id = '$id'");
       echo "Alteção ralizada com sucesso!";

      break;
 
       case 'excluir':

        $pdo->query("DELETE FROM acesso where id = '$id'");        

        echo "Chamado excluido ";
 
      break;
       case 'transferir':
         session_start();
        $origin = $_SESSION['id'];
           $date = date('Y-m-d');
           $hors = date_default_timezone_set('America/Sao_Paulo');

           $pdo->query("UPDATE acesso set fk_tecnico = '$novotec', nivel = '1' where id = '$chamado'");
           $pdo->query("UPDATE hepdesk set status = '2' where conta_fk = '$novotec'");
      
      $pdo->query("INSERT INTO transf_chamado values(default, '$origin', '$novotec', '$chamado', '$date','$hors')");

          
        $zerado = $pdo->query("SELECT * FROM acesso where fk_tecnico like '$origin' && nivel like '1'");

        $rw_ze = $zerado->rowCount();


        if($rw_ze == 0){


           $pdo->query("UPDATE hepdesk set status = 1 where conta_fk like '$origin'");



        }



          echo "Trnasferencia realizada com sucesso";





      break; 


  }




 ?>