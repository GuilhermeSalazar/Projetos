<?php 
 $sql = mysqli_connect('localhost','root','','mldisplay');
 
 session_start();
 $login = $_SESSION['nome'];


  $consulta_chama = mysqli_query($sql,"SELECT * FROM usuario inner join mensagens on usuario.nome = mensagens.d_quem &&  mensagens.p_quem = '$login' && mensagens.status = 0")or die(mysqli_error());
 
   
   while($charset = mysqli_fetch_array($consulta_chama)){

    


   	echo "

   <a href='' class='media-list-link'>
                  <div class='media'>
                    <img src='update/".$charset['perfil']."' alt=''>
                    <div class='media-body'>
                      <div>
                        <p>".$charset['d_quem']."</p>
                      </div>
                      <p>".$charset['mensagem']."</p>
                    </div>
                  </div>
                </a>
   	";

   }


?>