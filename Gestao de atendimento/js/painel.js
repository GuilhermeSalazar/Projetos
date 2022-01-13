function relog(){
  
  var data = new Date();

  var thoras = data.getHours();
  var tminutos = data.getMinutes();
  var tsegundos = data.getSeconds();

  if (thoras <10) {

    thoras = "0" + thoras;


  }
  if (tminutos <10) {

    tminutos = "0" + tminutos;


  }
  if (tsegundos <10) {

    tsegundos = "0" + tsegundos;


  }
  
   var rilogio = thoras + ':' + tminutos  + ':' + tsegundos ;
 document.getElementById("hora").innerHTML = rilogio;
}
function painel(){


$.ajax({
 type: 'post',
 url:'conf/painel_acesso.php'  
}).done(function(returs){
  $(".painel-sistema").html(returs);
})



}
  window.setInterval("relog()",1000);
  window.setInterval("painel()",1000);



$(".nav-cadastro-clientes a ").click(function(event){
 event.preventDefault();
 alert("tetete");
})