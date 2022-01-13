<?php 
//conexão com banco de dados //

try{
	$pdo = new PDO('mysql:host=localhost;dbname=mldisplay','root','');
	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}
catch(PDOException $e){
 echo "error". $e->getMessage();
}

// VARIAVEIS DO JQUERY 

$id =@$_POST['id'];

// CONSULTANDO A TABELA DO ACESSO 


$acesso = $pdo->query("SELECT * FROM acesso
INNER JOIN usuario ON acesso.fk_tecnico = usuario.id && acesso.id='$id'
INNER JOIN laudo ON acesso.id = laudo.id_cha" );
  
   if($array = $acesso->fetch()){

      if ($array['nivel'] == '1') {
        $status ="aberto";
      }
      else{
        $status="Finalizado";
      }
      
      if (empty($array['razao'])) {
        $razao=$array['nome_contato'];
      }
      else{

        $razao=$array['razao'];
      }

      echo json_encode(array(
       'razao' =>$razao,
       'protocolo'=>$array['n_chamado'],
       'cliente'=>$array['nome_contato'],
       'data'=>$array['data'],
       'inicio'=>$array['hora_inicial'],
       'final'=>$array['hora_final'],
       'tecnico'=>$array['usuario'],
       'ocorrencia'=>$array['ocorrencia'],
       'nivel'=>$status,
       'aberto'=>$array['passado'],
       'laudo'=>$array['laudo']

      ));






   }













 ?>