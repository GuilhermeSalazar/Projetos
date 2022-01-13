<?php

 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");

  $titulo = $_POST['titulo'];
  $responsavel = $_POST['responsavel'];
  $data = $_POST['data'];
  $descricao = $_POST['descricao'];


  mysqli_query($sql,"INSERT INTO notifica values('','$titulo','$descricao','$data','$responsavel')");

  echo "Notificação cadastrada :)";



?>