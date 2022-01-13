<?php 

require 'db.php';

   //[ declarando variaveis ]

   $filtro = $_POST['filtro'];
   $pesquisado =$_POST['pesquisa'];


     // função para consultar 


     if(empty($filtro) && !empty($pesquisado)){
       
        $buscar = mysqli_query($sql,"SELECT * FROM fornecedor where nome like '%$pesquisado%' || razao like '%$pesquisado%' || cnpj_cpf like '%$pesquisado%'  && status <= 20 ")or die(mysqli_error());

          $_buscar = mysqli_num_rows($buscar);

          if($_buscar > 0){
            while($registro = mysqli_fetch_array($buscar)){
                           
                                     
                     $acao = "<form action='dados_fornecedor.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$registro['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";
                             $perfil_t = "";

                                        $perfil_r = $registro['status'];

                                        if($perfil_r == '1'){

                                          $perfil_t = "Completa";


                                        }
                                        if($perfil_r == '2'){

                                          $perfil_t = "Simplificada";


                                        }

                                // logica nome ou razao social 
                                      if(!empty($registro['nome']) && empty($registro['razao'])){


                                          $regis = $registro['nome'];
                                      }
                                      if(!empty($registro['nome']) && !empty($registro['razao'])){


                                          $regis = $registro['razao'];
                                      }


                            
                            echo "
                  <tr id='linha_cliente'>
                  <th scope='row'>".$registro['id']."
                  </th>
                  <td>".$regis."".$acao."
                  </td>
                  <td>".$registro['cnpj_cpf']."</td>
                  <td>".$registro['email']."</td>
                  <td>".$registro['telefone1']."</td>
                  <td>".$perfil_t."</td>
                </tr>
                            ";



                    }
          }
          if($_buscar == 0){
            echo"BUSCA NÃO ENCONTRADA";
          }

     }
     if(!empty($filtro) && empty($pesquisado)){


       $buscap = mysqli_query($sql,"SELECT * FROM fornecedor where nome like '%$pesquisado%' || razao like '%$pesquisado%' || cnpj_cpf like '%$pesquisado%'  && status <= 20 ")or die(mysqli_error());

          $_buscap = mysqli_num_rows($buscap);

          if($_buscap > 0){
            while($registrop = mysqli_fetch_array($buscap)){
                           
                                     
                     $acaop = "<form action='dados_fornecedor.php' method='post'>
                    <input claas='' type='hidden' name='cadastro' value='".$registrop['id']."'>
                    <input style='background:none; color:#868ba1;'  class='border-0 btn btn-primary btn-icon ' type='submit' value='Ver mais'>
                   </form></th>";
                             $perfil_tp = "";

                                        $perfil_rp = $registrop['status'];

                                        if($perfil_rp == '1'){

                                          $perfil_tp = "Completa";


                                        }
                                        if($perfil_rp == '2'){

                                          $perfil_tp = "Simplificada";


                                        }

                                // logica nome ou razao social 
                                      if(!empty($registrop['nome']) && empty($registrop['razao'])){


                                          $regisp = $registrop['nome'];
                                      }
                                      if(!empty($registrop['nome']) && !empty($registrop['razao'])){


                                          $regisp = $registrop['razao'];
                                      }


                            
                            echo "
                  <tr id='linha_cliente'>
                  <th scope='row'>".$registrop['id']."
                  </th>
                  <td>".$regisp."".$acaop."
                  </td>
                  <td>".$registrop['cnpj_cpf']."</td>
                  <td>".$registrop['email']."</td>
                  <td>".$registrop['telefone1']."</td>
                  <td>".$perfil_tp."</td>
                </tr>
                            ";



                    }
          }
          if($_buscap == 0){
            echo"BUSCA NÃO ENCONTRADA";
          }


     }

 ?>