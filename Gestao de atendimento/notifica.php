<?php 
 include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';

 ?>
      <div class="br-mainpanel">
      <div class="br-pagetitle">
        <i style="margin-top:-52px" class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Eventos</h4>
          <p class=" mg-b-0">Eventos e notificações publicas para toda Empresa</p><br>
      	<button data-toggle="modal" data-target="#modaldemo1" class="br-menu-link active border-0">Cadastrar</button>   
                
        </div>
            
      </div><!-- d-flex -->
          <div style="float: right;" id="pesqui_evento" class="input-group input-group-dark t--45 wd-250 r-30">
                <input name="pesqui_evento" type="text" class="form-control" placeholder="Pesquisar">
                <div class="input-group-append">
                  <button class="br-menu-link active border-0 p-3 pesquizar_evento" type="button"><i class="fa fa-search"></i></button>
                </div>
              </div>
      <div class="br-pagebody" id="#datatable2">
        <div class="br-section-wrapper">
         <div class="br-mailbox-list-body">
          <div id='mostra_notifica'></div>
            <div class="avisos">
           <?php 
              $consulta_aviso = mysqli_query($sql,"SELECT * FROM notifica");

             while($aviso = mysqli_fetch_array($consulta_aviso)){
                  
                  $datar = date('d/m/Y ', strtotime($aviso['dia']));
                   

                  $time = date('Y-m-d');

                  $verifica = $aviso['dia'];

                  if($time == $verifica){

              echo"
                     <div class='br-mailbox-list-item active'>
          <div class='d-flex justify-content-between mg-b-5'>
            <div>
             <i class='icon ion-ios-star tx-warning'></i>
            </div>
           <span class='tx-22 ' >".$datar.", ".$aviso['responsavel']." 
                <a href='".$aviso['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a>
                <a href='".$aviso['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></span>
          </div><!-- d-flex -->
          <h6 class='tx-30 mg-b-10 tx-white'>".$aviso['titulo']."</h6>
          <p class='tx-22 tx-gray-600 mg-b-5'>".$aviso['texto']."</p>
        </div>
                  ";
                  } 

                   if($time != $verifica){

              echo"
                     <div class='br-mailbox-list-item unread'>
          <div class='d-flex justify-content-between mg-b-5'>
            <div>
              <i class='icon ion-ios-star'></i>
            </div>
           <span class='tx-22'>".$datar.", ".$aviso['responsavel']." 
                <a href='".$aviso['id']."' class='edit_not '><i class='tx-22 menu-item-icon icon ion-ios-gear-outline'></i></a>
                <a href='".$aviso['id']."' class='ex_not'> <i class=' tx-22 icon ion-trash-a'></i></a></span>
          </div><!-- d-flex -->
          <h6 class='tx-30 mg-b-10 tx-white'>".$aviso['titulo']."</h6>
          <p class='tx-22 tx-gray-600 mg-b-5'>".$aviso['texto']."</p>
        </div>
                  ";
                  } 


                
                  

             }

           ?>
          </div>
        <!-- br-mailbox-list-item -->
      </div>
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
    
    </div>

     

 <?php require 'padrao/footer.php'; ?>
   <script>

       $(".pesquizar_evento").click(function(){
       
            $.ajax({
            type:'post',
            url:'conf/pesquisar_evento.php',
            data:{
             pesquisar: $("#pesqui_evento input").val()
            }}).done(function(returno){

            $(".avisos").html(returno);
            


       $(".ex_not").click(function(event){
        event.preventDefault();
        
         $.ajax({
            type:'post',
            url:'conf/notifica_evento.php',
            data:{
             excluir: $(this).attr('href')
            }}).done(function(returno){

             alert(returno); 
             location.reload();
              
            });
        
      });

       /*function editar */
        $(".edit_not").click(function(event){
        event.preventDefault();

         var editar = $(this).attr('href');


         $.ajax({
       type: 'post',
       url: 'conf/notifica_evento.php',
       data:{
        id: $(this).attr('href')
       } 
       }).done(function(returne){
       
       
         $("#mostra_notifica").html(returne);

         $("#modal_edit .close").click(function(){
           $("#modal_edit").hide(); 
         });
         $("#modal_edit .adicionar_edita").click(function(){
           
           
           $.ajax({
              type: 'post',
              url:'conf/notifica_evento.php',
              data:{
               id_editar: $("#modal_edit input[name='editar']").val(),
               titulo: $("#modal_edit input[name='titulo']").val(),
               descricao: $("#modal_edit textarea[name='descricao']").val(),
               hora: $("#modal_edit input[name='responsavel']").val(),
               data: $("#modal_edit input[name='data']").val()
                
              } 
              }).done(function(returno){


                 alert(returno);
               location.reload();

              });

         });
        
       });
      
      });

        /*fim da execulção  do pesquisar */
            });

          
       });
      
      $(".ex_not").click(function(event){
        event.preventDefault();
        
         $.ajax({
            type:'post',
            url:'conf/notifica_evento.php',
            data:{
             excluir: $(this).attr('href')
            }}).done(function(returno){

             alert(returno); 
              location.reload();
            })
        
      });
      $(".edit_not").click(function(event){
        event.preventDefault();

         var editar = $(this).attr('href');


         $.ajax({
       type: 'post',
       url: 'conf/notifica_evento.php',
       data:{
        id: $(this).attr('href')
       } 
       }).done(function(returne){
       
       
         $("#mostra_notifica").html(returne);

         $("#modal_edit .close").click(function(){
           $("#modal_edit").hide(); 
         });
         $("#modal_edit .adicionar_edita").click(function(){
           
           
           $.ajax({
              type: 'post',
              url:'conf/notifica_evento.php',
              data:{
               id_editar: $("#modal_edit input[name='editar']").val(),
               titulo: $("#modal_edit input[name='titulo']").val(),
               descricao: $("#modal_edit textarea[name='descricao']").val(),
               hora: $("#modal_edit input[name='responsavel']").val(),
               data: $("#modal_edit input[name='data']").val()
                
              } 
              }).done(function(returno){


                 alert(returno);
               location.reload();

              });

         });
        
       });
      
      });



   </script>


