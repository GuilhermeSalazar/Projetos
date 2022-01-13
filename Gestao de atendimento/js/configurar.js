$(document).ready(function(){
   
  // alterar  configuração de cadastro de dados 
   $(".form-cadastrar").submit(function(event){
    event.preventDefault();


     $.ajax({
      url: 'conf/dados.php',
      type:'POST',
      data:{
        email: $(".form-cadastrar input[name='Email'").val(),
        quem: $(".form-cadastrar input[name='id'").val(),
        nome: $(".form-cadastrar input[name='nome'").val(),
        telefone: $(".form-cadastrar input[name='telefone'").val(),
        endereco: $(".form-cadastrar input[name='endereco'").val(),
        bairro: $(".form-cadastrar input[name='bairro'").val(),
        cidade: $(".form-cadastrar input[name='cidade'").val(),
        uf: $(".form-cadastrar input[name='uf'").val(),
        cpf: $(".form-cadastrar input[name='CPF'").val(),
        rg: $(".form-cadastrar input[name='RG'").val(),
        data: $(".form-cadastrar input[name='data-nasc'").val()
      }}).done(function(returne){
       alert(returne);
        location.reload();
      
      });

   });

   //renomear senha   
     $("#form-cadastrar").submit(function(event){
    event.preventDefault();

       var  atual = $("#form-cadastrar input[name='atual']").val();

       $.ajax({
       type: 'post',
       url: 'conf/senha.php',
       data:{
       atual : $("#form-cadastrar input[name='atual']").val(), 
       senha : $("#form-cadastrar input[name='senha']").val(), 
       id_senha : $("#form-cadastrar input[name='id_senha']").val() 
       } 
       }).done(function(returne){
       
       alert(returne);
        
        $("#form-cadastrar input[name='atual']").val('');
        $("#form-cadastrar input[name='senha']").val('');
       });

  
   });
// envio das fotos de perfil
    document.getElementById('perfil').onchange = function(e){
     if(e.target.files != null && e.target.files.length !=0){
      var arquivo = e.target.files[0];
      var fd = new FormData();
      fd.append("perfil",arquivo);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
       if(xmlhttp.readyState===4 & xmlhttp.status===200)
         alert(xmlhttp.responseText);
         $("#perfil").val('');
      }
      xmlhttp.open("POST","conf/enviar.php", true);
       xmlhttp.send(fd);
     } 
    }
 
  });

//funções para o sistema 


