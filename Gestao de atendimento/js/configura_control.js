$(".adicionar_form").click(function(){
          
            

           $.ajax({
           url:'conf/evento.php',
           type:'post',
           data:{
            titulo : $(".notificacao_form input[name='titulo']").val(),
            responsavel : $(".notificacao_form input[name='responsavel']").val(),
            data : $(".notificacao_form input[name='data']").val(),
            descricao : $(".notificacao_form textarea[name='descricao']").val()
           }
          }).done(function(returne){

             alert(returne);
             $(".notificacao_form input[name='titulo']").val('');
              $(".notificacao_form input[name='responsavel']").val('');
              $(".notificacao_form input[name='data']").val('');
              $(".notificacao_form textarea[name='descricao']").val('');
              location.reload(); 
          });


   });
 function exibe_notifica(){

    $.ajax({
           url:'conf/exibe_notifica.php',
           type:'post',
           //data:{}
          }).done(function(returne){
          
          $(".exibe_notifica").html(returne);
             
          });


 }


function avisa_msg(){
 $.ajax({
 url:'conf/avisa_msg.php',
 type:'post',
 data:{
 // id_quem : $(".atender input[name='id']").val()
 }
}).done(function(returne){

var valor = returne;

if(valor > 0){

  $(".alerta").show();
  $(".men_responder").show();
}
if(valor == 0){

  $(".alerta").hide();
  $(".men_responder").hide();
}

    
});


}
function contato(){
  

  $.ajax({
 url:'conf/contatos.php',
 type:'post',
 data:{
 // id_quem : $(".atender input[name='id']").val()
 }
}).done(function(returne){
 
 $("#contato_perfil-list").html(returne);
//document.getElementById("contato_perfil-list").innerHTML=returne;

});
}

        //window.setInterval("contato()",1000);
        window.setInterval("avisa_msg()",1000);
        window.setInterval("exibe_notifica()",1000);
       
       $("#conti").click(function(event){
        event.preventDefault();

              $.ajax({
                 type:'post',
                 url:'conf/notifica.php',
                 data:{
                 // quem: $(".nomelogin").html()
                 }}).done(function(returno){


                    $(".notifica-mensager").html(returno);
                 });
            
                    
                 });

        $(".alerta").hide();
    

      $("#agenda .modal-footer .adicionar_agenda").click(function(){
        //declarando variaveis        
         var descri = $("#agenda .modal-body textarea").val();
         var data = $("#agenda .modal-body input[name='data'] ").val();
         var hora = $("#agenda .modal-body input[name='responsavel'] ").val();
         var id = $("#agenda .modal-body input[name='id'] ").val();
        // envio das variaveis 
         $.ajax({
          type: 'POST',
          url:'conf/agendar.php',
          data:{
           id : id,
           hora : hora,
           data : data,
           descricao : descri 
          }
         }).done(function(agendar){
            alert(agendar);
            $("#agenda .modal-body textarea").val('');
            $("#agenda .modal-body input[name='data'] ").val('');
            $("#agenda .modal-body input[name='responsavel'] ").val('');
             location.reload();
         });


      });
      
    $("#minhaagenda .ex_not").click(function(event){
      event.preventDefault();
      var editando = $(this).attr('href');
       location.reload();
      
     $.ajax({
          type: 'POST',
          url:'conf/agenda_excluir.php',
          data:{
          
           quem : editando
          }
         }).done(function(retorno){
            alert(retorno);
           
         });
      $(this).parents('#minhaagenda table tbody tr').hide();
    });

    //FECHA O MENU  DA AGENDA  ----------------------------
$("#minhaagenda .agenda_nova").click(function(){
    $("#minhaagenda").hide();
   })
