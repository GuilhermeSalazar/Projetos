<?php 

require 'db.php';


  $sys = $_POST['option'];

    $busca = mysqli_query($sql,"SELECT * FROM modelo_sis where fk_sistema = '$sys'")or die(mysqli_error());


    while($array = mysqli_fetch_array($busca)){


        echo " <option value='".$array['id']."'>".$array['modelo']."</option>";

    }



 ?>