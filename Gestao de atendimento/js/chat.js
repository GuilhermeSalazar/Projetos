
  function contac_online(){


    $.get("padrao/contato.php", function(contac){

     $("#contatc_online").html(contac);

    })


  }

  window.setInterval('contac_online()', 1000);

//lista de menu lateral da seleção do sistema 


function menu_lateral(){

$.get("padrao/config_menu_lateral.php", function(lateral){


// chama chat  e monta o box  _______________________________________________________  
 $("#contato_perfil-list").html(lateral); 


 $("#contato_perfil-list a").click(function(event){
 event.preventDefault();
   $(".carrd").removeClass("d-none");
    var  eu, para ;
     eu = $(this).attr("alt");
     para = $(this).attr("href");
    $.ajax({
    type:'POST',
    url: 'conf/message.php',
    data: {
     de : eu,
     para : para,
     acao : 'montar'
      
    }   
    }).done(function(fdr){ 
          var array = JSON.parse(fdr);
            // alterando corpo do chat

          var startut = array['status'];

            if(startut > 0){

              startut = 'bg-success';

            }else{

              startut = 'bg-gray-500';


            }

         $(".carrd .header h4").html("<h4><span class='square-10 "+startut+"'></span> "+array['usuario']+"<button class='close'><i class='fa fa-window-close tx-12' aria-hidden='true'></i></button><button class='min'><i class='fa fa-window-minimize tx-12' aria-hidden='true'></i></button><button class='true d-none '><i class='fa fa-window-maximize tx-12' aria-hidden='true'></i></button></h4>");
           $(".carrd .header .de_id").attr('href',array['fkid']);
           $(".carrd .header .para_id").attr('href',array['id']);
           // funções de maximizar e minimizar o box ----------//
             $("#bar-msg .carrd .close").click(function(){
             $("#bar-msg .carrd").addClass("d-none");
              $.ajax({
          type:'post',
          url:'conf/message.php',
          data:{
           de : $(".carrd .header .de_id").attr('href'),
           para : $(".carrd .header .para_id").attr('href'),  
           acao : "close"
              }
              }).done(function(fdfd){

              });

             });
             $("#bar-msg .carrd .min").click(function(){
         $(this).hide();
          $("#bar-msg .true").show();
         $("#bar-msg button").removeClass("d-none");
         $("#bar-msg .carrd .body").hide();
         $("#bar-msg .carrd .footer").hide();
         });
        
    
         $("#bar-msg .carrd .true").click(function(){
          $("#bar-msg .min").show();
          $("#bar-msg .true").hide();
          $("#bar-msg .carrd .body").show();
          $("#bar-msg .carrd .footer").show();
         });
           //-----------------------------------------------------//
          //____________________envio se mensagem com enter do teclado______///
       

           $(function() {
            $("#bar-msg").draggable();
          });



    }) 


  

})


})
//--------------------------------------------------- fim da configuração chat lateral 
}



window.setInterval('menu_lateral()', 1000);




// processador do chat 
function processo(){
   
  var de_quem, para_quem;
   
   de_quem =  $(".carrd .header .de_id").attr('href');
    para_quem =  $(".carrd .header .para_id").attr('href');

     if(de_quem = ""){}else{

          $.ajax({
        	type:'post',
        	url:'conf/message.php',
        	data:{
        	 de : $(".carrd .header .de_id").attr('href'),
        	 para : $(".carrd .header .para_id").attr('href'),	
        	 acao : "processador"
        	}
        }).done(function(attr){

         $(".carrd .body").html(attr);
          
         
         $(".carrd .body a img").click(function(event){
             var img = $(this).attr('alt');
             var alterada = "anexos/" + img;

              $("#img_chat .modal-body img").attr('src', alterada);

         })
           
           
        

        })

     }

}