$("#agenda .close").click(function(){
  location.reload(); 
})

    $("#minhaagenda .buscar_agenda").click(function(){

        var de = $(".modal-footer input[name='de']").val();
        var ate = $(".modal-footer input[name='ate']").val();
        
        $.ajax({
          type:'POST',
          url:'conf/buscar_agenda.php',
          data:{
          de : de,
          ate : ate  
          }
        }).done(function(returno){
           $("#minhaagenda tbody ").html(returno);
        })
        
    });

    $("#minhaagenda .edit_not").click(function(event){
      event.preventDefault();

      $("#minhaagenda").hide();

        var id = $(this).attr('href');
         
         $.ajax({
          type:'POST',
          url: 'conf/agenda_pessoal.php',
          data:{
           id : id  
          }
         }).done(function(returno){
          $("#agendapessoal").html(returno);

             $("#agendapessoal .agenda_editada").click(function(event){
              
                var id = $("#agendapessoal input[name='editar']").val();
                var titulo = $("#agendapessoal textarea").val();
                var data = $("#agendapessoal input[name='data']").val();
                var hora = $("#agendapessoal input[name='responsavel'").val();
                /*editando   na agenda  pessoal */   
                 $.ajax({
                  type:'post',
                  url:'conf/pessoal_edita.php',
                  data:{
                   
                   id :   $("#agendapessoal input[name='editar']").val(),  
                   titulo : $("#agendapessoal textarea").val(),
                   data :  $("#agendapessoal input[name='data']").val(),
                   hora : $("#agendapessoal input[name='responsavel'").val()
                }
                 }).done(function(pessoal){
                  alert(pessoal);
                 $("#agendapessoal textarea").val(titulo);
                 $("#agendapessoal input[name='data']").val(data);
                 $("#agendapessoal input[name='responsavel'").val(hora); 

                 });

               });    
                  

                 /* fechar edição */
                   $("#agendapessoal  button[aria-label='Close']").click(function(){
                      location.reload();
                });

         })

    });

    /* chamar   função cadastrar clientes */
      $(".c_cadastrar").click(function(event){
       event.preventDefault();
        $(".c_cadastrar").addClass("active");
        $(".c_clientes").removeClass("active");
       $(".cadastrar_clientes").show(); 
       $(".nossos").hide();

      });
      $(".c_clientes").click(function(event){
       event.preventDefault();
       $(".cadastrar_clientes").hide(); 
        $(".c_cadastrar").removeClass("active");
        $(".c_clientes").addClass("active");
       $(".nossos").show(); 
      });
        
    $(".tel_").click(function(event){
      event.preventDefault();
        $(".tel2").show();
        $(this).hide();
    });
    $(".cel_").click(function(event){
      event.preventDefault();
        $(".cel2").show();
        $(this).hide();
    });

    /*  configuração de  cadastro de cliente   fisica e juridica  */

     $(".p_juridica").click(function(){
      var p_juridica = $(this).text();

       $(".cadastro_titulo h6 span").html(p_juridica);

      $(".cpf").hide();
      $(".p_juridica").hide();
      $(".rg").hide();
      $(".submit_c_fi").hide();
      $(".submit_f_fi").hide();
       $(".razao").show();
       $(".submit_c_ju").show();
       $(".submit_f_ju").show();
       $(".cnpj").show();      
       $(".inscricao").show();      
      $(".fantasia").show();
       $(".p_fisica").show(); 
     });
     $(".p_fisica").click(function(){ 
      var p_fisica = $(this).text();

       $(".cadastro_titulo h6 span").html(p_fisica);
      $(".cpf").show();
      $(".fantasia").hide();
      $(".p_juridica").show();
      $(".submit_c_fi").show();
      $(".submit_f_fi").show();
      $(".rg").show();
       $(".razao").hide();
       $(".submit_c_ju").hide();
       $(".submit_f_ju").hide();
       $(".cnpj").hide();      
       $(".inscricao").hide();      
       $(".p_fisica").hide();      
     });
    /*
    consulta por cnpj na sefaz
    */
  
  $(".form-group input[name='cnpj']").focusout(function(){
    $.ajax({
      //O campo URL diz o caminho de onde virá os dados
      //É importante concatenar o valor digitado no CNPJ
      url: 'conf/busca_cnpj.php?cnpj='+$(".form-group input[name='cnpj']").val(),
//Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
      //Aqui você deve preencher o tipo de dados que será lido,
      //no caso, estamos lendo JSON.
      dataType: 'json',
      //SUCESS é referente a função que será executada caso
      //ele consiga ler a fonte de dados com sucesso.
      //O parâmetro dentro da função se refere ao nome da variável
      //que você vai dar para ler esse objeto.
      success: function(resposta){
        //Confere se houve erro e o imprime
        if(resposta.status == "ERROR"){
          alert(resposta.message + "\nPor favor, digite os dados manualmente.");
          $("#post #nome").focus().select();
          return false;
        }
        //Agora basta definir os valores que você deseja preencher
        //automaticamente nos campos acima.
        $(".form-group input[name='razao']").val(resposta.nome);
        $(".form-group input[name='fantasia']").val(resposta.fantasia);
        //$("#post #atividade").val(resposta.atividade_principal[0].text + " (" + resposta.atividade_principal[0].code + ")");
        $(".form-group input[name='telefone1']").val(resposta.telefone);
        $(".form-group input[name='email']").val(resposta.email);
        $(".form-group input[name='endereco']").val(resposta.logradouro);
        $(".form-group input[name='complemento']").val(resposta.complemento);
        $(".form-group input[name='bairro']").val(resposta.bairro);
        $(".form-group input[name='cidade']").val(resposta.municipio);
        $(".form-group input[name='uf']").val(resposta.uf);
        $(".form-group input[name='cep']").val(resposta.cep);
        $(".form-group input[name='numero']").val(resposta.numero);
      }
    });
  });
