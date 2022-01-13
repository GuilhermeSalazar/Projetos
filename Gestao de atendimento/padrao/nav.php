<div class="br-header">
      <div class="br-header-left">
<!--         <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div> -->
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        
        <!-- <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Pesquisar">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div> --><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <h4 class="mg-l-10 mg-t-5 text-success tx-15">  <?php echo date('d/m/Y'); ?> <br>  <i class=" text-success ion ion-clock tx-20 lh-0 tx-white op-7"></i> <span id="horareal"></span></h4>
        <nav class="nav">

          <a href="" class=" nav-link pd-x-7 pos-relative" data-toggle="modal" data-target="#bug">
             
             <i id="conti" class=" icon fa fa-bug tx-20" style="margin-top: 9px"></i>
           </a>
          <div class="dropdown">
            <a href="" class=" nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i id="conti" class=" icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span  class='sensormsg  square-10 bg-danger pos-absolute t-15 r-0 rounded-circle'></span>
             
            </a>
             
                <div class='dropdown-menu dropdown-menu-header' >
              <div class='dropdown-menu-label'>
                <label>Mensagens </label>
              </div>
              <div class='media-list'>
                 <div class="notifica-menssage">
                   
  
                 </div>
               
                <div class='dropdown-footer men_responder'>
                  <a href='chat.php'><i class='fa fa-angle-down'></i>Vizualizar</a>
                </div>
              </div>
            </div>
                  
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class= " d-none square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header  ">
              <div class="dropdown-menu-label">
                <label>Notificações</label>
              
                <a href=""></a>
              </div><!-- d-flex -->
              <div class="media-list">
                <!-- loop starts here -->
                  <div class="exibe_notifica "></div>
                
                <!-- loop ends here -->
                
                <div class="dropdown-footer">
                  <a href="notifica.php"><i class="fa fa-angle-down"></i>Ver todas </a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="nomelogin logged-name hidden-md-down"><?php echo $login; ?></span>
              <?php echo "<img style='height:30px' src='update/".$perfil."'class='wd-32 rounded-circle' alt=''>"; ?>
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <a href="">
                  <?php echo "<img style='height:70px' src='update/".$perfil."' class='wd-80 rounded-circle' alt=''>"; ?>
                </a>
                <h6 class="logged-fullname"><?php echo $login; ?></h6>
                <p><?php echo $email; ?></p>
              </div>
              <hr>
              <div class="tx-center">
                <span class="profile-earning-label">
                 <?php echo $cargo;
                  ?> 
                </span>
                <h3 class="profile-earning-amount">Ativo<i class="icon ion-ios-arrow-thin-up tx-success"></i></h3>
                <span class="profile-earning-text"></span>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href="Editar-perfil.php"><i class="icon ion-ios-person"></i> Editar Perfil</a></li>
                <li><a href="#" onclick="Logout()"><i class="icon ion-power"></i>Sair</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
     <script>

      function Logout(){
      
       $.ajax({
        type:'POST',
        url:'padrao/sair.php',
        data:{
          comando: 'sair'
        }
       }).done(function(recuperar){

               var comand;
               
               comand = recuperar;

               //  comando de bloqueado 


               switch(comand){
                case 'B':

                 alert("FINALIZE SEUS ACESSOS "); 
                break;
                
                case 'S01':

                  window.location.replace("logar.php");
                break; 
                case'S02':
                  window.location.replace("logar.php");
                break;
               }





       })

    

      }

       function horareal(){

         var data, hora, minuto, segundo;

           data = new Date();

           hora = data.getHours();
           minuto = data.getMinutes();
           segundo = data.getSeconds();

           if(hora < 10){

               hora = '0'+hora;

           }
          if(minuto < 10){

               minuto = '0'+minuto;

           }
         if(segundo < 10){

               segundo = '0'+segundo;

           }

         document.getElementById('horareal').innerHTML = hora+':'+minuto;

       }
       window.setInterval('horareal()', 1000);

     </script>
