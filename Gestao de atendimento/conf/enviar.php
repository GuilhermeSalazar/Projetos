<?php    
$sql = mysqli_connect("localhost","root","","mldisplay");

session_start();

 $login = $_SESSION['nome'];
  $senha = $_SESSION['senha'];
  $id = $_SESSION['id'];


if($_FILES):
  

  $arquivo = $_FILES['perfil'];

  $url = "/xampp/htdocs/acesso 2/update/";  

   if(move_uploaded_file($arquivo['tmp_name'],$url.$arquivo['name'])){
      
    $f_nome = $arquivo['name'];

     mysqli_query($sql,"UPDATE usuario SET perfil = '$f_nome' where id = '$id'");
               
          $_SESSION['perfil'] = $arquivo['name'];
     echo "Imagem editada com sucesso!";

     
   }else{
     echo "error";
   }

 endif;


 ?>