/*

configuração do cadastro de clientes   

*/     

  /* PESSOA JURIDICA PARA CADASTRO DE CLIENTE  */
  $('.submit_c_ju').click(function(event){
    event.preventDefault();
    
     var tipo_c = $(this).attr('value'); 

    var razao = $(".form-group input[name='razao']").val();
    var nome = $(".form-group input[name='nome']").val();
    var fantasia = $(".form-group input[name='fantasia']").val();
    var cnpj = $(".form-group input[name='cnpj']").val();
    var inscri_estadual = $(".form-group input[name='inscri']").val();
    var email = $(".form-group input[name='email']").val();
    var tel1 = $(".form-group input[name='telefone1']").val();
    var tel2 = $(".form-group input[name='telefone2']").val();
    var cel1 = $(".form-group input[name='celular1']").val();
    var cel2 = $(".form-group input[name='celular2']").val();
    var cep = $(".form-group input[name='cep']").val();
    var endereco = $(".form-group input[name='endereco']").val();
    var numero = $(".form-group input[name='numero']").val();
    var complemento = $(".form-group input[name='complemento']").val();
    var bairro = $(".form-group input[name='bairro']").val();
    var cidade = $(".form-group input[name='cidade']").val();
    var uf = $(".form-group input[name='uf']").val();


    $.ajax({
      type:'post',
      url:'conf/c_cliente.php',
      data:{
       tipo : tipo_c, 
       razao : razao, 
       fantasia : fantasia, 
       nome : nome,
       cnpj : cnpj, 
       inscri : inscri_estadual, 
       email : email,
       tel1 : tel1, 
       tel2 : tel2, 
       cel1 : cel1, 
       cel2 : cel2, 
       cep : cep,
       endereco : endereco,
       numero : numero,
       complemento : complemento,
       bairro : bairro,
       cidade : cidade,
       uf_c : uf  
      }
    }).done(function(cliente){
      alert(cliente);
      
       $(".form-group input[name='razao']").val('');
     $(".form-group input[name='nome']").val('');
     $(".form-group input[name='fantasia']").val('');
   $(".form-group input[name='cnpj']").val('');
   $(".form-group input[name='inscri']").val('');
    $(".form-group input[name='email']").val('');
     $(".form-group input[name='telefone1']").val('');
    $(".form-group input[name='telefone2']").val('');
    $(".form-group input[name='celular1']").val('');
    $(".form-group input[name='celular2']").val('');
    $(".form-group input[name='cep']").val('');
     $(".form-group input[name='endereco']").val('');
     $(".form-group input[name='numero']").val('');
     $(".form-group input[name='complemento']").val('');
    $(".form-group input[name='bairro']").val('');
  $(".form-group input[name='cidade']").val('');
     $(".form-group input[name='uf']").val('');

    });

  });

  /*PESSOA FISICA    PARA CADASTRO DE CLIENTE */

  $('.submit_c_fi').click(function(event){
   event.preventDefault();

      var tipo_c = $(this).attr('value'); 

    var razao = $(".form-group input[name='razao']").val();
    var nome = $(".form-group input[name='nome']").val();
    var cpf = $(".form-group input[name='cpf']").val();
    var rg = $(".form-group input[name='rg']").val();
    var email = $(".form-group input[name='email']").val();
    var tel1 = $(".form-group input[name='telefone1']").val();
    var tel2 = $(".form-group input[name='telefone2']").val();
    var cel1 = $(".form-group input[name='celular1']").val();
    var cel2 = $(".form-group input[name='celular2']").val();
    var cep = $(".form-group input[name='cep']").val();
    var endereco = $(".form-group input[name='endereco']").val();
    var numero = $(".form-group input[name='numero']").val();
    var complemento = $(".form-group input[name='complemento']").val();
    var bairro = $(".form-group input[name='bairro']").val();
    var cidade = $(".form-group input[name='cidade']").val();
    var uf = $(".form-group input[name='uf']").val();


    $.ajax({
      type:'post',
      url:'conf/c_cliente.php',
      data:{
       tipo : tipo_c, 
       razao : razao, 
       nome : nome,
      cpf : cpf, 
       rg : rg, 
       email : email,
       tel1 : tel1, 
       tel2 : tel2, 
       cel1 : cel1, 
       cel2 : cel2, 
       cep : cep,
       endereco : endereco,
       numero : numero,
       complemento : complemento,
       bairro : bairro,
       cidade : cidade,
       uf_c : uf  
      }
    }).done(function(cliente){
      alert(cliente);
      
       $(".form-group input[name='razao']").val('');
     $(".form-group input[name='nome']").val('');
   $(".form-group input[name='cpf']").val('');
   $(".form-group input[name='rg']").val('');
    $(".form-group input[name='email']").val('');
     $(".form-group input[name='telefone1']").val('');
    $(".form-group input[name='telefone2']").val('');
    $(".form-group input[name='celular1']").val('');
    $(".form-group input[name='celular2']").val('');
    $(".form-group input[name='cep']").val('');
     $(".form-group input[name='endereco']").val('');
     $(".form-group input[name='numero']").val('');
     $(".form-group input[name='complemento']").val('');
    $(".form-group input[name='bairro']").val('');
  $(".form-group input[name='cidade']").val('');
     $(".form-group input[name='uf']").val('');

    });
  });
  /*

 configuração de Pesquisa  PARA BUSCAR CLIENTES


  */

   $('.c_pes button').click(function(event){
      event.preventDefault();
      var pesquizado = $(".c_pes input[name='pesquisar'").val();
      var categoria = $(".nossos select[name='categoria']").val();
      
      $.ajax({
        type: 'POST',
        url:'conf/buscar_cliente.php',
        data:{
         pesquisa : pesquizado,
         filtro : categoria 
        }

      }).done(function(returno){
        
        $(".c_pes input[name='pesquisar'").val('');
        $(".nossos select[name='categoria']").val('');
        $(".table_list").html(returno);
      })
   });
   /*  detalhe do clientes  nav de navegação interna DA PARTE DE CLIENTE  */


   $(".menu-dados-cliente li a").click(function(event){
    event.preventDefault();
    var url = $(this).attr('href');
    
    $("#contender").load('itens_clientes/' + url);
   })

   // * Configuração   de cliente area de alterar dados do cadastro DA AREÁ DE CLIENTE  *//


   $('.editar-cliente-dados .form-layout-footer button').click(function(event){
     event.preventDefault();
    alert("vamos alterar os dados");
   });

   //FIM DA CONFIGURAÇÃO DE CLIENTE TODA CONFIGURAÇÃO ESTAR A CIMA    

   



   //          * INICIO DE COMFIGURAÇÃO DE FORNECEDORES               //

 

   //CADASTRO DE FORNECEDORES COMPOSTO:


  $('.submit_f_ju').click(function(event){
    event.preventDefault();
    
     var tipo_c = $(this).attr('value'); 

    var razao = $(".form-group input[name='razao']").val();
    var nome = $(".form-group input[name='nome']").val();
    var fantasia = $(".form-group input[name='fantasia']").val();
    var cnpj = $(".form-group input[name='cnpj']").val();
    var inscri_estadual = $(".form-group input[name='inscri']").val();
    var email = $(".form-group input[name='email']").val();
    var tel1 = $(".form-group input[name='telefone1']").val();
    var tel2 = $(".form-group input[name='telefone2']").val();
    var cel1 = $(".form-group input[name='celular1']").val();
    var cel2 = $(".form-group input[name='celular2']").val();
    var cep = $(".form-group input[name='cep']").val();
    var endereco = $(".form-group input[name='endereco']").val();
    var numero = $(".form-group input[name='numero']").val();
    var complemento = $(".form-group input[name='complemento']").val();
    var bairro = $(".form-group input[name='bairro']").val();
    var cidade = $(".form-group input[name='cidade']").val();
    var uf = $(".form-group input[name='uf']").val();


    $.ajax({
      type:'post',
      url:'conf/c_fornecedor.php',
      data:{
       tipo : tipo_c, 
       razao : razao, 
       fantasia : fantasia, 
       nome : nome,
       cnpj : cnpj, 
       inscri : inscri_estadual, 
       email : email,
       tel1 : tel1, 
       tel2 : tel2, 
       cel1 : cel1, 
       cel2 : cel2, 
       cep : cep,
       endereco : endereco,
       numero : numero,
       complemento : complemento,
       bairro : bairro,
       cidade : cidade,
       uf_c : uf  
      }
    }).done(function(cliente){
      alert(cliente);
      
       $(".form-group input[name='razao']").val('');
     $(".form-group input[name='nome']").val('');
     $(".form-group input[name='fantasia']").val('');
   $(".form-group input[name='cnpj']").val('');
   $(".form-group input[name='inscri']").val('');
    $(".form-group input[name='email']").val('');
     $(".form-group input[name='telefone1']").val('');
    $(".form-group input[name='telefone2']").val('');
    $(".form-group input[name='celular1']").val('');
    $(".form-group input[name='celular2']").val('');
    $(".form-group input[name='cep']").val('');
     $(".form-group input[name='endereco']").val('');
     $(".form-group input[name='numero']").val('');
     $(".form-group input[name='complemento']").val('');
    $(".form-group input[name='bairro']").val('');
  $(".form-group input[name='cidade']").val('');
     $(".form-group input[name='uf']").val('');

    });

  });

 
