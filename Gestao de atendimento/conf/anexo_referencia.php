<?php 

 $sql = mysqli_connect('localhost','root','','mldisplay');
   $mensagens  =$_POST['mensagens'];
    $quem = $_POST['quem'];
    $para = $_POST['para'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
   
session_start();
      mysqli_query($sql,"INSERT INTO mensagens values('','$quem','$para','','$mensagens','$data','$hora','1')")or die(mysqli_error());
  

  echo "Arquivo enviado";
 ?>