<?php
 require 'pdo.php'; //conexao de dados
//entrada de dados
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $usuario = $_POST['usuario'];
  $setor = $_POST['setor'];
  $data = $_POST['data'];
 
  $tipo = $_POST['tipo'];


//logica 
  switch ($tipo) {
  	case '1':
  		 if ( empty($titulo) or empty($descricao) or empty($usuario) or empty($setor) or empty($data)) {
 	echo "Preencha todos os campos";
 }
 else{
 	$pdo->query("INSERT INTO relatar_suges values (default,'$titulo','$descricao','0','$data','$usuario','$setor')");
 	echo "Registro realizado com sucesso!!!";

 }
  		break;
  	case '2':
  		 if ( empty($titulo) or empty($descricao) or empty($usuario) or empty($setor) or empty($data)) {
      	echo "Preencha todos os campos";
        }
            else{
        	$pdo->query("INSERT INTO relatar_bugs values (default,'$titulo','$descricao','0','$data','$usuario','$setor')");
          	echo "Registro realizado com sucesso!!!";

          }
  		break;
  	  }





?>