//* CADASTRO DE FORNECEDOR FISICA  *//




$('.submit_f_fi').click(function(event){
   event.preventDefault();

      var tipo_c = $(this).attr('value'); 

    var razao = $(".form-group input[name='razao']").val();
    var nome = $(".form-group input[name='nome']").val();
    var cpf = $(".form-group input[name='cpf']").val();
    var rg = $(".form-group input[name='rg']").val();
    var email = $(".form-group input[name='email']").val();
    var tel1 = $(".form-group input[name='telefone1']").val();
    var tel2 = $(".form-group input[name='telefone2']").val();
    var cel1 = $(".form-group input[name='celular1']").val();
    var cel2 = $(".form-group input[name='celular2']").val();
    var cep = $(".form-group input[name='cep']").val();
    var endereco = $(".form-group input[name='endereco']").val();
    var numero = $(".form-group input[name='numero']").val();
    var complemento = $(".form-group input[name='complemento']").val();
    var bairro = $(".form-group input[name='bairro']").val();
    var cidade = $(".form-group input[name='cidade']").val();
    var uf = $(".form-group input[name='uf']").val();


    $.ajax({
      type:'post',
      url:'conf/c_fornecedor.php',
      data:{
       tipo : tipo_c, 
       razao : razao, 
       nome : nome,
      cpf : cpf, 
       rg : rg, 
       email : email,
       tel1 : tel1, 
       tel2 : tel2, 
       cel1 : cel1, 
       cel2 : cel2, 
       cep : cep,
       endereco : endereco,
       numero : numero,
       complemento : complemento,
       bairro : bairro,
       cidade : cidade,
       uf_c : uf  
      }
    }).done(function(cliente){
      alert(cliente);
      
       $(".form-group input[name='razao']").val('');
     $(".form-group input[name='nome']").val('');
   $(".form-group input[name='cpf']").val('');
   $(".form-group input[name='rg']").val('');
    $(".form-group input[name='email']").val('');
     $(".form-group input[name='telefone1']").val('');
    $(".form-group input[name='telefone2']").val('');
    $(".form-group input[name='celular1']").val('');
    $(".form-group input[name='celular2']").val('');
    $(".form-group input[name='cep']").val('');
     $(".form-group input[name='endereco']").val('');
     $(".form-group input[name='numero']").val('');
     $(".form-group input[name='complemento']").val('');
    $(".form-group input[name='bairro']").val('');
  $(".form-group input[name='cidade']").val('');
     $(".form-group input[name='uf']").val('');

    });
  });


