<?php 
$sql = mysqli_connect('localhost','root','','mldisplay');

$quem = $_POST['msg'];

    
    mysqli_query($sql,"DELETE  FROM mensagens where p_quem like'$quem'")or die("deu rui");


    echo "Historico excluido!";



 ?>