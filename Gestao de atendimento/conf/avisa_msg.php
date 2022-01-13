<?php 
$sql = mysqli_connect('localhost','root','','mldisplay');

  
 session_start();

  $login = $_SESSION['nome'];   

    $consultar = mysqli_query($sql,"SELECT * FROM  usuario inner join mensagens on  Usuario.usuario = '$login' && mensagens.p_quem = '$login' && mensagens.status = 0")or die(mysqli_error());


  $contar = mysqli_num_rows($consultar);

  echo $contar;


  

?>