       <div class="row row-sm ">
         
       <div class="row">
            <div class="col-md-6 col-lg-4">
              <ul class="list-group">
                <li class="list-group-item rounded-top-0">
                  <p class="mg-b-0">
                   
                   <strong class="tx-white tx-medium">Marcas</strong> <span class="text-muted"></span></p>
                </li>
                 <?php require '../conf/db.php'; 


                     $buscar = mysqli_query($sql,"SELECT * FROM marca");


                      while($array = mysqli_fetch_array($buscar)){


                          echo "
                           <li class='list-group-item'>
                          <p class='mg-b-0'>".$array['nome']."</p>
                           </li>
                          ";

                      }

                 ?>

              </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-md-t-0-force">
              <ul class="list-group">
                <li class="list-group-item rounded-top-0">
                  <p class="mg-b-0">
                     <strong class="tx-white tx-medium">Categoria</strong></p>
                </li>
                  <?php require '../conf/db.php'; 


                     $buscat = mysqli_query($sql,"SELECT * FROM categoria");


                      while($arrar = mysqli_fetch_array($buscat)){


                          echo "
                           <li class='list-group-item'>
                          <p class='mg-b-0'>".$arrar['nome']."</p>
                           </li>
                          ";

                      }

                 ?>
                </ul>
            </div><!-- col-4 -->
            <div class="col-md-6 col-lg-4 mg-t-20 mg-lg-t-0-force">
              <ul class="list-group">
                <li class="list-group-item rounded-top-0 border-0">
                   <a data-toggle ="modal" data-target="#modaldemo4" href="" class="br-menu-link active">Cadastrar </a>
                </li>
              </ul>
            </div><!-- col-4 -->
          </div>

        <!-- MODAL ALERT MESSAGE -->
          <div id="modaldemo4" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
          
                  <select name="tipo" style="margin: 5px auto" class="wd-150 form-control select1" data-placeholder="Choose Browser">
                  <option value=""></option>
                  <option value="1">Marca</option>
                  <option value="2">Categoria</option>
                </select>
                  <input type="text" name="nome" class="form-control">
                  <h4 class="tx-success tx-semibold mg-b-20">Selecione o tipo</h4>
                  <p class="mg-b-20 mg-x-20">
                    Digite o  tipo de marca ou categoria desejada!</p>
                  <button type="button" class="submit btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-semibold mg-b-20">
                    Cadastrar</button>
                  </div><!-- modal-body -->
                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

      <script type="text/javascript">
        

     $("#modaldemo4 .submit").click(function(){

       var tipo = $("#modaldemo4 select[name='tipo']").val();
       var nome = $("#modaldemo4 input[name='nome']").val();
      
         $.ajax({
          type: 'post',
          url:'conf/cadastrar-marca-categoria.php',
          data:{
            tipo: tipo,
            nome: nome
          } 
         }).done(function(returnar){
           
           var returno = returnar;

           if(returno == "Preencha todos os Campos"){

            alert("Preencha todos os Campos");
           }else{

                $("#modaldemo4 select[name='tipo']").hide();
                $("#modaldemo4 input[name='nome']").hide();         
                $("#modaldemo4 h4").text(returno);         

           }
            
         })
     })
     $("#modaldemo4 .close").click(function(){

        location.reload();
     });
        
      </script>


         