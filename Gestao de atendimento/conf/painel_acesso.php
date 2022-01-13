<?php 
 // CONEXÃO COM BANCO DE DADOS  
 try{
  $pdo = new PDO('mysql:host=localhost;dbname=mldisplay','root','');
  $pdo->setAttribute(PDO::ATTR_ERRMODE,  PDO:: ERRMODE_EXCEPTION);
 }catch(PDOException $e){
  echo "error".$e->getMessage();
 } 

$tecnico = $pdo->query('SELECT * FROM usuario INNER JOIN hepdesk on hepdesk.conta_fk = usuario.id && hepdesk.status > 0');


while($row = $tecnico->fetch()){

  $star = $row['status'];
   $id_fk = $row['conta_fk'];
 //buscando chamados  
 	
  $acesso = $pdo->query("SELECT * FROM acesso where fk_tecnico LIKE '$id_fk' && nivel LIKE '1'");

  $cont_acesso = $acesso->rowCount();

  if($cont_acesso == 1){

  	$cont_acesso = $cont_acesso." Acesso";
  }else{


  	$cont_acesso = $cont_acesso." Acessos";


  }
  if($cont_acesso == 0){

  	$cont_acesso = " ";
  }
  



  switch($star){
  	case $star == 1:
         echo "<div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto tx-success'>Livre</span></p>
                  <p class='tx-32 tx-danger tx-lato mg-b-0 lh-1'></p>
                  <span class='tx-12 tx-roboto tx-danger'>

                  </span>
                  
                </div>
              </div>
            </div>
          </div>";
  	break;
  	case $star == 2:
       	 echo "
      		<div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto tx-primary'>Medio</span></p>
                  <p class='tx-32 tx-primary tx-lato mg-b-0 lh-1'>".$cont_acesso."</p>
                   <div id='scrollpage'>
                  <span class='tx-12 tx-roboto tx-primary'>
                   "; 
                       while($lin = $acesso->fetch()){
                          $estripe = "";

                          if(empty($lin['razao'])){
                           
                           $estripe = $lin['nome_contato'];

                          }else{

                           $estripe = $lin['razao'];


                          }

                      	echo "<a Class='tx-18 tx-primary' href='".$lin['id']."'>".$estripe."</a> <br>";
                      }
                   echo "  
                  </span>
                   </div>
                  
                </div>
              </div>
            </div>
          </div>
      		";
  	break;
  	case $star == 3:
  	echo "
      		<div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto tx-danger'>Critico</span></p>
                  <p class='tx-32 tx-danger tx-lato mg-b-0 lh-1'>".$cont_acesso."</p>
                  <div id='scrollpage'>
                  <span class='tx-12 tx-roboto tx-danger'>
                   "; 
                       while($lin = $acesso->fetch()){

                      	echo "<a Class='tx-18 tx-danger' href='".$lin['id']."'>".$lin['razao']."</a> <br>";
                      }
                   echo "  
                  </span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
      		";
     break; 
     case $star == 4:
      echo "
      		<div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto tx-info'>Almoço</span></p>
                  <p class='tx-32 tx-info tx-lato mg-b-0 lh-1'>".$cont_acesso."</p>
                  <div id='scrollpage'>
                  <span class='tx-12 tx-roboto tx-info'>
                   "; 
                       while($lin = $acesso->fetch()){

                      	echo "<a Class='tx-18 tx-info' href='".$lin['id']."'>".$lin['razao']."</a> <br>";
                      }
                   echo "  
                  </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      		";
     break; 		
     case $star == 5:
    	 echo "
      		<div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto tx-warning'>Fácil</span></p>
                  <p class='tx-32 tx-warning tx-lato mg-b-0 lh-1'>".$cont_acesso."</p>
                  <div id='scrollpage'>
                  <span class='tx-12 tx-roboto tx-warning'>
                   "; 
                       while($lin = $acesso->fetch()){

                      	echo "<a Class='tx-18 tx-warning' href='".$lin['id']."'>".$lin['razao']."</a> <br>";
                      }
                   echo "  
                  </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      		";
      break;
      case $star == 6:
       echo "
          <div class='col-sm-4 col-4 mg-t-10'>
            <div class='card overflow-hidden'>
              <div class='pd-x-20 pd-t-20 d-flex align-items-center'>
                <img src='update/".$row['perfil']."' alt='' class='wd-100 mg-b-5 rounded-circle ht-100'>
                <div class='mg-l-20'>
                  <p class='tx-22 tx-spacing-2 tx-mont tx-semibold tx-uppercase mg-b-10'>".$row['usuario']." <span class='tx-18 tx-roboto text-info'>Ausente</span></p>
                  <p class='tx-32 tx-info tx-lato mg-b-0 lh-1'>".$cont_acesso."</p>
                  <div id='scrollpage'>
                  <span class='tx-12 tx-roboto text-info'>
                   "; 
                       while($lin = $acesso->fetch()){

                        echo "<a Class='tx-18 text-info href='".$lin['id']."'>".$lin['razao']."</a> <br>";
                      }
                   echo "  
                  </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          ";
      break;    		 


 }



}





 ?>