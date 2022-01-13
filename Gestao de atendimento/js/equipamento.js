
    $("#marcas").keypress(function(){
    $(this).keyup(function(e) {
        var keyword = $(this).val();

          $.ajax({
            type:'POST',
            url:'conf/buscar-marca.php',
            data: {
              ditado: keyword
            },
            beforeSend: function(){
         $("#Marca-resul").text('buscando...');
              
            }}).done(function(event){

         $("#Marca-resul").html(event);
         
         $("#Marca-resul  a").click(function(event){
            event.preventDefault();
          var pegar = $(this).text();

          $("#marcas").val(pegar);
           $("#Marca-resul").hide(); 
          }) 
            });
          
         
       $(this).focus(function(){

        $("#Marca-resul").show();
       })    

      });


    })
  
  $("#cliente-equipamento").keypress(function(){

     $(this).keyup(function(e) {

        var textus = $(this).val();

        $.ajax({
            type:'POST',
            url:'conf/buscar-marca.php',
            data: {
             cliente  : textus
            },
            beforeSend: function(){
         $("#cliente-resul").text('buscando...');
              
            }}).done(function(event){

        $("#cliente-resul").html(event);

           $("#cliente-resul  a").click(function(event){
            event.preventDefault();
          var pegard = $(this).text();

          var id_cliente = $(this).attr("href");

          $("#cliente-equipamento").val(pegard);
          $("#id_cliente").text(id_cliente);
           $("#cliente-resul").hide(); 
          }) 

              
            })
        $(this).focus(function(){

        $("#cliente-resul").show();
       })    

    })


  })


   /*buscar cliente */



 $("#modelo").keypress(function(){

     $(this).keyup(function(e) {

        var textar = $(this).val();

        $.ajax({
            type:'POST',
            url:'conf/buscar-marca.php',
            data: {
             modelo  : textar
            },
            beforeSend: function(){
         $("#modelo-resul").text('buscando...');
              
            }}).done(function(event){

        $("#modelo-resul").html(event);

           $("#modelo-resul  a").click(function(event){
            event.preventDefault();
          var pegard = $(this).text();

          $("#modelo").val(pegard);
           $("#modelo-resul").hide(); 
          }) 

              
            })
        $(this).focus(function(){

        $("#modelo-resul").show();
       })    

    })


  })
/*função cadastrar o equipamento*/

 $("#cadastra-equipamento .modal-footer button").click(function(e){
  e.preventDefault();
   var equipamento = $("#cadastra-equipamento select[name='categoria']").val();
   var marca = $("#cadastra-equipamento select[name='marca']").val();
   var contrato = $("#cadastra-equipamento select[name='contrato']").val();
   var modelo = $("#cadastra-equipamento input[name='modelo']").val();
   var data_de = $("#cadastra-equipamento input[name='data-de']").val();
   var data_ate = $("#cadastra-equipamento input[name='data-ate']").val();
   var serie = $("#cadastra-equipamento input[name='n-serie']").val();
   var cliente = $("#cadastra-equipamento input[name='cliente']").val();
   var data_compra = $("#cadastra-equipamento input[name='data-compra']").val();
   var valor_total = $("#cadastra-equipamento input[name='valor-total']").val();
   var id_cliente = $("#id_cliente").text();


     $.ajax({
      type : 'POST',
      url: 'conf/cadastrar-equipamento.php',
      data:{
      nome: equipamento,
      marca: marca,
      contrato: contrato,
      modelo: modelo,
      datade: data_de,
      dataate: data_ate,
      serie: serie,
      cliente:cliente,
      idcliente:id_cliente,
      datacompra: data_compra,
      valortotal: valor_total
      }
     }).done(function(returno){
     
      alert(returno);

      /*limpando campos do sistema */

      $("#cadastra-equipamento select[name='categoria']").val('');
   $("#cadastra-equipamento select[name='marca']").val('');
   $("#cadastra-equipamento select[name='contrato']").val('');
   $("#cadastra-equipamento input[name='modelo']").val('');
   $("#cadastra-equipamento input[name='data-de']").val('');
   $("#cadastra-equipamento input[name='data-ate']").val('');
   $("#cadastra-equipamento input[name='n-serie']").val('');
   $("#cadastra-equipamento input[name='cliente']").val('');
   $("#cadastra-equipamento input[name='data-compra']").val('');
   $("#cadastra-equipamento input[name='valor-total']").val('');
   $("#cadastra-equipamento input[name='id-cliente']").val('');


     })


 })
 $(".pesquizar button").click(function(){

    var pesquizado = $(".pesquizar input[name='pesquisar']").val();
 
     /*envio em ajax para consulta*/
    
   $.ajax({
     type:'POST',
     url:'conf/busca_equipamento.php',
     data:{
      pesquisa: pesquizado
     }
   }).done(function(returno){

      var returno = returno;

      if(returno == "Campo vazio!"){

          alert(returno);

      }
      if(returno == "NÃO ENCONTRADO"){
        alert(returno);
      }
      if(returno == "Cliente sem equipamento"){
        alert(returno);
      }
      if(returno != "Cliente sem equipamento" ){

        $(".table_list").html(returno); 
      }
      

        
      
   });


 
});

 $(".table_list tr td a").click(function(event){
  event.preventDefault();
   var thi = $(this).attr("href");
   

   $.ajax({
     type:'POST',
     url:'conf/cliente-direciona.php',
     data: { id : thi} 
    }).done(function(retdd){
           location.replace("dados_cliente.php");
    });
 })