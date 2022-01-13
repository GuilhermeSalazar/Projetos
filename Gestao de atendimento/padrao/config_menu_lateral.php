<?php 
 //conexão com banco de dados ________________________________________
 try{
 	$pdo = new PDO('mysql:host=localhost;dbname=mldisplay','root','');
 	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
 }catch(PDOException $i){

echo "error". $i->getMessage();

 }
  session_start();
   $id = $_SESSION['id'];

//_____________________________________________________________________

//função do menu lateral do chat 


                   $lista = $pdo->query("SELECT * FROM usuario where id != '$id' order by estatus = '0'");
                  
                   while($list = $lista->fetch()){

                        if($list['estatus'] == 0){
                          
                          $on_off = "contact-status-indicator bg-gray-500 bd-white";
                          $subtitle = "Offline";
                          $img_perfil = "default.jpg";

                        }else{

                          $on_off = "contact-status-indicator bg-success bd-white";
                          $subtitle = "Online";
                          $img_perfil = $list['perfil'];

                        }

              echo "
                  <a id='lista_usuarios' href='".$list['id']."' alt='".$id."' class='contact-list-link new'>
              <div class='d-flex'>
                <div class='pos-relative'>
                  <img src='update/".$img_perfil."' alt=''  style='height: 35px'>
                  <div class='".$on_off."'></div>
                </div>
                <div class='contact-person'>
                  <p>".$list['usuario']."</p>
                  <span>".$subtitle."</span>
                </div>
                <span class='tx-info tx-12'>
                
              </div>
            </a>
                  ";


                   } 

               





 ?>