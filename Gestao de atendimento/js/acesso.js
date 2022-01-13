/*
ABRINDO CHAMADO INTERNO 

*/

$("#abrir_chamado .form-group input[name='cliente']").keypress(function(){
  $(this).keyup(function(e){
  	var teclado = $(this).val();
        if(teclado == ""){

      	$("#acesso-resul").html("");

         

        }else{
      $.ajax({
      	type:'post',
      	url:'conf/chamado_conf.php',
      	data:{
      	acao : '1',
      	texto : teclado	
      	},
      	BeforeSend: function(){
      	$("#acesso-resul").html("Carregando..");	
      	}
      }).done(function(retur_ac){
      	$("#acesso-resul").html(retur_ac);
          // ação de clicar em   lista regada por ajax
        $("#acesso-resul li a").click(function(event){
        	event.preventDefault();
            
           var clicado = $(this).text(); 
           
           $("#acesso-resul").html("");

           var item = $(this).attr("href");

           $.ajax({
           	 type:'post',
           	 url:'conf/autocomplete.php',
           	 data:{
           	 tabela: 'cliente',
           	 id : item	
           	 }
           }).done(function(ret_ac){
                 
                 var auto = JSON.parse(ret_ac);

              $("#abrir_chamado .form-group input[name='cliente']").val(auto['razao']);      
              $("#abrir_chamado .form-group input[name='contato']").val(auto['nome']);      
              $("#abrir_chamado .form-group input[name='fones']").val(auto['fones']);      
              $("#abrir_chamado .form-group input[name='email']").val(auto['email']);      
              $("#abrir_chamado .form-group input[name='endereco']").val(
              auto['endereco']+' '+ auto['numero'] + ' ' + auto['complemento']
              + ' ' + auto['bairro'] + ' ' + auto['cidade']+ ' ' + auto['uf']); 


               $.ajax({
                type:'POST',
                url:'conf/verificar_cliente.php',
                data:{
                 razao : auto['razao'],
                 nome : auto['nome'],
                 id : auto['id'] 
                }
               }).done(function(verificar){
                  
                  $("#abrir_chamado .contrato").html(verificar);

               })


                   


           })

         
        })


      })
      }
   //$("#acesso-resul").html(teclado);    	
  })
});

$("#abrir_chamado .form-group #para option").click(function(){
	var option ;

	option = $(this).val();
    if(option == '2'){

    $("#abrir_chamado .tecnico_cha").hide();

    }
    if(option == '1'){

    $("#abrir_chamado .tecnico_cha").show();

    }
      
})

$("#abrir_chamado .modal-body button").click(function(){
	var solicitado, cliente, fones, email, endereco, para, tecnico, ocorrencia, hora, data;

	  solicitado = $("#abrir_chamado .form-group input[name='contato']").val();
    cliente = $("#abrir_chamado .form-group input[name='cliente']").val();
	    fones = $("#abrir_chamado .form-group input[name='fones']").val();
	    email = $("#abrir_chamado .form-group input[name='email']").val();
	    endereco = $("#abrir_chamado .form-group input[name='endereco']").val();
	    para = $("#abrir_chamado .form-group select[name='para']").val();
	    tecnico = $("#abrir_chamado .form-group select[name='tecnico']").val();
	    ocorrencia = $("#abrir_chamado .form-group textarea[name='ocorrencia']").val(); 
	    aberto = $("#abrir_chamado .aberto").text(); 
        hora = $("#horareal").text();
        

	$.ajax({
		type:'post',
		url:'conf/abrir_chamado.php',
		data:{
     contato : solicitado, 
		 cliente : cliente,
		 fones: fones,
		 email: email,
		 endereco: endereco,
		 para: para,
		 tecnico: tecnico,
		 ocorrencia: ocorrencia,
		 hora: hora,
		 aberto: aberto	
		}
	}).done(function(return_log){
		$("#return .modal-body").html(return_log);
		$("#abrir_chamado").hide();
		$("#return .close").click(function(){
		 location.reload();	
		})
	})
})
$(".ativacao").click(function(event){
 event.preventDefault();
   var href = $(this).attr('href');
    $.ajax({
    type:'post',
    url:'conf/abrir_chamado.php',
    data:{
     ativar : href	
    }	
    }).done(function(retur_active){
     alert(retur_active);
     location.reload();	
    })	
})

