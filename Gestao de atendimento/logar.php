<?php 
  require 'padrao/conectar.php';
$buscar = mysqli_query($sql,"SELECT * FROM empresa");

 $linha = mysqli_fetch_array($buscar);


 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <title>Pronto Soluções</title>
    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
    <link rel="stylesheet" href="css/bracket.dark.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body >
    <div style="background:url(img/body01.png) no-repeat 100% 100% #000;background-size:100%; " class="d-flex align-items-center justify-content-center ht-100v">
    <!--<video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="videos/video1.mp4" type="video/mp4">
        <source src="videos/video1.ogv" type="video/ogg">
        <source src="videos/video1.webm" type="video/webm">
      </video>-->
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div   class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal"><img src="img/banners/logo.png" class="wd-100" alt=""><br></span>Pronto Soluções<span class="tx-normal"></span></div>
          <div class="tx-white-5 tx-center mg-b-60"></div>
          <form action="logando.php" id="logar" method="post">
          <div class="form-group">
            <input style="border-top:none; border-left:none; border-right:none; " type="text" name="login" class="form-control fc-outline-dark" placeholder="Usuario"/>
          </div><!-- form-group -->
          <div class="form-group">
            <input style="border-top:none; border-left:none; border-right:none; " type="password"  name="senha" class="form-control fc-outline-dark" placeholder="Senha"/>
            <a href="" class="tx-info tx-12 d-block mg-t-10"></a>
          </div><!-- form-group -->
          <button type="submit" class="btn btn-info btn-block ">Logar</button>
           </form>
          <div class="mg-t-60 tx-center"><a href="" class="tx-info"></a></div>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body " -->
    </div><!-- d-flex -->

    <div id="modaldemo4" class="modal fade show" style="padding-right: 17px; display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-close tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-danger tx-semibold mg-b-20">Falha ao logar</h4>
                  <p class="mg-b-20 mg-x-20">Erro durante processo, Usuario não Cadastrado!</p>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

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
    <script type="text/javascript">
      $("form").submit(function(event){
        event.preventDefault();
        
        var login = $("form input[name='login']").val();
        var senha = $("form input[name='senha']").val();
        
        $.ajax({
             type:'post',
             url:'conf/logando.php',
             data:{
               login:login,
               senha: senha

             }
        }).done(function(returno){
            
            var retur = returno;

                  if(retur == "false"){
              $("#modaldemo4").show();
              $("#modaldemo4 .close").click(function(){  
               $("#modaldemo4").hide();
             $("form input[name='login']").val('');
             $("form input[name='senha']").val('');
          });
            }
            if(retur =="true"){

               window.location.replace("painel.php");


            }


          
        })

      })
    </script>
  </body>
</html>
