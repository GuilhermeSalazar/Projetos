
      

 <div id="anexo" class="modal fade " >
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document" >
              <div class="modal-content tx-size-sm" style="background: #1a2432">
                <div class="modal-header pd-x-10">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-white tx-bold">
                    Anexar Arquivo 
                  </h6>
                  <h5 class="d-none"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
                <div class="col-8">
                 <form active="#">
                   <input id="img_ch" type="file"  class=""   name="">
                   <button type="button" class="close br-menu-link border-0  bg-secondary p-10 float-right">Anexar</button>
                  <label>Arquivo</label>
                  <span class="d-none"></span>
                 </form>
                </div>
               </div><!-- row -->
             </div>
       </div><!-- modal-body -->
  </div>
 <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2019. Pronto Soluções. All Rights Reserved.</div>
          <div>Sistema de desenvolvimento próprio.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10"></span>
          <a target="_blank" class="pd-x-5" href="https://pt-br.facebook.com/mldisplay.com.br/"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://www.instagram.com/pronto_solucoes/"><i class="fab fa-instagram tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<script src="js/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/moment/min/moment.min.js"></script>
    <script src="lib/peity/jquery.peity.min.js"></script>
    <script src="lib/rickshaw/vendor/d3.min.js"></script>
    <script src="lib/rickshaw/vendor/d3.layout.min.js"></script>
    <script src="lib/rickshaw/rickshaw.min.js"></script>
    <script src="lib/jquery.flot/jquery.flot.js"></script>
    <script src="lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="lib/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="lib/echarts/echarts.min.js"></script>
    <script src="lib/select2/js/select2.full.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/bracket.js"></script>
    <script src="js/map.shiftworker.js"></script>
    <script src="js/ResizeSensor.js"></script>
    <script src="js/dashboard.dark.js"></script>
    <script src="js/configura_control.js"></script>
    <script src="js/chat.js"></script>
    <script type="text/javascript">

  //botao de enviar dados de sugestao
       $("#Enviarsugestao").click(function (event){
              event.preventDefault();
           // _____declarando variaveis------------
              var titulo, descricao, usuario, setor, data;
              titulo = $(".relata_sugestao input[name='titulo']").val();
              descricao = $(".relata_sugestao textarea[name='descricao']").val();
              usuario = $(".relata_sugestao select[name='usuario']").val();
              setor = $(".relata_sugestao select[name='setor']").val();
              data = $(".relata_sugestao input[name='data']").val();
               //codigo ajax 
                 $.ajax({
                  type:'POST',
                  url:'conf/sugestao_bug.php',
                  data:{
                    titulo : titulo,
                    descricao : descricao,
                    usuario : usuario,
                    setor : setor,
                    data : data,
                    tipo : '1'
                  }}).done(function(relata){
                     alert(relata); 
                     location.reload();
                  })
              
              })
       // 
        //===========Botao de enviar dados de susgestao===========//

       $("#btn_relatar_bug").click(function(event){
        event.preventDefault();
       
       //-----------declarando variaveis--------------//
         var titulo, descricao, usuario, setor, data;
              titulo = $(".relata_bug input[name='titulo']").val();
              descricao = $(".relata_bug textarea[name='descricao']").val();
              usuario = $(".relata_bug select[name='usuario']").val();
              setor = $(".relata_bug select[name='setor']").val();
              data = $(".relata_bug input[name='data']").val();
       //codigo ajax
       $.ajax({
          
          type:'POST',
                  url:'conf/sugestao_bug.php',
                  data:{
                    titulo : titulo,
                    descricao : descricao,
                    usuario : usuario,
                    setor : setor,
                    data : data,
            tipo: '2'
          }}).done(function(returnbug){
            alert(returnbug);
            location.reload();
          })
       
      })
      //===========================Busca avancada chamado========================//
       $(".pesquizzar #btn_busca_avancada").click(function(event){
         event.preventDefault();
         $('.busca_rapida').hide();
         $('.titulo_busca_avancada').show();
         $('#tabela_rapida').hide();
         $('.busca_avancada').show();
         $('.minimizar_avancada').show();
         $('#tabela_avan').show();



       })

     //=========================INICIO DOS RADIOS BUSCA AVANCADA=================================////////////////////////////// 
       // radio razao
       $(".busca_avancada #Radio_razao").click(function(radio_r){
          radio_r.preventDefault();
         $(".busca_avancada2").show();
         $("#btn_aplicar_avancada_razao").show();
         $("#btn_aplicar_avancada_cnpj").hide();
         $("#btn_aplicar_avancada_tec").hide();
         $("#btn_aplicar_avancada_sit").hide();
         $("#btn_aplicar_avancada_periodo").hide();
         $("#btn_aplicar_avancada_per_raz").hide();
         $("#busc_avan_razao").show();
         $("#busc_avan_cnpj").hide();
         $("#busc_avan_tecnico").hide();
         $("#busc_avan_nivel").hide();
         $("#busc_avan_data").hide();

$('.minimizar_avancada #btn_aplicar_avancada_razao').click(function(event_r){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_razao : avan_razao,
        tipo : '1'
       
       
   }

 }).done(function(pesq_avan_r){
    $('.listagem tbody ').html(pesq_avan_r);
     $(".busca_avancada input[name='busc_avan_razao']").val(''); 
   })
 })

       })
       // radio CNPJ
       $(".busca_avancada #Radio_CNPJ").click(function(radio_c){
         radio_c.preventDefault();
         $("#btn_aplicar_avancada_razao").hide();
         $("#btn_aplicar_avancada_cnpj").show();
         $("#btn_aplicar_avancada_tec").hide();
         $("#btn_aplicar_avancada_sit").hide();
         $("#btn_aplicar_avancada_periodo").hide();
         $("#btn_aplicar_avancada_per_raz").hide();
        $(".busca_avancada2").show();
        $("#busc_avan_razao").hide();
        $("#busc_avan_cnpj").show();
        $("#busc_avan_tecnico").hide();
        $("#busc_avan_nivel").hide();
        $("#busc_avan_data").hide();
 $('.minimizar_avancada #btn_aplicar_avancada_cnpj').click(function(event_c){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_cnpj_cpf : avan_cnpj_cpf,
        tipo : '2'
       
       
   }

 }).done(function(pesq_avan_c){
    $('.listagem tbody ').html(pesq_avan_c);
         $(".busca_avancada input[name='busc_avan_cnpj']").val('');
   })
 })

       })
       // radio Tecnico

       $(".busca_avancada #Radio_tecnico").click(function(radio){
        radio.preventDefault();
        $("#btn_aplicar_avancada_razao").hide();
         $("#btn_aplicar_avancada_cnpj").hide();
         $("#btn_aplicar_avancada_tec").show();
         $("#btn_aplicar_avancada_sit").hide();
         $("#btn_aplicar_avancada_periodo").hide();
         $("#btn_aplicar_avancada_per_raz").hide();

        $(".busca_avancada2").show();
       $("#busc_avan_razao").hide();
        $("#busc_avan_cnpj").hide();
        $("#busc_avan_tecnico").show();
        $("#busc_avan_nivel").hide();
        $("#busc_avan_data").hide();
$('.minimizar_avancada #btn_aplicar_avancada_tec').click(function(event){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_tecnico : avan_tecnico,
        tipo : '3'
       
       
   }

 }).done(function(pesq_avan){
    $('.listagem tbody ').html(pesq_avan);
         $(".busca_avancada select[name='busc_avan_tecnico']").val(''); 
   })
 })
       }) // radio situacao

       $(".busca_avancada #Radio_Situacao").click(function(radio){
        radio.preventDefault();
        $(".busca_avancada2").show();
        $("#btn_aplicar_avancada_razao").hide();
         $("#btn_aplicar_avancada_cnpj").hide();
         $("#btn_aplicar_avancada_tec").hide();
         $("#btn_aplicar_avancada_sit").show();
         $("#btn_aplicar_avancada_periodo").hide();
         $("#btn_aplicar_avancada_per_raz").hide();
       $("#busc_avan_razao").hide();
        $("#busc_avan_cnpj").hide();
        $("#busc_avan_tecnico").hide();
        $("#busc_avan_nivel").show();
        $("#busc_avan_data").hide();

        $('.minimizar_avancada #btn_aplicar_avancada_sit').click(function(event){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_tecnico : avan_tecnico,
        tipo : '4'
       
       
   }

 }).done(function(pesq_avan){
    $('.listagem tbody ').html(pesq_avan);
         $(".busca_avancada select[name='busc_avan_sit']").val(''); 
   })
 })
       }) 
     // radio periodo

       $(".busca_avancada #Radio_Periodo").click(function(radio){
        radio.preventDefault();
        $(".busca_avancada2").show();
        $("#btn_aplicar_avancada_razao").hide();
         $("#btn_aplicar_avancada_cnpj").hide();
         $("#btn_aplicar_avancada_tec").hide();
         $("#btn_aplicar_avancada_sit").hide();
         $("#btn_aplicar_avancada_periodo").show();
         $("#btn_aplicar_avancada_per_raz").hide();
       $("#busc_avan_razao").hide();
        $("#busc_avan_cnpj").hide();
        $("#busc_avan_tecnico").hide();
        $("#busc_avan_nivel").hide();
        $("#busc_avan_data").show();
      $('.minimizar_avancada #btn_aplicar_avancada_periodo').click(function(event){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_data1 : avan_data1,
        avan_data2 : avan_data2,
        tipo : '5'
       
       
   }

 }).done(function(pesq_avan){
    $('.listagem tbody ').html(pesq_avan);
        $(".busca_avancada input[name='busc_avan_data1']").val('');
    $(".busca_avancada input[name='busc_avan_data2']").val('');
   })
 })
       }) 

 // radio periodo avancado

       $(".busca_avancada #Radio_Per_Raz").click(function(radio){
        radio.preventDefault();
        $(".busca_avancada2").show();
        $("#btn_aplicar_avancada_razao").hide();
         $("#btn_aplicar_avancada_cnpj").hide();
         $("#btn_aplicar_avancada_tec").hide();
         $("#btn_aplicar_avancada_sit").hide();
         $("#btn_aplicar_avancada_periodo").hide();
         $("#btn_aplicar_avancada_per_raz").show();
       $("#busc_avan_razao").show();
        $("#busc_avan_cnpj").hide();
        $("#busc_avan_tecnico").hide();
        $("#busc_avan_nivel").hide();
        $("#busc_avan_data").show();
       }) 
  $('.minimizar_avancada #btn_aplicar_avancada_per_raz').click(function(event){
   
   var avan_razao, avan_cnpj_cpf, avan_tecnico, avan_nivel, avan_data1, avan_data2, avan_situacao;

     avan_razao = $(".busca_avancada input[name='busc_avan_razao']").val();
     avan_cnpj_cpf = $(".busca_avancada input[name='busc_avan_cnpj']").val();
     avan_tecnico = $(".busca_avancada select[name='busc_avan_tecnico']").val();
     avan_nivel = $(".busca_avancada select[name='busc_avan_nivel']").val();
     avan_data1 = $(".busca_avancada input[name='busc_avan_data1']").val();
     avan_data2 = $(".busca_avancada input[name='busc_avan_data2']").val();

   $.ajax({
    type:'POST',
    url:'conf/busca_avancada.php',
    data:{
        avan_razao : avan_razao,
        avan_data1 : avan_data1,
        avan_data2 : avan_data2,
        tipo : '6'
       
       
   }

 }).done(function(pesq_avan){
    $('.listagem tbody ').html(pesq_avan);

    $(".busca_avancada input[name='busc_avan_razao']").val('');
    $(".busca_avancada input[name='busc_avan_data1']").val('');
    $(".busca_avancada input[name='busc_avan_data2']").val('');
   })
 })

        
       //========================================================================================================= 
     //retornar busca rapida
     $(".minimizar_avancada #minimizar_avancada").click(function(minimizar){
             minimizar.preventDefault();
             $('.busca_avancada').hide();
             $('.minimizar_avancada').hide();
             $('#tabela_avan').hide();
             $('.busca_rapida').show();
             $('#tabela_rapida').show();
             $('.titulo_busca_avancada').hide();
            
        })
//=============================// LOGICA BUSCA AVANCADA //==============================//
      

       
      </script>
     
  </body>
</html>
