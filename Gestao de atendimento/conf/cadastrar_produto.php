<?php 
  require 'db.php';


 $categoria = $_POST['categoria'];
 $nome = $_POST['nome'];
 $marca = $_POST['marca'];
 $modelo = $_POST['modelo'];
 $descri = $_POST['descricao'];
 $p_venda = $_POST['p_venda'];
 $p_custo = $_POST['p_custo'];
 $estoque = $_POST['lugar_estoque'];
 $armario = $_POST['armario'];
 $platileira = $_POST['platileira'];
 $gaveta = $_POST['gaveta'];
 $numero = $_POST['numero']; 




   if(empty($estoque) && empty($armario) && empty($platileira) && empty($gaveta)){



     echo "Não existe esse local de estoque";


   }else{

     mysqli_query($sql,"INSERT INTO estoque values('','$estoque','$armario','$platileira','$gaveta','1')")or die(mysqli_error());


          $buscar_local = mysqli_query($sql,"SELECT * FROM estoque where lugar like '$estoque' || corredor_armario like '$armario' || pratileira like '$platileira' || gaveta like '$gaveta' ")or die(mysqli_error());


          $local_cont = mysqli_num_rows($buscar_local);


          if($local_cont == 1){


               if($array = mysqli_fetch_array($buscar_local)){

                   $id = $array['id'];


                   mysqli_query($sql,"INSERT INTO produto values('','$nome','$categoria','$modelo','$marca','$descri','$p_custo','$p_venda','$id','$numero')")or die(mysqli_error());


                   echo "Produto cadastrado com Sucesso!";



               }

          }
      

   }










 ?>