$(".alt_status").click(function(event){
event.preventDefault();

$(".nivel").removeClass("d-none");
$(this).hide();

})


// nivel de acesso 


$(".nivel option").click(function(){
 
 var option = $(this).val();

 $.ajax({
  type:'post',
  url:'conf/abrir_chamado.php',
  data:{
  nivel: option	
  }	
 }).done(function(){
  location.reload(); 	
 })

})
//__________________________________________________________________________


// ATENDENDO CLIENTE NA FILA 


$(".fila_atendimento tr td a").click(function(event){
event.preventDefault();
var id_atender = $(this).attr('href');
var btntext = $(this).text();
  $.ajax({
  type:'post',
  url:'conf/abrir_chamado.php',
   data:{
    catar : id_atender,
    btntext : btntext	
   }	
  }).done(function(catar){
  
       var retur = catar;

       if(retur == '01'){

  	   location.reload();
        
       }else{
           var obgjto = JSON.parse(catar);
            $("#chamado_atendente .modal-header h6").html('Protocolo: '+obgjto['numero']+' <br> Aberto por: '+obgjto['passado']+' <br> Data de Abertura: '+obgjto['data']+', '+obgjto['hora']);
            $("#chamado_atendente .modal-body .form-group input[name='cliente']").val(obgjto['nome']);         
            $("#chamado_atendente .modal-body .form-group input[name='id']").val(obgjto['id']);         
            $("#chamado_atendente .modal-body .form-group input[name='fones']").val(obgjto['fone']);         
            $("#chamado_atendente .modal-body .form-group input[name='email']").val(obgjto['email']);         
            $("#chamado_atendente .modal-body .form-group input[name='endereco']").val(obgjto['endereco']);         
            $("#chamado_atendente .modal-body .form-group textarea[name='ocorrencia']").val(obgjto['ocorrencia']);         

       }
     $("#chamado_atendente .modal-body button").click(function(){
      var bgt_boot = $(this).text();
       //declarando variaveis dentro do sistema 
          var nome, id, fone, email, endereco, ocorrencia;
       // licando variaveis 
         nome = $("#chamado_atendente .modal-body .form-group input[name='cliente']").val();
         id = $("#chamado_atendente .modal-body .form-group input[name='id']").val();
         fone = $("#chamado_atendente .modal-body .form-group input[name='fones']").val();
         email = $("#chamado_atendente .modal-body .form-group input[name='email']").val();
         endereco = $("#chamado_atendente .modal-body .form-group input[name='endereco']").val();
         ocorrencia = $("#chamado_atendente .modal-body .form-group textarea[name='ocorrencia']").text();
      switch(bgt_boot){
       case 'Editar':
             //enviar para validação 
             $.ajax({
              type:'post',
              url: 'conf/atendente_chamado_fila.php',
              data:{
              id: id,  
              nome : nome,
              fone: fone,
              email: email,
              endereco : endereco,
              ocorrencia : ocorrencia,
              acao : 'editar'  
              } 
             }).done(function(f000){

               alert(f000);
               location.reload();

             })
       break;
       case'Excluir':
          //enviar para validação 
             $.ajax({
              type:'post',
              url: 'conf/atendente_chamado_fila.php',
              data:{
              id: id,  
              nome : nome,
              fone: fone,
              email: email,
              endereco : endereco,
              ocorrencia : ocorrencia,
              acao : 'excluir'  
              } 
             }).done(function(f000){

               alert(f000);
               location.reload();

             })
       break;
       case'Transferir':
        
         $("#chamado_atendente").hide();

         var id_chamado = $("#chamado_atendente .modal-body .form-group input[name='id']").val();

         //function pra exit 

         $("#transferir_tecnico .close").click(function(){
          location.reload();
         })
         // enviar para o php
         $("#transferir_tecnico .br-menu-link").click(function(){
           var para;
           para = $("#transferir_tecnico .para").val();


             $.ajax({
               type:'post',
               url:'conf/atendente_chamado_fila.php',
               data:{
                acao : 'transferir',
                chamado :  id_chamado,
                novo_tecnico : para,
                hora : $("#horareal").text()
               }
             }).done(function(novotecnico){
              alert(novotecnico);
              location.reload();
             })

         })


      break;   
      }


     })
  })

})
// FUNÇÃO ABRIR PAINEL DE ACESSO  REMOTO 
$("#cpaniel").click(function(event){
event.preventDefault();

window.open("http://bruno/acesso%202/painel_acesso.php");
})
//_____________________________________________________________________

