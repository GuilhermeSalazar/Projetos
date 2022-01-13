<?php 
 session_start();
 $id = $_SESSION['id'];
require 'db.php';
$de = $_POST['de'];
$ate = $_POST['ate'];

 if(empty($de) && empty($ate)){
 echo "Digite as duas datas!";	
 }else{

   if($existe = mysqli_query($sql,"SELECT * FROM agenda where id_quem like '$id'")){
    
    $consulta = mysqli_query($sql,"SELECT * FROM agenda WHERE dia  BETWEEN ('$de') AND ('$ate')") or die(mysqli_error());
     while($array = mysqli_fetch_array($consulta)){


   
                     $sqldat = date('d/m/Y', strtotime($array['dia']));
                   echo "
                     <tr class='talet'>
                  <th>".$array['descricao']."</th>
                  <td>".$sqldat."</td>
                  <td>".$array['hora']."</td>
                  <td> <a href='".$array['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a><a href='".$array['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></td>
                </tr>


                   ";



     }

   }


   



   


 }
?>