  <?php 

 

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';


   ?>
    <div class="br-mainpanel">
   <div class="br-pagetitle  cadastro_titulo">
        <i class="icon ion-laptop tx-70 lh-10 " style="color:#17A2B8"></i>
        <div>
          <h4>Sistemas</h4>
          <p class="mg-b-0 float-right"></p>
        </div>

      </div>
      <div class="ht-md-65 bg-black-2 pd-y-20 pd-md-y-0 pd-x-20 d-md-flex align-items-center justify-content-start mg-t-20">
            <h4 class="mg-b-0 tx-uppercase tx-bold tx-spacing--2 tx-white mg-r-20 tx-poppins"></h4>
            <ul class="nav nav-gray-600 active-info tx-uppercase tx-12 tx-medium tx-spacing-2 flex-column flex-md-row mg-t-20 mg-md-t-0" role="tablist">
              <li class="nav-item">
                <a href=""data-toggle="modal" data-target="#cadastra-sistema" class="br-menu-link active border-0">Cadastrar</a>
              </li>
              <li class="nav-item"></li>
              <li class="nav-item"></li>
             </ul>
            
          </div>

      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
          <div class='row row-sm mg-t-20'>

            <?php 

            $sistema_buscar = mysqli_query($sql,"SELECT * FROM sistema");


            while($array_sis = mysqli_fetch_array($sistema_buscar)){
              $id_sys = $array_sis['id'];

                 $modulos_cont = mysqli_query($sql,"SELECT * FROM modelo_sis where fk_sistema = '$id_sys'");

                 $num_modulos = mysqli_num_rows($modulos_cont);

                echo "
                    
                    <div class='col-sm-6 col-lg-4'>
              <div class='card bd-0 ht-100p'>
                <figure class='mg-b-0  ht-80 overflow-hidden rounded-top'>
                      
                </figure>
                <div class='card-body tx-center bd-x bd-white-1'>
                  <div class='pos-relative'>
                    <div class='pos-absolute x-0 t--90'>
                      <a href=''><img src='".$array_sis['logo']."' class='wd-150 rounded-circle' alt=''></a>
                    </div><!-- pos-relative -->
                  </div>
                  <h4 class='tx-normal tx-roboto mg-t-60 mg-b-5 tx-white'>".$array_sis['nome']." </h4>
                  <p class='mg-b-25'><a href='".$array_sis['id']."' class='btn btn-info pd-x-50 select_system'>Ver mais</a></p>
                </div><!-- card-body -->
                <div class='card-footer bg-transparent pd-0 bd bd-white-1 mg-t-auto'>
                  <div class='row no-gutters tx-center'>
                    <div class='col pd-y-15'>
                      <a href='' class='tx-24 tx-bold tx-lato d-block tx-white hover-info'>".$num_modulos."</a>
                      <small class='tx-10 tx-mont tx-uppercase tx-semibold'>Modulos</small>
                    </div><!-- col -->
                    <div class='col pd-y-15 bd-l bd-white-1'>
                      <a href='' class='tx-24 tx-bold tx-lato d-block tx-white hover-info'>".$array_sis['instalados']."</a>
                      <small class='tx-10 tx-mont tx-uppercase tx-semibold'>Clientes</small>
                    </div><!-- col -->
                   
                  </div><!-- row -->
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col-4 -->


                ";

            }

             ?>
            


          </div><!-- row -->

         

         
          
          </div><!-- row -->

          


      </div><!-- br-pagebody -->
      
    </div>
 <div id="cadastra-sistema" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Novo Sistema</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                    <input type="text" class="form-control" name="nome">
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Logo marca:</label>
                    <input type="file" id="sislogo">
                   <span class="logo-retur"></span>
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">


                 </div>
                </div>
                
            </div><!-- row  -->

          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Cadastrar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
     
 <?php   include 'padrao/footer.php'; ?>

 <script>
    document.getElementById('sislogo').onchange = function(e){
     if(e.target.files != null && e.target.files.length !=0){
      var arquivo = e.target.files[0];
      var fd = new FormData();
      fd.append("perfil",arquivo);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
       if(xmlhttp.readyState===4 & xmlhttp.status===200)
         $(".logo-retur").html(xmlhttp.responseText);
         $("#sislogo").val('');
      }
      xmlhttp.open("POST","conf/sistema_foto.php", true);
       xmlhttp.send(fd);
     } 
    }
 

 $("#cadastra-sistema .modal-footer button").click(function(){
   var nome = $("#cadastra-sistema .modal-body input[name='nome'] ").val();
   var img = $("#cadastra-sistema .modal-body .logo-retur img").attr('src');
  
    $.ajax({
        type:'POST',
        url:'conf/cadastrar-sistema.php',
        data:{
         img: img,
         nome: nome 
        }
    }).done(function(returno){
     alert(returno);
     location.reload(); 
    })
 })
$(".select_system").click(function(event){
  event.preventDefault();
   var select_href = $(this).attr("href");
    
    $.ajax({
       type:'POST',
       url: 'conf/select_system.php',
       data:{
       busca: select_href 
       }
    }).done( function (ret5) {
      var ret = ret5;

        if(ret == "true"){

          location.replace('sistema_detalhe.php');
        }
    })
})
 </script>
   