//*CONFIGURAÇÃO DE PESQUISA DE FORNECEDORES*//

 $('.f_pes button').click(function(event){
      event.preventDefault();
      var pesquizado = $(".f_pes input[name='pesquisar'").val();
      var categoria = $(".nossos select[name='categoria']").val();
      
      $.ajax({
        type: 'POST',
        url:'conf/buscar_fornecedor.php',
        data:{
         pesquisa : pesquizado,
         filtro : categoria 
        }

      }).done(function(returno){
        
        $(".c_pes input[name='pesquisar'").val('');
        $(".nossos select[name='categoria']").val('');
        $(".table_list").html(returno);
      })
   });

  //* Fim da configuração de fornecedores *//
  //* Fim da configuração de fornecedores *//
  //* Fim da configuração de fornecedores *//
  //* Fim da configuração de fornecedores *//




  //CONFIGURAÇÃO DA PAGINA DE EQUIPAMENTO //


   // CONFIGURAÇÃO DO MENU EQUIPAMENTO //  

  $(".menu-pagina-equipamento  li a").click(function(event){
   event.preventDefault();
   var texto = $(this).attr('href');
    
     $("#lista-equipamento").load('itens_equipamento/' + texto);
  });


//*Função para cadastrar funcionario dentro *//


 $("#cadastra-funcionario .modal-footer button").click(function(){
    //declarando variaveis  para envio 


    var nome = $("#cadastra-funcionario .form-group input[name='nome']").val();
    var cpf = $("#cadastra-funcionario .form-group input[name='cpf']").val();
    var rg = $("#cadastra-funcionario .form-group input[name='rg']").val();
    var nasc = $("#cadastra-funcionario .form-group input[name='nasci']").val();
    var funcao = $("#cadastra-funcionario .form-group select[name='funcao']").val();
    var telefone = $("#cadastra-funcionario .form-group input[name='telefone']").val();
    var email = $("#cadastra-funcionario .form-group input[name='email']").val();
    var endereco = $("#cadastra-funcionario .form-group input[name='endereco']").val();
    var bairro = $("#cadastra-funcionario .form-group input[name='bairro']").val();
    var cidade = $("#cadastra-funcionario .form-group input[name='cidade']").val();
    var uf = $("#cadastra-funcionario .form-group input[name='uf']").val();
    var login = $("#cadastra-funcionario .form-group input[name='login']").val();
    var senha = $("#cadastra-funcionario .form-group input[name='senha']").val();
      
      $.ajax({
           type:'POST',
           url:'conf/cadastrar_funcionario.php',
           data:{
            nome: nome,
            cpf: cpf,
            nasc: nasc,
            rg: rg,
            funcao: funcao,
            telefone: telefone,
            email: email,
            endereco: endereco,
            cidade: cidade,
            bairro: bairro,
            uf: uf,
            login: login,
            senha: senha
           }  
      }).done(function(retorno){

             
      $("#modaldemo4 h4").text(retorno);

       $("#cadastra-funcionario").hide();
       $("#modaldemo4 button").click(function(){
       location.reload();
       })

      })
      
 })
