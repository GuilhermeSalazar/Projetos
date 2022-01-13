<?php
require 'pdo.php';

 $avan_razao = $_POST['avan_razao'];
  $avan_cnpj_cpf = $_POST['avan_cnpj_cpf'];
  $avan_tecnico = $_POST['avan_tecnico'];
  $avan_nivel = $_POST['avan_nivel'];
  $avan_data1 = $_POST['avan_data1'];
  $avan_data2 = $_POST['avan_data2'];
 
 // select periodo
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
                   FROM acesso inner join usuario on acesso.fk_tecnico like usuario.id inner join cliente on cliente.razao like acesso.razao WHERE STR_TO_DATE(acesso.data, '%d/%m/%Y')BETWEEN '$avan_data1' and '$avan_data2'");
 

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


?>