function scroll(){

$('.carrd .body').animate({scrollTop: 9999999}, 500);

}

 var scroll_chat = setInterval('scroll()',500);
  window.setInterval("processo()",500);


  
 $("#bar-msg .carrd .footer textarea").keypress(function(e) {
                	var keycode = (e.keyCode ? e.keyCode : e.which);
                  if(keycode == '13'){
                  	 window.setInterval('scroll()',500);
                    var mensagem, para, de, hora;

                      // variaveis para enviar no sistema 
                      hora = $("#horareal").text();
                       mensagem = $("#bar-msg .carrd .footer textarea").text();
                       de = $(".carrd .header .de_id").attr('href');
                       para = $(".carrd .header .para_id").attr('href');
                     //____________enviando para o banco de dados ___________________\\
                      
                      $.ajax({
                      	type:'post',
                      	url:'conf/message.php',
                      	data:{
                      	 de : de,
                      	 para : para,
                      	 msg : mensagem,
                      	 hora : hora,
                      	 acao : 'mensager'	
                      	}
                      }).done(function(ert){

                      	$("#bar-msg .carrd .footer textarea").text(ert);


                      })



                    }
                 });







 //-------------------------------------------------------------------------------------//
//  FUNCTION PARA EXIBIR AS NOTIFICAÇÕES DA MENSAGEM.
//

 function Visualizar(){
 $.get("conf/visualizou.php", function(ret225){
  $(".notifica-menssage").html(ret225);
 
  $(".notifica-menssage a").click(function(event){
    event.preventDefault();
     
     $(".carrd").removeClass("d-none");
    var  eu, para ;
     eu = $(this).attr("alt");
     para = $(this).attr("href");
    // ALTERAR  COM SISTEMA //
     
     $.ajax({
      type :'POST',
      url:'conf/message.php',
      data:{
       de : eu,
       para : para,
       acao :'alt' 
      }
     }).done(function(dates){
     })




     //MONTANDO CHAT NO VISUALIZAÇÕES 
    $.ajax({
    type:'POST',
    url: 'conf/message.php',
    data: {
     de : eu,
     para : para,
     acao : 'montar'
      
    }   
    }).done(function(fdr){ 
          var array = JSON.parse(fdr);
            // alterando corpo do chat
         $(".carrd .header h4").html("<h4><span class='square-10 bg-success'></span> "+array['usuario']+"<button class='close'><i class='fa fa-window-close tx-12' aria-hidden='true'></i></button><button class='min'><i class='fa fa-window-minimize tx-12' aria-hidden='true'></i></button><button class='true d-none '><i class='fa fa-window-maximize tx-12' aria-hidden='true'></i></button></h4>");
           $(".carrd .header .de_id").attr('href',array['fkid']);
           $(".carrd .header .para_id").attr('href',array['id']);
           // funções de maximizar e minimizar o box ----------//
             $("#bar-msg .carrd .close").click(function(){
             $("#bar-msg .carrd").addClass("d-none");
              $.ajax({
          type:'post',
          url:'conf/message.php',
          data:{
           de : $(".carrd .header .de_id").attr('href'),
           para : $(".carrd .header .para_id").attr('href'),  
           acao : "close"
              }
              }).done(function(fdfd){

              });

             });
             $("#bar-msg .carrd .min").click(function(){
         $(this).hide();
          $("#bar-msg .true").show();
         $("#bar-msg button").removeClass("d-none");
         $("#bar-msg .carrd .body").hide();
         $("#bar-msg .carrd .footer").hide();
         });
         $("#bar-msg .carrd .true").click(function(){
          $("#bar-msg .min").show();
          $("#bar-msg .true").hide();
          $("#bar-msg .carrd .body").show();
          $("#bar-msg .carrd .footer").show();
         });
           //-----------------------------------------------------//
          //____________________envio se mensagem com enter do teclado______///
   
    }) 


  })

 })
 }
 window.setInterval("Visualizar()", 500);

// ________________________________SENSOR DO CHAT   PARA ALERTAR ___________________

