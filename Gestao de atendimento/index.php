<?php

$sql = mysqli_connect('localhost','root','','mldisplay')or die('erro');


  $busca = mysqli_query($sql,'SELECT * FROM Empresa');

  $cont = mysqli_num_rows($busca);

 $result = "";
   
 if ($cont == 1) {
   
   header("location: logar.php");
 }
 if ($cont == 0 ) {
   
   header("location: conf/");
 }

?>