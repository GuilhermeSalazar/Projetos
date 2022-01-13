
<?php
require 'pdo.php';


  $avan_razao =@$_POST['avan_razao'];
  $avan_cnpj_cpf =@$_POST['avan_cnpj_cpf'];
  $avan_tecnico =@$_POST['avan_tecnico'];
  $avan_nivel =@$_POST['avan_nivel'];
  $avan_data1 =@$_POST['avan_data1'];
  $avan_data2 =@$_POST['avan_data2'];
  $tipo =@$_POST['tipo'];
 



 

  switch ($tipo){
    case '1':
    if (empty($avan_razao)) {
      echo "<script>alert('Preencha todos os campos!!!')</script>";
    } else {
       $busca_avancada = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE acesso.razao like '%$avan_razao%'");
  

 while ( $avan = $busca_avancada->fetch()) {

       echo "
                 <tr>
                  <td>".$avan['data']."</td>
                  <td>".$avan['razao']."</td>
                   <td>".$avan['tecnico']."</td>
                   <td>".$avan['aberto']."</td>
                   <td>".$avan['descri']."</td>
                   <td>".$avan['cnpj_cpf']."</td>
                   <td><a href='".$avan['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
 }
    }
    
     
      break;
    case '2':
    if (empty($avan_cnpj_cpf)) {
      echo "<script>alert('Preencha o campo!')</script>";
    } else {
     
       $busca_avancada = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE cliente.cnpj_cpf like '%$avan_cnpj_cpf%'");
       while ( $avan_cnpj = $busca_avancada->fetch()) {

       echo "
                 <tr>
                  <td>".$avan_cnpj['data']."</td>
                  <td>".$avan_cnpj['razao']."</td>
                   <td>".$avan_cnpj['tecnico']."</td>
                   <td>".$avan_cnpj['aberto']."</td>
                   <td>".$avan_cnpj['descri']."</td>
                   <td>".$avan_cnpj['cnpj_cpf']."</td>
                   <td><a href='".$avan_cnpj['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
              }
    }
    
      break;
      case '3':
      if (empty($avan_tecnico)) {
       echo "<script>alert('Preencha o campo!')</script>";
      } else {
        $busca_avancada = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE usuario.usuario like '%$avan_tecnico%'");
while ( $avanc = $busca_avancada->fetch()) {

       echo "
                 <tr>
                  <td>".$avanc['data']."</td>
                  <td>".$avanc['razao']."</td>
                   <td>".$avanc['tecnico']."</td>
                   <td>".$avanc['aberto']."</td>
                   <td>".$avanc['descri']."</td>
                   <td>".$avanc['cnpj_cpf']."</td>
                   <td><a href='".$avanc['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
              }
      }
      
    
      break;
      case '4':
      if (empty($avan_nivel)) {
      echo "<script>alert('Preencha todos o campo!')</script>";
      } else {
         $busca_avancada = $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf,
                   acesso.nivel as status
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE usuario.usuario like '%$avan_nivel%'");
while ( $avanc = $busca_avancada->fetch()) {

       echo "
                 <tr>
                  <td>".$avanc['data']."</td>
                  <td>".$avanc['razao']."</td>
                   <td>".$avanc['tecnico']."</td>
                   <td>".$avanc['aberto']."</td>
                   <td>".$avanc['descri']."</td>
                   <td>".$avanc['cnpj_cpf']."</td>
                   <td>".$avanc['status']."</td>
                   <td><a href='".$avanc['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
              }
      }
      
           
        break;

 case '5':
      if (empty($avan_data1) or empty($avan_data2)) {
        echo "<script>alert('Preencha todos os campos!!!')</script>";
      } else {
        $busca_avancada_periodo= $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE STR_TO_DATE(acesso.data,'%d/%m/%Y')BETWEEN '$avan_data1' and '$avan_data2'");
 

 while ( $avan_periodo = $busca_avancada_periodo->fetch()) {

       echo "
                 <tr>
                  <td>".$avan_periodo['data']."</td>
                  <td>".$avan_periodo['razao']."</td>
                   <td>".$avan_periodo['tecnico']."</td>
                   <td>".$avan_periodo['aberto']."</td>
                   <td>".$avan_periodo['descri']."</td>
                   <td>".$avan_periodo['cnpj_cpf']."</td>
                   <td><a href='".$avan_periodo['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
 }
      }
      
   break;
  case '6':
    if (empty($avan_razao) or empty($avan_data1) or empty($avan_data2)) {
      echo "<script>alert('Preencha todos os campos!!!')</script>";
    } else {
     
       $busca_avancada_periodo= $pdo->query("SELECT 
                  acesso.id as id,
                   acesso.data as data,
                   acesso.hora_inicial as hors_inicial,
                   acesso.nome_contato as cliente,
                   acesso.razao as razao,
                   usuario.usuario as tecnico,
                   acesso.passado as aberto,
                   acesso.ocorrencia as descri,
                   acesso.nivel as status,
                   acesso.n_chamado as protocolo,
                   cliente.cnpj_cpf as cnpj_cpf
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE (STR_TO_DATE(acesso.data,'%d/%m/%Y')BETWEEN '$avan_data1' and '$avan_data2') and  acesso.razao like '%$avan_razao%'");
 

 while ( $avan_periodo = $busca_avancada_periodo->fetch()) {

       echo "
                 <tr>
                  <td>".$avan_periodo['data']."</td>
                  <td>".$avan_periodo['razao']."</td>
                   <td>".$avan_periodo['tecnico']."</td>
                   <td>".$avan_periodo['aberto']."</td>
                   <td>".$avan_periodo['descri']."</td>
                   <td>".$avan_periodo['cnpj_cpf']."</td>
                   <td><a href='".$avan_periodo['id']."' data-toggle='modal' data-target='#chamado_atendido' class='br-menu-link'>...</a></td>
                  </tr>
                  ";
 }
    }
    
    break;
 } 

?>
