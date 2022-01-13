<?php 
 require 'db.php';
  
  $marca =@$_POST['ditado'];
  $modelo =@$_POST['modelo'];
  $cliente =@$_POST['cliente'];

  if(!empty($marca)){

             $consultar = mysqli_query($sql,"SELECT * FROM marca where nome like '%$marca%'");

      $num = mysqli_num_rows($consultar);


      if($num == 0){



      	echo "Adicionando ..".$marca;
      }else{


      while ($array = mysqli_fetch_array($consultar)) {
      	    
      	    echo "

                <ul>
                 <li><a href=''>".$array['nome']."</a></li>
                </ul>

      	    ";


      }


      }



  }
  
   if (!empty($modelo)) {
    $consultar_modelo = mysqli_query($sql,"SELECT * FROM modelo where nome like '%$modelo%'");

      $numd = mysqli_num_rows($consultar_modelo);


      if($numd == 0){



      	echo "Adicionando ..".$modelo;
      }else{


      while ($arrayd = mysqli_fetch_array($consultar_modelo)) {
      	    
      	    echo "

                <ul>
                 <li><a href=''>".$arrayd['nome']."</a></li>
                </ul>

      	    ";


      }


      }

}



 if (!empty($cliente)) {
    $consultar_cliente = mysqli_query($sql,"SELECT * FROM cliente where nome like '%$cliente%' || razao like '%$cliente%'");

      $numc = mysqli_num_rows($consultar_cliente);


      if($numc == 0){



      	echo "Esse Cliente não existe !";
      }else{




      while ($arrayc = mysqli_fetch_array($consultar_cliente)) {
      	    
                         $consult = "";


                         if(empty($arrayc['razao'])){


                          $consult = $arrayc['nome'];
                         }else{

                          $consult = $arrayc['razao'];



                         }


      	    echo "

                <ul>
                 <li><a href='".$arrayc['id']."'>".$consult."</a></li>
                </ul>

      	    ";


      }


      }

}



  
  


 ?>