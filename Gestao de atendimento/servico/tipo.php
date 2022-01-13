 <a href="" data-toggle="modal" data-target="#cadastra-itens" class="br-menu-link active wd-150 border-0 float-right" style="margin: 10px 10px 20px 0">Cadastrar Itens</a>
<div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
<h2>Itens de Contrato</h2>
<div class="bd bd-white-1 rounded table-responsive">	
 <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>valor</th>
                </tr>
              </thead>
              <tbody>
                <?php 

                   require '../conf/db.php';

                      $buscar = mysqli_query($sql,"SELECT * FROM itens_contrato where tipo = '2'");

                      while($array = mysqli_fetch_array($buscar)){


                        echo "
                      <tr>
                        <td>".$array['nome']."</td>
                        <td>".$array['obs']." <a href='".$array['id']."'>editar</a></td>
                        <td>".$array['valor']."</td>
                      </tr>


                        ";
                      }

                 ?>
                
              </tbody>
            </table>
</div>
</div>
<script>
  
  $(".table tr a").click(function(event){
      event.preventDefault();
           
            var objeto = $(this).attr("href");
           
            $.ajax({
                type: 'post',
                url: 'conf/altera-itens.php',
                data:{
                 objeto : objeto 
                } 
            }).done(function(ret17){

              $("#return").html(ret17);
              
              $("#editar-itens .close").click(function(){
                $("#editar-itens").hide();
              })
              // envio 

              $("#editar-itens .modal-footer button").click(function(){
               var nome = $("#editar-itens .form-group input[name='nome']").val();
                var     descri = $("#editar-itens .form-group input[name='descri']").val();
                var      valor = $("#editar-itens .form-group input[name='valor']").val();
                 
                   $.ajax({
                            type:'post',
                            url: 'conf/altera-itens-contrato.php',
                            data:{
                             nome: nome,
                             descri: descri,
                             valor: valor,
                             id: objeto 
                            } 
                        }).done(function(ret01){

                          alert(ret01);
                          location.reload();
                        })

              })

    })
  })          
</script>