<?php 
require 'db.php';
$nome = $_POST['nome'];

   $buscar = mysqli_query($sql,"SELECT * FROM produto where nome like '%$nome%' || modelo like '%$nome%' || marca like '%$nome%' && categoria like 'peças'")or die(mysqli_error());

    
    if(empty($buscar)){
    	echo "não encontrou nada";
    }else{

     while($array = mysqli_fetch_array($buscar)){
             

          echo "<a href='".$array['id']."'>".$array['nome']." ".$array['marca']." ".$array['modelo']."</a><br>";   

     }


    }

?>