// FUNÇÃO DO MODAL PARA EXIBIR OS CHAMADOS ATENDIDOS 

$(".acets").click(function(){
 
 var clicou, nome;


 clicou = $(this).attr('href');
 nome = $(this).attr('alt');

 $.ajax({
  type:'post',
  url:'conf/buscando_chamado_remoto.php',
   data:{
    id : clicou,
    login : nome	
   }	
  }).done(function(cat001){
     
      var obJeson = JSON.parse(cat001);
      

       var title = "Protocolo: "+obJeson['numero']+" <br> Aberto por: "+obJeson['passado']+"<br> Data de Abertura: "+obJeson['data']+" - "+obJeson['hora'];

      $("#chamado_atendido .modal-header h6").html(title);
      $("#chamado_atendido .modal-header h5").html(obJeson['fk_tecnico']);
      $("#chamado_atendido .form-group input[name='cliente']").val(obJeson['nome']);
     $("#chamado_atendido .form-group input[name='solicitado']").val(obJeson['razao']);
      $("#chamado_atendido .form-group input[name='fones']").val(obJeson['fone']);
     $("#chamado_atendido .form-group input[name='email']").val(obJeson['email']);
     $("#chamado_atendido .form-group textarea[name='laudo']").text(obJeson['laudo']);
     $("#chamado_atendido .form-group input[name='id']").val(obJeson['id']);
     $("#chamado_atendido .form-group input[name='ocorrencia']").val(obJeson['ocorrencia']);


     $("#chamado_atendido .modal-body button").click(function(){
     	// declarando variaveis 
     	var btn = $(this).text();
        var btn_nome = $("#chamado_atendido .form-group input[name='cliente']").val();
        var btn_fone = $("#chamado_atendido .form-group input[name='fones']").val();
        var btn_email = $("#chamado_atendido .form-group input[name='email']").val();
      var btn_endereco = $("#chamado_atendido .form-group input[name='endereco']").val();
       var btn_ocorrencia =  $("#chamado_atendido .form-group input[name='ocorrencia']").val();
       var btn_laudo =  $("#chamado_atendido .form-group textarea[name='laudo']").text();
       var btn_id = $("#chamado_atendido .form-group input[name='id']").val(); 
       var btn_hora = $("#horareal").text();
       var btn_tecnico = $("#chamado_atendido .modal-header h5").text();
        
             $.ajax({
             	type:'post',
             	url:'conf/chamado_function.php',
             	data:{
                acao: btn,
             	nome: btn_nome,
             	fone: btn_fone,
             	email: btn_email,
             	endereco : btn_endereco,
             	ocorrencia: btn_ocorrencia,
              laudo : btn_laudo,
             	id: btn_id,
             	hrsfinal : btn_hora,
              fk_tecnico : btn_tecnico	
             	}
             }).done(function(retuoo){

             	alert(retuoo);
             	location.reload();
             })    
              
             
     })
  	
  })


})

//_____________________________________________________________________________________
//  FUNÇÃO  DA PAGINA DE BUSCA DE CHAMADOS FINALIZADOS 


