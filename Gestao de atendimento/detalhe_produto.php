  <?php 

 

  /* header   da pagina */
   include 'padrao/header.php';
   /* menu lateral */
   include 'padrao/menu-lateral.php';
   /*  nav */
   include 'padrao/nav.php';
   /* notificação */
   include 'padrao/notificacao.php';
    
     $id_produto = $_SESSION['idpro'];

      $buscar_pro = mysqli_query($sql,"SELECT * FROM produto where id ='$id_produto' ")or die(mysqli_error());

      $pro_array = mysqli_fetch_array($buscar_pro);

      $nome_pro  = $pro_array['nome']; 
      $marca_pro  = $pro_array['marca']; 
      $modelo_pro  = $pro_array['modelo']; 
      $descricao_pro  = $pro_array['descri']; 
        $estoque_pro  = $pro_array['quant_estoque']; 
        $lugar_pro  = $pro_array['lug_estoque'];
        $img_pro  = $pro_array['img'];


        $_SESSION['id_estoque'] = $lugar_pro;
    

        $buscar_lugar = mysqli_fetch_array(mysqli_query($sql,"SELECT * FROM estoque where id = '$lugar_pro'"))or die(mysqli_error());

        
        $lugar_em_estoque = $buscar_lugar['lugar'].' '.$buscar_lugar['corredor_armario'].' '.$buscar_lugar['pratileira'].' '.$buscar_lugar['gaveta'];


   ?>
    <div class="br-mainpanel">
   <div class="br-pagetitle  cadastro_titulo">
        <i class="icon ion-gear-b tx-70 lh-10 " style="color:#17A2B8"></i>
        <div> 
          <h4> <?php echo $nome_pro;?></h4>
          <p class="mg-b-0 float-right"><a href="produtos.php"><i style="font-size:18px " class="icon ion-reply"></i> Produtos</a></p>
        </div>
 </div>
    
      
      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
          <div class="card bd-gray-400">
          <div class="card-body pd-30 pd-md-60">
            <div class="d-md-flex justify-content-between  flex-row-reverse">
              <h1 class="mg-b-0 tx-uppercase tx-gray-400 tx-mont tx-bold"><?php echo $marca_pro; ?>
              <?php echo $modelo_pro; ?> 
              <a href="" data-toggle="modal" data-target="#foto"><img   <?php echo "src='img/produto/".$img_pro."'"; ?> class='img-fluid rounded-circle wd-200' alt=''></a>
              </h1>
              <div class="mg-t-25 mg-md-t-0">
                <h4 class="tx-primary">
                 <strong>Estoque:</strong> <br>
                <?php echo $lugar_em_estoque; ?><br>
                   <?php echo $estoque_pro; ?> UN
                 </h4>
          
              </div>
            </div><!-- d-flex -->

            <div class="row mg-t-20">
              <div class="col-md">
                <a href="" data-toggle="modal" data-target="#Altera-produto" class="br-menu-link active border-0 wd-100">Editar</a> 
              </div><!-- col -->
              <div class="col-md">
                <label class="tx-uppercase tx-13 tx-bold mg-b-20">Descrição</label>
                <p class="d-flex justify-content-between mg-b-5">
                  <span><?php echo $descricao_pro; ?></span>
                </p>
                <p class="d-flex justify-content-between mg-b-5">
                  <span>Valores</span>
                  
                </p>
                <p class="d-flex justify-content-between mg-b-5">
                   <span>
                    Custo: R$: <?php echo $pro_array['p_custo']; ?> <br>
                    Venda: R$: <?php echo $pro_array['p_venda']; ?>
                  </span>
                </p>
                <p class="d-flex justify-content-between mg-b-5">
                   <span></span>
                </p>
              </div><!-- col -->
            </div><!-- row -->

            <div class="table-responsive mg-t-40">
            </div><!-- table-responsive -->

            <hr class="mg-b-60 bd-white-1">

          </div><!-- card-body -->
        </div>
   </div><!-- row -->
      </div><!-- br-pagebody -->
        <div id="Altera-produto" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Produto</h6>
                  <?php 


                     if(empty($pro_array['img'])){


                      echo "";
                     }
                     else{

                      echo "<img src='img/produto/".$pro_array['img']."' class='img-fluid rounded-circle wd-200'>";
                     }

                   ?>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <span class="mg-l-10">Alterar imagem</span> <input class="wd-200 mg-l-10" id="file" type="file">
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Marca:</label>
                    <input type="text" class="form-control" <?php echo "value='".$pro_array['marca']."'"; ?> name="marca">
                  
                 </div>
                </div>
              <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                    <input <?php echo "value='".$pro_array['nome']."'"; ?> type="text" class="form-control" name="nome">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Modelo:</label>
                    <input type="text" class="form-control" <?php echo "value='".$pro_array['modelo']."'"; ?> name="modelo">
                 </div>
                </div>
                <div class="col-lg-7">
                 <div class="form-group">
                  <label class="form-control-label">Descrição:</label>
                    <input type="text" class="form-control" <?php echo "value='".$pro_array['descri']."'"; ?> name="descricao">
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Preço de Custo:</label>
                    <input type="text" class="form-control" name="p_custo" <?php echo "value='".$pro_array['p_custo']."'"; ?>>
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Preço de venda</label>
                    <input <?php echo "value='".$pro_array['p_venda']."'"; ?> type="text" class="form-control" name="p_venda">
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Estoque</label>
                    <input type="text" class="form-control" name="lug_estoque" <?php echo "value='".$buscar_lugar['lugar']."'"; ?>>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Corredor / Armario</label>
                    <input type="text" class="form-control" name="armario" <?php echo "value='".$buscar_lugar['corredor_armario']."'"; ?>>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Platileira</label>
                    <input type="text" class="form-control" name="platileira" <?php echo "value='".$buscar_lugar['pratileira']."'"; ?>>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Gaveta</label>
                    <input type="text" class="form-control" name="gaveta" <?php echo "value='".$buscar_lugar['gaveta']."'"; ?>>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Contidade</label>
                    <input type="text" class="form-control" name="numero" <?php echo "value='".$pro_array['quant_estoque']."'"; ?>>
                 </div>
                </div> 
            </div><!-- row  -->
          </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button data-toggle ="modal" data-target="#modaldemo4" type="button" class="border-0 br-menu-link active">Editar</button>
                </div>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
 <?php   include 'padrao/footer.php'; ?>

 <script>
       document.getElementById('file').onchange = function(e){
     if(e.target.files != null && e.target.files.length !=0){
      var arquivo = e.target.files[0];
      var fd = new FormData();
      fd.append("perfil",arquivo);
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
       if(xmlhttp.readyState===4 & xmlhttp.status===200)
         alert(xmlhttp.responseText);
         $("#file").val('');
      }
      xmlhttp.open("POST","conf/file_pro.php", true);
       xmlhttp.send(fd);
     } 
    }

     $("#Altera-produto .modal-footer button").click(function(){

          var nome = $("#Altera-produto  input[name='nome']").val();
          var marca = $("#Altera-produto  input[name='marca']").val();
          var modelo = $("#Altera-produto  input[name='modelo']").val();
          var descricao = $("#Altera-produto  input[name='descricao']").val();
          var p_custo = $("#Altera-produto  input[name='p_custo']").val();
          var p_venda = $("#Altera-produto  input[name='p_venda']").val();
          var lugar_estoque = $("#Altera-produto  input[name='lug_estoque']").val();
          var armario = $("#Altera-produto  input[name='armario']").val();
          var platileira = $("#Altera-produto  input[name='platileira']").val();
          var gaveta = $("#Altera-produto  input[name='gaveta']").val();
          var numero = $("#Altera-produto  input[name='numero']").val();
          // envio em ajax 

             $.ajax({
                 type: 'POST',
                 url:'conf/alterar_produto.php',
                 data:{
                  nome : nome,
                  marca: marca,
                  modelo: modelo,
                  descricao: descricao,
                  p_venda : p_venda,
                  p_custo : p_custo,
                  lugar_estoque : lugar_estoque,
                  armario: armario,
                  platileira: platileira,
                  gaveta: gaveta,
                  numero: numero
                 }
             }).done(function(retur55){

                alert(retur55);
                location.reload();

             })
     })
 </script>
   <div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img  style="width: 100%"  <?php echo "src='img/produto/".$img_pro."'"; ?> class='img-fluid ' alt=''>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>