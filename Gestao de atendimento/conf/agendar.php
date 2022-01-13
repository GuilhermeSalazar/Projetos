<?php 
//variaveis de conecxão ao banco de dados 
 $sql = mysqli_connect('localhost','root','','mldisplay');

//variaveis   de arquivos 

$id_quem = $_POST['id'];
$descri = $_POST['descricao'];
$hora = $_POST['hora'];
$data = $_POST['data'];
$titulo = "AGENDA PESSOAL";


if(!empty($id_quem) && !empty($descri) && !empty($hora) && !empty($data)){


mysqli_query($sql,"INSERT INTO agenda values(default,'$descri','$data','$hora','$id_quem')")or die(mysqli_error());

echo "Adicionado na agenda";


}else{

echo "Preencha todos os campos !!";

}



 ?>