function Sensormsg(){


$.get("conf/sensor_msg.php", function(sensor){

   var trase = sensor;


    switch(trase){
        
        case 'true':
          
          $(".sensormsg").show();

        break;
        case 'false':

          $(".sensormsg").hide();

        break;


    }



});

}

 window.setInterval("Sensormsg()", 500);



$(".carrd .footer ul li .false").click(function(event){
  event.preventDefault();
  $(this).hide();
  $(".carrd .footer ul li .tre").show();

  $(".carrd .smood ").removeClass('d-none');

})

 $(".carrd .footer ul li .tre").click(function(event){
  event.preventDefault();
    $(this).hide();
  $(".carrd .footer ul li .false").show();
  $(".carrd .smood ").addClass('d-none');
 })
 $(".carrd .footer textarea").click(function(event){
  event.preventDefault();
    $(".carrd .footer ul li .tre").hide();
  $(".carrd .footer ul li .false").show();
  $(".carrd .smood ").addClass('d-none');
 })
// inserir smoood no form //

$(".carrd .smood button").click(function(){
 var gif = $(this).text();

 $(".carrd .footer textarea").val($("#bar-msg .carrd .footer textarea").val() + gif);


});

$("#you12 .modal-body form input[type='submit']").on('click', function(){


     
});
//Subindo imagem   e arquivos no chat 




  document.getElementById('img_ch').onchange = function(e){

    //   de_fk_quem =  $(".carrd .header .de_id").attr('href');
    // para_fk_quem =  $(".carrd .header .para_id").attr('href');

    // $.ajax({
    //   type:'POST',
    //   url:'conf/anexar_chat.php',
    //   data:{
    //     de: de_fk_quem,
    //     para : para_fk_quem, 
    //      hora : $("#relogio").text()
    //   }}).done(function(){

    // })


     if(e.target.files != null && e.target.files.length !=0){
      var arquivo = e.target.files[0];
      var fd = new FormData();
      fd.append("anexar",arquivo);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
       if(xmlhttp.readyState===4 & xmlhttp.status===200)
         
        var tipo;
      var arquivo_obj = JSON.parse(xmlhttp.responseText);

           if(arquivo_obj['tipo'] == '.jpg' || arquivo_obj['tipo'] == '.png' || arquivo_obj['tipo'] == '.gif'){
          
              tipo = "imagem";

           }else{


              tipo = "arquivo";

           }


         $("#anexo .modal-body label").text(arquivo_obj['arquivo']);
         $("#anexo .modal-body span").text(tipo);
       $("#img_ch").hide();
              // envia as informações da imagem 
         


      }
      xmlhttp.open("POST","conf/anexar_chat.php", true);
       xmlhttp.send(fd);
     }
        






    }


    $("#anexo .modal-body button").click(function(event){
            event.preventDefault();


             // DEPOIS DO ENVIO DO ARQUIVO 
             // VAMOS ADICIONAR AS MENSAGENS DO USUARIO //
                 var anexo_arquivo, anexo_de, anexo_para, anexo_hora;
                 anexo_hora = $("#horareal").text();
               anexo_de = $(".carrd .header .de_id").attr('href');
               anexo_para = $(".carrd .header .para_id").attr('href');
               anexo_arquivo = $("#anexo .modal-body label").text();
              
              

              $.ajax({
                type:'POST',
                url:'conf/anexar-banco.php',
                data:{
                de: anexo_de,
                hora: anexo_hora,
                para: anexo_para,
                arquivo: anexo_arquivo
                 }}).done(function (return_anexo){
                 $("#anexo .modal-body button").hide();
                 $("#anexo .modal-body label").text(return_anexo); 
              })

          })  

    $("#anexo .modal-header .close").click(function(){
       $("#anexo .modal-body label").text('Arquivo');
         $("#anexo .modal-body span").text('');
       $("#img_ch").show();
       $("#img_ch").val('');
           $("#anexo .modal-body button").show();
    })