$("#lista_atendidos table tr td a ").click(function(href){
  href.preventDefault();

   var  chamado = $(this).attr('href');
   var  tecnico = $(this).attr('alt');


     $.ajax({
        type:'post',
        url:'conf/atendente_ch.php',
        data:{
         chamado : chamado,
         tecnico : tecnico 
        }
     }).done(function(href){
        var arra = JSON.parse(href);

        $("#chamado_atend .modal-header h6").html("Protocolo: "+arra['protocolo']+" | Data :"+arra['data']+" | Hora_abertura :"+arra['hora']+"hrs  <br>      Tecnico : "+arra['tecnico']+" | Aberto: "+arra['passado']+"");
        $("#chamado_atend .modal-body input[name='cliente']").val(arra['cliente']);  
        $("#chamado_atend .modal-body input[name='fones']").val(arra['fone']);  
        $("#chamado_atend .modal-body input[name='email']").val(arra['email']);  
        $("#chamado_atend .modal-body input[name='id']").val(arra['id_chamado']);  
        $("#chamado_atend .modal-body input[name='endereco']").val(arra['endereco']);  
        $("#chamado_atend .modal-body textarea").text(arra['ocorrencia']);

       $("#chamado_atend .br-menu-link").click(function(){
          var clicou = $(this).text();
             if(clicou = 'Alterar'){
               //---------------- declarando variaveis ------------------------------//
               var nome, fone, email, id, endereco, ocorrencia;
                 nome = $("#chamado_atend .modal-body input[name='cliente']").val();
                 fone = $("#chamado_atend .modal-body input[name='fones']").val();
                 email  = $("#chamado_atend .modal-body input[name='email']").val();
                 id =  $("#chamado_atend .modal-body input[name='id']").val();
                 endereco = $("#chamado_atend .modal-body input[name='endereco']").val();
                 ocorrencia = $("#chamado_atend .modal-body textarea").text();
              //----------------------------------------------------------------------\\

             //----------------------- ENVIO COM AJAX ---------------------------------//

               $.ajax({
              type:'post',
              url: 'conf/atendente_chamado_fila.php',
              data:{
              id: id,  
              nome : nome,
              fone: fone,
              email: email,
              endereco : endereco,
              ocorrencia : ocorrencia,
              acao : 'editar'  
              } 
             }).done(function(cad){

               alert(cad);
               location.reload();

             })





           }
           if(clicou = 'Transferir'){

            var id =  $("#chamado_atend .modal-body input[name='id']").val();
            var tecnico = $("#chamado_atend  #tecnovo").val();
        
             $.ajax({
               type:'post',
               url:'conf/atendente_chamado_fila.php',
               data:{
                acao : 'transferir',
                chamado :  id,
                novo_tecnico : tecnico
               }
             }).done(function(rerere){
              alert(rerere);
              location.reload();
             })


           } 


       })

     })


})

//configuração da pagina de chamado remoto 


$(" .listagem tr td a").click(function(event){
event.preventDefault();
var chamado;
 
 chamado = $(this).attr("href");
  
  $.ajax({
    type:'post',
    url:'padrao/config.php',
    data:{
     id :chamado
    }
  }).done(function(event){
       
       var assy = JSON.parse(event);
       
       $("#chamado_atendido .modal-header p").html(assy['protocolo']);
       $("#chamado_atendido .status h6").html(assy['nivel']);
       $("#chamado_atendido .data_abertura h6").html(assy['data']+' - '+assy['inicio']);
       $("#chamado_atendido .h_encerramento h6"). html(assy['final']);
       $("#chamado_atendido .cliente_chamado").html(assy['razao']);
       $("#chamado_atendido .aberto_por_chamado").html(assy['aberto']);
       $("#chamado_atendido .Solicitado_chamado").html(assy['cliente']);
       $("#chamado_atendido .tecnico_chamado").html(assy['tecnico']);
       $("#chamado_atendido .Ocorrencia_chamado").html(assy['ocorrencia']);
       $("#chamado_atendido .laudo_chamado").html(assy['laudo']);
  })

});