$("#cadastra-funcionario span a").click(function(event){
  event.preventDefault();
  $("#cadastra-funcionario .login").show();
  $("#cadastra-funcionario span ").hide();   
})

// validação do login consulta   digitando 


$("#login").keypress(function(){
   $(this).keyup(function(e){
    
    var keyword = $(this).val();

    $.ajax({
      type:'POST',
      url:'conf/valid_login.php',
      data:{
       teclado: keyword 
      },
      beforeSend: function(){
       $("#cadastra-funcionario .valid_login ").html("<img src='img/carregando/load.gif' style='width:50px; ' alt=''>");
        
      }
    }).done(function(returno){

      $("#cadastra-funcionario .valid_login").html(returno);

    })

   })
})


$(".busca_funcionario button").click(function(){
  var fun_pes = $("#busca_funcionario").val();
   
   $.ajax({
      type:'POST',
      url:'conf/pesquizar_funcinario.php',
      data:{
       digitado: fun_pes 
      },
      beforeSend: function(){
       $(".funcionario_todos").html("<img src='img/carregando/load1.gif' alt='' />"); 
      }
   }).done(function(e){

      var re = e;

      if(re == "false"){
         
      $("#error-fun").show();
      $("#error-fun .close").click(function(){
       $("#error-fun").hide();
       $("#busca_funcionario").val('');
      });

      }
      else{
      $(".table tbody").html(e);
        
      }

   })
})
/*ALTERAR SENHA A NIVEL DE ADMINISTRADOR */
$(".table tr .dropdown-menu .alterar_s").click(function(e){
  e.preventDefault();

   $("#alterar-senha .modal-body input").show();
   $("#alterar-senha .modal-body input").val('');
  $("#alterar-senha .modal-body .submit").show();
   $("#alterar-senha .modal-body h4").text("Alterar Senha");
   $("#alterar-senha .modal-body i").addClass("ion-settings");
  $("#alterar-senha .modal-body i").removeClass("ion-ios-checkmark-outline");


  var id = $(this).attr("href");
   $("#alterar-senha .modal-body p").text(id);

})

$("#alterar-senha .submit").click(function(e){
  e.preventDefault();
    var quem = $("#alterar-senha .modal-body p").text();
    var pass = $("#alterar-senha .modal-body input[name='senha']").val();
    
     $.ajax({
          type: 'POST',
          url: 'conf/alterar-senha-funcionario.php',
          data:{
           quemsenha: quem,
           senhaalterada: pass  
          }
     }).done(function(ret){
   
    var alt_senha = ret;


       if(alt_senha =="alterada"){

       $("#alterar-senha .modal-body i").removeClass("ion-settings");
       $("#alterar-senha .modal-body i").addClass("ion-ios-checkmark-outline");
       $("#alterar-senha .modal-body input").hide();
       $("#alterar-senha .modal-body .submit").hide();
       $("#alterar-senha .modal-body h4").text("Senha atualizada com sucesso!");

       }

     })
})
