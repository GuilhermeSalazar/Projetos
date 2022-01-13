  
   <a href="" data-toggle="modal" data-target="#cadastra-servico" class="br-menu-link active wd-150 border-0 float-right" style="margin: 10px 10px 20px 0">Cadastrar serviço</a>
      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
                

           <div class="bd bd-white-1 rounded table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Cod</th>
                  <th>Serviço</th>
                  <th>Descrição</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                     require '../conf/db.php'; 
                   $consultar_servico = mysqli_query($sql,"SELECT  * FROM  servico ");
                     while($array_ser = mysqli_fetch_array($consultar_servico)){


                          echo "
                <tr>
                  <th scope='row'>".$array_ser['id']."</th>
                  <td  alt='nome'>".$array_ser['nome']."</td>
                  <td  alt='servico'>".$array_ser['servico']." <a href='".$array_ser['id']."'>Editar</a></td>
                  <td  alt='valor'>".$array_ser['valor']."</td>
                </tr>
                

                          ";



                     }


                 ?>
                
              </tbody>
            </table>
          </div>
          
          </div><!-- row -->

          <script>
            
            $(".table tr a").click(function(event){
      event.preventDefault();
          var objeto = $(this).attr("href");
           
            $.ajax({
                type: 'post',
                url: 'conf/altera-servico.php',
                data:{
                 objeto : objeto 
                } 
            }).done(function(ret11){

              $("#return").html(ret11);
                  $("#editar-servico .close").click(function(){
                    $("#editar-servico").hide();
                  })
                 $("#editar-servico .modal-footer button").click(function(){
                     nome = $("#editar-servico .form-group input[name='nome']").val();
                     descri = $("#editar-servico .form-group input[name='descri']").val();
                      valor = $("#editar-servico .form-group input[name='valor']").val();
                  

                        $.ajax({
                            type:'post',
                            url: 'conf/altera-serviço.php',
                            data:{
                             nome: nome,
                             descri: descri,
                             valor: valor,
                             id: objeto 
                            } 
                        }).done(function(ret00){

                          alert(ret00);
                          location.reload();
                        })

                  })
            })
    })
          </script>