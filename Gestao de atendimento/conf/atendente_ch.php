<?php 
//-----------------------------------------------------------------------
  try{
     $pdo = new PDO('mysql:host=localhost;dbname=mldisplay', 'root', '');
     $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
   echo 'error' . $e->getMessage();
  }
//------------------------------------------------------------------------

 $chamado = $_POST['chamado'];
 $tecnico = $_POST['tecnico'];
  
$buscar_chamado = $pdo->query("SELECT * FROM acesso INNER JOIN usuario on usuario.id = '$tecnico' && acesso.id = '$chamado'");


   //  json 

    if($lin = $buscar_chamado->fetch()){

    
      echo json_encode(array(
      	'protocolo'=>$lin['n_chamado'],
        'data'=>$lin['data'],
        'hora'=>$lin['hora_inicial'],
        'passado'=>$lin['passado'],
        'tecnico'=>$lin['usuario'],
        'ocorrencia'=>$lin['ocorrencia'],
        'id_chamado'=>$chamado,
        'cliente'=>$lin['nome_contato'],
        'fone'=>$lin['fone'],
        'email'=>$lin['mail'],
        'endereco'=>$lin['endereco']
      ));




    }












 ?>