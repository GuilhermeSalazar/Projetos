<?php 
//---------------- conexão pdo -----------//
            require 'pdo.php';
             session_start();
//_________________________________________
//                                        | 
//    DECLARANDO VARIAVEIS NO SISTEMA     |
//________________________________________|                                       

   
 $ID = $_SESSION['id'];
 
 $registro  = $pdo->query("SELECT * from msg inner join usuario on msg.de like usuario.id && msg.para like '$ID' && msg.status like 0");

        $nunn = $registro->rowCount();


        if($nunn == 0){

        }




	else{
    while($usuario = $registro->fetch()){

       echo "
             <a alt='".$ID."' href='".$usuario['id']."' class='media-list-link'>
                  <div class='media'>
                    <img src='update/".$usuario['perfil']."' alt=''>
                    <div class='media-body'>
                      <div>
                        <p>".$usuario['usuario']."</p>
                      </div>
                      <p>".$usuario['mensagem']."</p>
                    </div>
                  </div>
                </a>
       ";


    }




  }







    

 ?>