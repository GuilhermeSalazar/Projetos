<?php 


 $sql = mysqli_connect('localhost','root','','mldisplay')or die(" erro na rede");


      $nome = "nome";

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   ?>

        <style type="text/css">
.media{
           cursor:pointer;  
          }
          #get{
            max-height:350px; 
           overflow: auto;   
          }
          .enviarda{
          font-family: tahoma;
          font-size:16px;
          max-width: 20em; word-wrap: break-word;   
          }
          {
          background: red;  
          }
         .returno{
          max-width:inherit;  
         }
         .exibe_img12{
          display:none; 
          padding:0 2px 2px 2px; 
          background:#fff;
          max-width:400px;
          max-height:400px;
          position: absolute;
          top:70px;
          left:40%; 
          z-index:1;  
         border-radius:5px;
         }
         .exibe_img12 img{
          width:100%; 
         }

         .img12_header{
          text-align:right; 
         }
         .img12_header a{
         font-family:arial;
         color:#999;
         text-decoration:none;
         margin-right:5px;    
         }
         .img12_header a:hover{
         color:#000; 
         }
        </style>

 <!-- ########## START: MAIN PANEL ########## -->
    <div class="exibe_img12">
        <div class="img12_header">
            <h3></h3>
           <a href="">X</a>
        </div>
        <img src="anexos/NCR.png" alt="">
      </div>
    <div class="br-chatpanel">
      
   
      <div class="br-chatpanel-left">
          

        <div class="br-chatlist">
          <div  class='media selected medial'>
            <div class='br-img-user online'><img src='https://via.placeholder.com/500' alt=''></div>    
            <div class='media-body'> 
              <div class='media-contact-name'>
                <span>POST GERAL</span>
                <span></span>
              </div>
              <p> </p>
            </div><!-- media-body -->
          </div><!-- media --> 
          <div id="get" style="overflow: auto">
          
          </div>
          
        </div><!-- br-chatlist -->
      </div><!-- br-chatpanel-left -->
      <div class="br-chatpanel-body">
        <div class="br-chat-header">
          <div class="br-img-user online"><img src="https://via.placeholder.com/500" alt=""></div>
          <div class="chat-name">
            <h6 id="para">POST GERAL</h6>
             <input style="display: none"  type="text" name="para" value="POST GERAL">
          </div>
          <nav class="nav">
            <a href="" class="nav-link"><i class="icon ion-ios-trash-outline"></i></a>
            <a href="" class="nav-link chat_x"><i class="icon ion-ios-trash-outline"></i></a>
          </nav>
        </div><!-- br-msg-header -->
        <div class="br-chat-body">
          <div class="content-inner">
            <div class="returno">
            <label class="chat-time"><span>ativo</span></label>
            </div><!-- media -->
          </div><!-- content-inner -->
        </div><!-- br-chat-body -->
        <div  class="br-chat-footer ht-80">
          <div>
            <textarea id="" style="border:none; max-width:80%; height:70px; background:#141d28; font-family:arial_bold; color:#666; padding:1px;" type="text" name="msg" class="form-control"  placeholder="Digite sua mensagem"></textarea>
            <!--<input style="border:1px solid #999; width:70%;" type="text" name="msg" class="form-control"  placeholder="Digite sua mensagem">-->
            <?php echo "<input style='display: none; ' type='text' name='id' class='form-control' value='".$nome."'>"; ?>
          </div>
          <nav class="nav">
             <style type="text/css">
               .nav button{
                background:none;
                font-size:20px;                 
               }
               #smood{
                display:none;
               width:200px;
               height:50px; 
               top:-58px;
               left:20px;
               float:right; 
               background:#141d28; 
               overflow:auto;
               overflow: none;        
               padding:5px;
               border-top-left-radius:10px; 
               border-top-right-radius:10px; 
               }
              .anexado{

                width:500px;

              }

               #smood button{
              outline:none; 
               }
               #smood::-webkit-scrollbar {
                width:5px;  
                } /* configurando scroll */
               #smood::-webkit-scrollbar-track {
                background: rgba(0,0,0,0.1); 
              }
               #smood::-webkit-scrollbar-thumb { 
                border-radius:10px;
                 background:#8b8778;
              }
              .emood, .emood_exit{
               font-size:30px;  
               left:5px;
               top:10px; 
              }
              .emood_exit{
              color:#999;  
              }
              .emood_exit{
              display:none;   
              }
             </style>
             
          
            <a href="" class="nav-link enviar"><i class="menu-item-icon icon ion-ios-navigate-outline tx-48"></i></a>
            <a href="" data-toggle="modal" data-target="#anexar_chat" class="nav-link"><i class="icon ion-paperclip tx-48"></i></a>
            <a href=""class="emood">😃</a>
            <a href=""class="emood_exit">😃</a> 
            <div id="smood">
               <div class="smoou">
           <button type="button" class="btn btn-sm">😁</button>
            <button type="button" class="btn btn-sm">😂</button>
            <button type="button" class="btn btn-sm">😃</button>
            <button type="button" class="btn btn-sm">😄</button>
            <button type="button" class="btn btn-sm">😅</button>
            <button type="button" class="btn btn-sm">😆</button>
            <button type="button" class="btn btn-sm">😉</button>
            <button type="button" class="btn btn-sm">😊</button>
            <button type="button" class="btn btn-sm">😋</button>
            <button type="button" class="btn btn-sm">😌</button>
          </div>
          </div>
          </nav>
        </div><!-- br-chat-footer -->
      </div><!-- br-chatpanel-body -->
     </div>

     <!-- anexar arquivo  -->


      <div id="anexar_chat" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Anexar arquivo</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                
                          <div class="form-group">
                          <input id="anexar" type="file" name="anexo"  placeholder="">
                        </div>
                          <div class="anexo_return"></div>
                        <?php echo "<span class='eu' style='display:none'>".$login."</span>"; ?>
                </div>
                <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" data-dismiss="modal">Close</button>
                  <button class="anexar_no_chat btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" type="button">Anexar arquivo</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->


          <div id="visual_arquivo" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">VISUALIZAR ARQUIVO</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-25 notificacao_form">
                
                          <div class="form-group">
                          <input id="anexar" type="file" name="anexo"  placeholder="">
                        </div>
                          <div class="visualizar"></div>
                        
                </div>
                <div class="modal-footer">
                 
                  <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" data-dismiss="modal">Close</button>
                  <button class="anexar_no_chat btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold" type="button">Anexar arquivo</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->

     

 <?php   include 'padrao/footer.php'; ?>
<script src="js/config.js"></script>
<script>

    </script>