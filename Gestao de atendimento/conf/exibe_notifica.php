<?php
$sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");



  $buscar  = mysqli_query($sql,"SELECT * FROM notifica ORDER BY id DESC limit 4");



   while($linha = mysqli_fetch_array($buscar)){
         

         $dia = date('d/m/Y ', strtotime($linha['dia']));




    echo "
      <a href='' class='media-list-link read'>
                  <div class='media'>
                    
                    <div class='media-body'>
                      <p class='noti-text'><strong>".$linha['titulo']."<br></strong>".$linha['texto']."</p>
                      <span>".$dia.", ".$linha['responsavel']."</span>
                    </div>
                  </div><!-- media -->
                </a>
    ";


   }

?>