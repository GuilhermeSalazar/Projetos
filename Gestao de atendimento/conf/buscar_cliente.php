<?php 
   require 'db.php';

   //[ declarando variaveis ]

   $filtro = $_POST['filtro'];
   $pesquisado = $_POST['pesquisa'];


     if(empty($filtro) && !empty($pesquisado)){
       
        $buscar = mysqli_query($sql,"SELECT * FROM cliente where nome like '%$pesquisado%' || razao like '%$pesquisado%' || cnpj_cpf like '%$pesquisado%'  && status <= 20 ")or die(mysqli_error());

          $_buscar = mysqli_num_rows($buscar);

          if($_buscar > 0){
            while($registro = mysqli_fetch_array($buscar)){
                           
                                     $msg = "";
                                     $regis = "";
                                     if($registro['status'] ==   '20'){

                                     $msg = "<td class='text-info'>Bloqueado</td>";
                                     }
                                     if($registro['status'] ==   '2'){

                                     $msg = "<td class='text-danger'>Cancelado</td>";
                                     }
                                     if($registro['status']  == '1'){

                                      $msg = "<td class='text-success'>Ativo</td>";
                                     }
                                     if($registro['status'] ==   '3'){

                                     $msg = "<td class='text-warning'>Inadimplente</td>";
                                     }
                                // logica nome ou razao social 
                                      if(!empty($registro['nome']) && empty($registro['razao'])){


                                          $regis = $registro['nome'];
                                      }
                                      if(!empty($registro['nome']) && !empty($registro['razao'])){


                                          $regis = $registro['razao'];
                                      }


                            echo "
                                 <tr >
                  <th scope='row'>".$registro['id']."</th>
                  <td>".$regis."<a href='".$registro['id']."' style='color:#868ba1'>Ver mais</a>
                  </td>
                  <td>".$registro['cnpj_cpf']."</td>
                  <td>".$registro['email']."</td>
                  <td>".$registro['telefone1']."</td>
                  <td>".$registro['contratos']."</td>
                  <td>nenhum</td>
                  ".$msg."
                </tr>
                            ";


                    }
          }
          if($_buscar == 0){
            echo"BUSCA NÃO ENCONTRADA";
          }

     }
     if(!empty($filtro) && empty($pesquisado)){
         

        $buscar_filtro = mysqli_query($sql,"SELECT * FROM cliente where status like '$filtro' && status <= 20 ")or die(mysqli_error());

          $_buscar_cont = mysqli_num_rows($buscar_filtro)or die(mysqli_error());

         
      
               if($_buscar_cont >=  0){
            while($filter_f = mysqli_fetch_array($buscar_filtro)){
                           
                                  
                                      $msgf = "";
                                     $regisf = "";
                                     if($filter_f['status'] ==   '20'){

                                     $msgf = "<td class='text-info'>Bloqueado</td>";
                                     }
                                     if($filter_f['status'] ==   '2'){

                                     $msgf = "<td class='text-danger'>Cancelado</td>";
                                     }
                                     if($filter_f['status']  == '1'){

                                      $msgf = "<td class='text-success'>Ativo</td>";
                                     }
                                     if($filter_f['status'] ==   '3'){

                                     $msgf = "<td class='text-warning'>Inadimplente</td>";
                                     }    

                                     /*nome configuração */

                                     // logica nome ou razao social 
                                      if(!empty($filter_f['nome']) && empty($filter_f['razao'])){


                                          $regisf = $filter_f['nome'];
                                      }
                                      if(!empty($filter_f['nome']) && !empty($filter_f['razao'])){


                                          $regisf = $filter_f['razao'];
                                      }   

                    echo "
                  <tr >
                  <th scope='row'>".$filter_f['id']."
                  </th>
                  <td>".$regisf."<a href='".$filter_f['id']."' style='color:#868ba1'>Ver mais</a>
                  </td>
                  <td>".$filter_f['cnpj_cpf']."</td>
                  <td>".$filter_f['email']."</td>
                  <td>".$filter_f['telefone1']."</td>
                  <td>".$filter_f['contratos']."</td>
                  <td>nenhum</td>
                  ".$msgf."
                </tr>
                            ";        


                    }
          
          }
           



    }
     if(!empty($filtro) && !empty($pesquisado)){

        $buscar_t = mysqli_query($sql,"SELECT * FROM cliente where nome like '%$pesquisado%' || razao like '%$pesquisado%' || cnpj_cpf like '%$pesquisado%' || status like '%$filtro%'   && status <= 20 ")or die(mysqli_error());

          $_buscar_ft_cont = mysqli_num_rows($buscar_t)or die(mysqli_error());

          if($_buscar_ft_cont > 0){
            while($filter_t = mysqli_fetch_array($buscar_t)){
                           
                                  
                                      $msgt = "";
                                     $regist = "";
                                     if($filter_t['status'] ==   '20'){

                                     $msgt = "<td class='text-info'>Bloqueado</td>";
                                     }
                                     if($filter_t['status'] ==   '2'){

                                     $msgt = "<td class='text-danger'>Cancelado</td>";
                                     }
                                     if($filter_t['status']  == '1'){

                                      $msgt = "<td class='text-success'>Ativo</td>";
                                     }
                                     if($filter_t['status'] ==   '3'){

                                     $msgt = "<td class='text-warning'>Inadimplente</td>";
                                     }    

                                     /*nome configuração */

                                     // logica nome ou razao social 
                                      if(!empty($filter_t['nome']) && empty($filter_t['razao'])){


                                          $regisf = $filter_t['nome'];
                                      }
                                      if(!empty($filter_t['nome']) && !empty($filter_t['razao'])){


                                          $regist = $filter_t['razao'];
                                      }   

                    echo "
                  <tr >
                  <th scope='row'>".$filter_t['id']."
                  </th>
                  <td>".$regist."<a href='".$filter_t['id']."' style='color:#868ba1'>Ver mais</a>
                  </td>
                  <td>".$filter_t['cnpj_cpf']."</td>
                  <td>".$filter_t['email']."</td>
                  <td>".$filter_t['telefone1']."</td>
                  <td>".$filter_t['contratos']."</td>
                  <td>nenhum</td>
                  ".$msgt."
                </tr>
                            ";        

                    }
                 }



     }
     if(empty($filtro) && empty($pesquisado)){

      echo "<span style='text-align: center'>Campos vazios</span> "; 
     }


?>

 <script>
   $(".table tr td a").click(function(event){
    event.preventDefault();

    var href = $(this).attr("href");

    $.ajax({
     type:'POST',
     url:'conf/cliente-direciona.php',
     data: { id : href} 
    }).done(function(retdd){
           location.replace("dados_cliente.php");
    });

  
   })
 </script>