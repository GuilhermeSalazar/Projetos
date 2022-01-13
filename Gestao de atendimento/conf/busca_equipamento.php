<?php 

require 'db.php';

$pesquisa = $_POST['pesquisa'];

  if(empty($pesquisa)){
  	echo "Campo vazio!";
  }else{

   $buscar = mysqli_query($sql,"SELECT * FROM cliente where nome like '%$pesquisa%' || razao like '%$pesquisa%'");


   $cont = mysqli_num_rows($buscar);

     if($cont == 0){
     echo "NÃO ENCONTRADO";	
     }
     if($cont > 0){

      while ($array = mysqli_fetch_array($buscar)){
           $id_cliente = $array['id'];
           $buscar_equi = mysqli_query($sql,"SELECT *  FROM equipamento where cliente = '$id_cliente'");
           $equipamento = mysqli_fetch_array($buscar_equi);
              $cont_equi = mysqli_num_rows($buscar_equi);
              $nome = "";
                $dataequi = date('d/m/Y ', strtotime($equipamento['data_compra']));
              

                                    if(empty($array['razao'])){

                                    	$nome =  $array['nome'];
                                    }else{

                                    	$nome = $array['razao'];
                                    }

                if($cont_equi == 0){


                	echo "Cliente sem equipamento";
                }
                 if($cont_equi > 0) {
                	

                      echo "<tr id='linha_cliente'>
                     <th scope='row'>".$equipamento['id']."</th>
                     <td>".$nome."</td>
                     <td>".$array['telefone1']."</td>
                     <td>".$equipamento['equipamento']."</td>
                     <td>".$equipamento['marca']."</td>
                     <td>".$equipamento['modelo']."</td>
                     <td>".$equipamento['n_serie']."</td>
                     <td>".$equipamento['garantia_contrato']." </td>
                     <td>".$dataequi."</td>
                    </tr>";

                }

       
      }

     }


  }

 
 ?>