<?php 
require 'pdo.php';



$tec = $_POST['login'];
$id = $_POST['id'];


 $buscar = $pdo->query("SELECT * FROM acesso where id = $id ");


 if($array = $buscar->fetch()){

    $id_acesso = $array['id'];

     $_b_laudo = $pdo->query("SELECT * FROM laudo where id_cha  = '$id_acesso' && nome = '$tec' ");

    
     $row = $_b_laudo->fetch();

     $id_chamado = $array['id'];
     $razao = $array['razao'];
     $n_chamado = $array['n_chamado'];
     $nome_contato = $array['nome_contato'];
     $fone = $array['fone'];
     $mail = $array['mail'];
      $laudo = $row['laudo'];
     $endereco = $array['endereco'];
     $ocorrencia = $array['ocorrencia'];
     $data = $array['data'];
     $hora_inicial = $array['hora_inicial'];
     $passado = $array['passado'];
     $tecnico_id = $array['fk_tecnico'];

   echo  json_encode(
        array(
            'id'=>$id_chamado,
            'numero'=>$n_chamado,
            'nome'=>$nome_contato,
            'razao'=>$razao,
             'fone'=>$fone,
             'email'=>$mail,
             'endereco'=>$endereco,
             'ocorrencia'=>$ocorrencia,
              'laudo'=>$laudo,
             'data'=>$data,
             'hora'=>$hora_inicial,
             'passado'=>$passado,
             'fk_tecnico'=>$tecnico_id
             ));



 }



 ?>