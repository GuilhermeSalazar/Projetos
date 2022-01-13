$(document).ready(function(){
       

    //anexar arquivo chat 

    document.getElementById('anexar').onchange = function(e){
     if(e.target.files != null && e.target.files.length !=0){
      var arquivo = e.target.files[0];
      var fd = new FormData();
      fd.append("anexar",arquivo);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
       if(xmlhttp.readyState===4 & xmlhttp.status===200)
         
         $(".anexo_return").text(xmlhttp.responseText);
      }
      xmlhttp.open("POST","conf/anexar_chat.php", true);
       xmlhttp.send(fd);
     } 
    }
       // anexar  no chat 


       $(".anexar_no_chat").click(function(){            
         //var anexo = $(".anexo_return").html();
         //var eu = $(".eu").html();
         // var ele = $(".chat-name input[name='para']").val();
        
              $.ajax({
       type: 'post',
       url: 'conf/anexo_referencia.php',
       data:{
       mensagens : $(".anexo_return").html(),
       quem :    $(".eu").html(),
       para :    $(".chat-name input[name='para']").val(),
       hora : $("#relogio").html(),
       data : $("#brDate").html()
       
       }}).done(function(returnar){
          alert(returnar);
       });
      

      });

      //emotcons//

   $(".emood").click(function(evento){
    evento.preventDefault();
    $("#smood").show();
      $(".emood").hide();
      $(".emood_exit").show();
   });
   $(".emood_exit").click(function(evento){
    evento.preventDefault();
     $("#smood").hide();
      $(".emood").show();
      $(".emood_exit").hide();
   });
    $(".smoou button").click(function(){
       var smood = $(this).text();
       $(".br-chat-footer  textarea[name='msg']").val($(".br-chat-footer  textarea[name='msg']").val() + smood);

    });

   //função para excluir
   $(".chat_x").click(function(event){
    event.preventDefault();
      var   msg_x = $(".chat-name input[type='text']").val();
      

      $.ajax({
       url:'conf/msg.php',
       type:'post',
       data:{
        msg: $(".chat-name input[type='text']").val()
       }
      
      }).done(function(returno){
      
        alert(returno);
      });


    });
    
  //  nav  de navegação 
  
   
   $(".profider").click(function(event){
      event.preventDefault();
        $("#get").stop();
       $(".media").removeClass("selected");
      $(this).addClass("selected");
         $.ajax({
       type: 'post',
       url: 'conf/visto.php',
       data:{
       nome:    $(this).find('span').html() 
       } 
       }).done(function(returne){

       });
     
      var trazer = $(this).find('img').attr("src");
      var nome =   $(this).find('span').html();      
      var star =   $(this).find('.br-img-user').attr("class");
        

    var     html ="<div class='br-chat-header'>"+
   "<div class='"+star+"'><img src='"+trazer+"' alt=''></div>"
   +"<div class='chat-name'>"
    +"<h6 id='para'>"+nome+"</h6>"
    +" <input style='display: none' type='text' name='para' value='"+nome+"'></div>"
        +"<nav class='nav'>"
         +"<a href='' class='nav-link'><i class='icon ion-ios-trash-outline'></i></a>"
            +"<a href='' class='nav-link chat_x'><i class='icon ion-ios-trash-outline'></i></a>"
          +"</nav>"
        +"</div>";

        
          $(".br-chat-header").replaceWith(html);

           
    



        //$.ajax({
          //            type:'post',
           //           url: 'conf/bate.php',
            //          data:{
             //          priver :  $(this).find('span').html(),
              //         img :  $(this).find('img').attr("src")
               //       } 
                //    }).done(function(event){
                       
                //       $(".br-chatpanel-body").html(event);
            
            //        });
    
      
      
    }); 
   // funcção para enviar no botao 
  $(".br-chat-footer .nav .enviar").click(function(e){
    e.preventDefault();

     $(".br-chat-footer textarea[name='msg']").val();

   $.ajax({
       type: 'post',
       url: 'conf/chat.php',
       data:{
       mensagens :    $(".br-chat-footer  textarea[name='msg']").val(),
       quem :    $(".br-chat-footer input[name='id']").val(),
       para :    $(".chat-name input[name='para']").val(),
       hora : $("#relogio").html(),
       data : $("#brDate").html()
       
       } 
       }).done(function(returne){
          $('.br-chat-body').animate({scrollTop: 9999999}, 500);
       
        $(".br-chat-footer  textarea[name='msg']").val('');
       // $(".returno").append(returne);
       });
 //$(document).keypress(function(e){
 if(e.wich == 13 || e.keyCode == 13){
   
  
  }
 });
});
//função para enviar pela via enter do teclado 

