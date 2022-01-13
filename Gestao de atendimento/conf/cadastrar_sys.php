<?php require 'db.php'; 


 $sistema = $_POST['sistema'];
 $modulo = $_POST['modulo'];
 $descri = $_POST['descri'];
 $valor = $_POST['valor'];
 $date = $_POST['data'];
 $id_cliente = $_POST['id'];


   mysqli_query($sql,"INSERT INTO cliente_sys values(default,'$sistema','$id_cliente')");


   $buscar = mysqli_query($sql,"SELECT * FROM cliente_sys where fk_cliente = '$id_cliente'");


   if($array = mysqli_fetch_array($buscar)){

      $id_sistema = $array['id'];

       $buscar_nomesys = mysqli_query($sql,"SELECT * FROM modelo_sis where id =  '$modulo'")or die(mysqli_error());

       $sys_nome = mysqli_fetch_array($buscar_nomesys)or die(mysqli_error());

       $sysnome = $sys_nome['modelo']; 
     
       mysqli_query($sql,"UPDATE cliente_sys set fk_sistema = '$sistema' where fk_cliente = '$id_cliente'")or die(mysqli_error());


       mysqli_query($sql,"INSERT INTO modulo values(default,'$sysnome','$descri','$date','$valor','$id_sistema', '0')")or die(mysqli_error());

       echo "Cadastrado com sucesso";


   }


?>