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
	<div class="br-pagetitle cadastro-titulo ">
		
		  <i style="color:#17A2B8" class="fa fa-inbox tx-70 lh-10"></i>
        <div>
          <h4>Equipamentos do Cliente</h4>
          <p class="col-sm-4 mg-b-0 float-right"></p>
            
        </div>
      <div class="card ml-1 mt-2 col-sm-9">
           <p>Razão Social:</p>
           <p>CNPJ:</p>
           <p>End.:</p>
           
           <p>Telefone:</p>
           <p>E-mail:</p>
        </div>
	</div>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-sm-12 ">
				<form >
					<div class="card">
						
					
					<div class="card-body">
						<div class="bd bd-white-3 rounded table-responsive">
							<table class="table table-bordered mg-b-0 table-hover m-0 listagem">
								<thead class="bg-black-9">
									<tr class="bg-black-9">
                                      <th>Modelo</th>
                                      <th>Marca</th>
                                      <th>Descrição</th>
                                      <th>N° Série</th>
                                      <th>Garantia</th>
                                      
                                    </tr>
								</thead>
								<tbody class="table_list">
									<!-- PDO -->
									<?php
									 require 'conf/pdo.php';
									  $equipamentos = $pdo->query('SELECT * FROM equipamento');
									   while ($tabequip = $equipamentos->fetch()) {
									   	echo "
                                        <tr>
                                        <th>".$tabequip['modelo']."<a href='os.php' style='color:#0866C6'> Selecionar</a></th>
                                        <th>".$tabequip['marca']."</th>
                                        <th>".$tabequip['equipamento']."</th>
                                        <th>".$tabequip['n_serie']."</th>
                                        <th>".$tabequip['data_garantia']."</th>
                                      
                                    </tr>
									   	";
									 }
									?>
								</tbody>
								
							</table>
						</div>
						<ul>
                       <li class=" br-menu-link border-0"  style="list-style: none; float: right; margin-top: 40px"><a href="" style="">Novo equipamento</a></li>
                    </ul>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="ch5" class="ht-250 ht-sm-30"></div>
	<?php include 'padrao/footer.php';?>
</div>
<script>
	 $.ajax({
     type:'POST',
     url:'os.php',
     data: { id : href} 
    }).done(function(retdd){
           location.replace("os.php");
    });

  
   })
</script>