$(".br-chat-footer  textarea[name='msg']").keypress(function(event){

  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){
    
     $.ajax({
       type: 'post',
       url: 'conf/chat.php',
       data:{
       mensagens :    $(".br-chat-footer  textarea[name='msg']").val(),
       quem :    $(".br-chat-footer input[name='id']").val(),
       para :    $(".chat-name input[name='para']").val(),
       hora : $("#relogio").html(),
       data : $("#brDate").html()
       
       } 
       }).done(function(returne){
          $('.br-chat-body').animate({scrollTop: 9999999}, 500);
       
        $(".br-chat-footer  textarea[name='msg']").val('');
       // $(".returno").append(returne);
       });


  }

});
 
 function  bate(){
  
   $("#bodyimg").click(function(){
    alert("oi como vai vc");
   });
  
$.ajax({
       type: 'post',
       url: 'conf/mensager.php',
       data:{
       quem : $(".chat-name input[type='text']").val()
       } 
       }).done(function(resultado){
       
      $('.br-chat-body').animate({scrollTop: 9999999} );
       $(".returno").html(resultado);

         

       });

    

// $.get("conf/bate.php", function(resultado){
  //    $(".returno").html(resultado);
  //    $('.br-chat-body').animate({scrollTop: 9999999}, 500);
 //});
    

  var table = $(".chat-name input[type='text']").val();


}
$(".br-chat-body").scroll(function(){
 
});



function list(){
 $.get("conf/chat-lateral.php", function(resultado){
      $("#get").html(resultado);

      $(".medial").click(function(event){
      event.preventDefault();
        $("#get").stop();
       $(".medial").removeClass("selected");
      $(this).addClass("selected");
         $.ajax({
       type: 'post',
       url: 'conf/visto.php',
       data:{
       nome:    $(this).find('span').html() 
       } 
       }).done(function(returne){

       });
     
      var trazer = $(this).find('img').attr("src");
      var nome =   $(this).find('span').html();      
      var star =   $(this).find('.br-img-user').attr("class");
        

    var     html ="<div class='br-chat-header'>"+
   "<div class='"+star+"'><img src='"+trazer+"' alt=''></div>"
   +"<div class='chat-name'>"
    +"<h6 id='para'>"+nome+"</h6>"
    +" <input style='display: none' type='text' name='para' value='"+nome+"'></div>"
        +"<nav class='nav'>"
         +"<a href='' class='nav-link'><i class='icon ion-ios-trash-outline'></i></a>"
            +"<a href='' class='nav-link chat_x'><i class='icon ion-ios-trash-outline'></i></a>"
          +"</nav>"
        +"</div>";

        
          $(".br-chat-header").replaceWith(html);

       
        });


  
 });
 } 
function lista(){

  $.ajax({
       type: 'post',
       url: 'conf/lista.php',
       data:{
       } 
       }).done(function(returne){
       
       
        $("#listagem").html(returne);
       // $(".returno").append(returne);
       });


}


window.setInterval("bate()",1000);
window.setInterval("list()",1000);
window.setInterval("lista()",1000);






 $(function(){
       

          $('#btnLeftMenuMobile').removeClass('d-none');
          $(this).addClass('d-none');
          $('.br-chatpanel').removeClass('show-body');
        })