$(function(){
    $(".pesquizzar input").keyup(function(){
        //pega o css da tabela 
        var tabela = $(this).attr('alt');
        if( $(this).val() != ""){
            $("."+tabela+" tbody>tr").hide();
            $("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        } else{
            $("."+tabela+" tbody>tr").show();
        }
    }); 
});
$.extend($.expr[":"], {
    "contains-ci": function(elem, i, match, array) {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});

$("#you12 .modal-body form input[type='submit']").click(function(event){
event.preventDefault();


});




$(".busca_avancada a ").click(function(event){
  event.preventDefault();
  // DECLARANDO VARIAIS NO SISTEMA //-- 
  var inicial, final, tecnico, status, hora;
  
  inicial =  $(".buscar_vanca input[name='inicial']").val();
  final =  $(".buscar_vanca input[name='final']").val();
   tecnico =  $(".buscar_vanca select[name='tecnico']").val();

   alert(tecnico);
})


//  FILA DE ATENDIMENTO DINAMICA 
   

  function fila_espera(){


    $.post("conf/fila_atendimento.php", function(fila){

     $(".fila_atendimento tbody").html(fila);


      $(".fila_atendimento tr td a").click(function(event){
event.preventDefault();
var id_atender = $(this).attr('href');
var btntext = $(this).text();
  $.ajax({
  type:'post',
  url:'conf/abrir_chamado.php',
   data:{
    catar : id_atender,
    btntext : btntext 
   }  
  }).done(function(catar){
  
       var retur = catar;

       if(retur == '01'){

       location.reload();
        
       }else{
           var obgjto = JSON.parse(catar);
            $("#chamado_atendente .modal-header h6").html('Protocolo: '+obgjto['numero']+' <br> Aberto por: '+obgjto['passado']+' <br> Data de Abertura: '+obgjto['data']+', '+obgjto['hora']);
            $("#chamado_atendente .modal-body .form-group input[name='cliente']").val(obgjto['nome']);         
            $("#chamado_atendente .modal-body .form-group input[name='id']").val(obgjto['id']);         
            $("#chamado_atendente .modal-body .form-group input[name='fones']").val(obgjto['fone']);         
            $("#chamado_atendente .modal-body .form-group input[name='email']").val(obgjto['email']);         
            $("#chamado_atendente .modal-body .form-group input[name='endereco']").val(obgjto['endereco']);         
            $("#chamado_atendente .modal-body .form-group textarea[name='ocorrencia']").val(obgjto['ocorrencia']);         

       }
     $("#chamado_atendente .modal-body button").click(function(){
      var bgt_boot = $(this).text();
       //declarando variaveis dentro do sistema 
          var nome, id, fone, email, endereco, ocorrencia;
       // licando variaveis 
         nome = $("#chamado_atendente .modal-body .form-group input[name='cliente']").val();
         id = $("#chamado_atendente .modal-body .form-group input[name='id']").val();
         fone = $("#chamado_atendente .modal-body .form-group input[name='fones']").val();
         email = $("#chamado_atendente .modal-body .form-group input[name='email']").val();
         endereco = $("#chamado_atendente .modal-body .form-group input[name='endereco']").val();
         ocorrencia = $("#chamado_atendente .modal-body .form-group textarea[name='ocorrencia']").text();
      switch(bgt_boot){
       case 'Editar':
             //enviar para validação 
             $.ajax({
              type:'post',
              url: 'conf/atendente_chamado_fila.php',
              data:{
              id: id,  
              nome : nome,
              fone: fone,
              email: email,
              endereco : endereco,
              ocorrencia : ocorrencia,
              acao : 'editar'  
              } 
             }).done(function(f000){

               alert(f000);
               location.reload();

             })
       break;
       case'Excluir':
          //enviar para validação 
             $.ajax({
              type:'post',
              url: 'conf/atendente_chamado_fila.php',
              data:{
              id: id,  
              nome : nome,
              fone: fone,
              email: email,
              endereco : endereco,
              ocorrencia : ocorrencia,
              acao : 'excluir'  
              } 
             }).done(function(f000){

               alert(f000);
               location.reload();

             })
       break;
       case'Transferir':
        
         $("#chamado_atendente").hide();

         var id_chamado = $("#chamado_atendente .modal-body .form-group input[name='id']").val();

         //function pra exit 

         $("#transferir_tecnico .close").click(function(){
          location.reload();
         })
         // enviar para o php
         $("#transferir_tecnico .br-menu-link").click(function(){
           var para;
           para = $("#transferir_tecnico .para").val();


             $.ajax({
               type:'post',
               url:'conf/atendente_chamado_fila.php',
               data:{
                acao : 'transferir',
                chamado :  id_chamado,
                novo_tecnico : para,
                hora : $("#horareal").text()
               }
             }).done(function(novotecnico){
              alert(novotecnico);
              location.reload();
             })

         })


      break;   
      }


     })
  })

})




    })


  }
 // sensor de pessoas online 


 
window.setInterval('fila_espera()', 500);



