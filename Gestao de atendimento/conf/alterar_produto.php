<?php 

  require 'db.php';

 $nome = $_POST['nome'];
 $marca = $_POST['marca'];
 $modelo = $_POST['modelo'];
 $descri = $_POST['descricao'];
 $p_venda = $_POST['p_venda'];
 $p_custo = $_POST['p_custo'];
 $estoque = $_POST['lugar_estoque'];
 $armario = $_POST['armario'];
 $platileira = $_POST['platileira'];
 $gaveta = $_POST['gaveta'];
 $numero = $_POST['numero']; 

 session_start();
  $local = $_SESSION['id_estoque'];
  $id = $_SESSION['idpro'];

    

    mysqli_query($sql,"UPDATE produto SET nome = '$nome', modelo = '$modelo', marca = '$marca', descri = '$descri', p_custo ='$p_custo', p_venda='$p_venda', quant_estoque = '$numero' where id = '$id'")or die(mysqli_error());

    mysqli_query($sql,"UPDATE estoque set lugar = '$estoque', corredor_armario = '$armario', pratileira = '$platileira', gaveta = '$gaveta' where id = '$local'")or die(mysqli_error());


    echo "Alterado com sucesso!";

 ?>