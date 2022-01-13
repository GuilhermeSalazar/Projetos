<?php 
                  
                   require 'pdo.php';
                    
                  $fila = $pdo->query("SELECT * FROM  acesso where fk_tecnico = 0 && nivel = 0");            
                   $acao = "";
                   while($lin_fila = $fila->fetch()){

                    session_start();

                    $id = $_SESSION['id'];


             $meus_acessos  = $pdo->query("SELECT * FROM hepdesk where conta_fk like '$id'");

                    if($meus_acessos->RowCount() == 0){

                        $acao ="<a data-toggle='modal' data-target='#chamado_atendente' class='br-menu-link active ' href='".$lin_fila['id']."'>Editar</a>";

                    }else{
                        
                           $acao = "<a class='br-menu-link active ' href='".$lin_fila['id']."'>Atender</a>"; 


                    }
                              
                       

                       echo "

                  <tr>
                  <th scope='row'>".$lin_fila['nome_contato']."</th>
                  <td>".$lin_fila['razao']."</td>
                  <td>".$lin_fila['passado']."</td>
                  <td>".$lin_fila['ocorrencia']."</td>
                  <td>Aguardando</td>
                  <td>
                    ".$acao."
                  </td>
                </tr>


                       "; 




                   }






           
                 ?>