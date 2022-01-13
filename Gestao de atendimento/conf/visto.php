<?php 
 $sql = mysqli_connect('localhost','root','','mldisplay');

  $nome = $_POST['nome'];
 session_start();

  $login = $_SESSION['nome'];   
      

      mysqli_query($sql,"UPDATE mensagens SET status = '1' where  d_quem = '$nome' && p_quem = '$login'");

 ?>