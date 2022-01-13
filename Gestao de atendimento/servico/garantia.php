  <a href="" data-toggle="modal" data-target="#cadastra-garantia" class="br-menu-link active wd-150 border-0 float-right" style="margin: 10px 10px 20px 0">Cadastrar Garantia</a>
<div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
<h2>Garantia</h2>
<div class="bd bd-white-1 rounded table-responsive">	
 <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                </tr>
              </thead>
              <tbody>

              	<?php 

                   require '../conf/db.php';

                      $buscar = mysqli_query($sql,"SELECT * FROM itens_contrato where tipo = '1'");

                      while($array = mysqli_fetch_array($buscar)){


                      	echo "
			                <tr>
			                  <td>".$array['nome']."</td>
			                  <td>".$array['obs']."</td>
			                </tr>


                      	";
                      }

              	 ?>

                
              </tbody>
            </table>
</div>
</div>