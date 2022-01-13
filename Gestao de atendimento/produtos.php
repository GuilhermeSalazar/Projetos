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
        <i class="fa fa-store tx-70 lh-10 " style="color:#17A2B8"></i>
        <div>
          <h4>Produtos</h4>
          <p class="mg-b-0 float-right"></p>
        </div>
 </div>
           <input  placeholder="Buscar " type="text" alt="lista-clientes" class="input-search form-control float-right wd-200" style="margin:-50px 30px 0 0">
      <a href="" data-toggle="modal" data-target="#cadastra-produto" class="br-menu-link active border-0  wd-100  mg-l-50 mg-t-20 " style="margin-bottom: -50px">Cadastrar</a>
      <div class="pd-10 bd bd-white-1 rounded ">
            <ul class="nav nav-pills flex-column flex-md-row justify-content-end" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab" aria-selected="false">Todos</a></li>
             
            </ul>
          </div>
      <div class='br-pagebody pd-x-20 pd-sm-x-30 mx-wd-1350'>
          <div class='row row-sm mg-t-20'>
            <div class="bd bd-white-1 rounded table-responsive">
            <table class="table table-bordered mg-b-0 lista-clientes">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nome</th>
                  <th>Categoria</th>
                  <th>Modelo</th>
                  <th>Marca</th>
                  <th>Estoque</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <?php 

                $consultar_produtos = mysqli_query($sql,"SELECT * FROM produto");

                 while($array_produto = mysqli_fetch_array($consultar_produtos)){


                   echo "
                         <tr>
                  <th scope='row'>".$array_produto['id']."</th>
                  <td>".$array_produto['nome']." <a href='".$array_produto['id']."' class='produto_true'>Mais</a></td>
                  <td>".$array_produto['categoria']."</td>
                  <td>".$array_produto['modelo']."</td>
                  <td>".$array_produto['marca']."</td>
                  <td>".$array_produto['quant_estoque']."</td>
                  <td>R$:".$array_produto['p_venda']."</td>
                </tr>


                   ";


                 }

                 ?>
               
              </tbody>
            </table>
          </div>
     </div><!-- row -->
   </div><!-- row -->
      </div><!-- br-pagebody -->
        <div id="cadastra-produto" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Novo Produto</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body pd-20">
          <div class="form-layout form-layout-1 ">
            <div class="row mg-b-25">
               <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Categoria:</label>
                    <select class="form-control" name="categoria" id="">
                      <option value="Equipamento">Equipamento</option>
                      <option value="Peças">Peças</option>
                    </select>
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Marca:</label>
                    <input type="text" class="form-control" name="marca">
                    <span class="marcas text-success" style="cursor: pointer;">texto</span>
                 </div>
                </div>
              <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Nome:</label>
                    <input type="text" class="form-control" name="nome">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Modelo:</label>
                    <input type="text" class="form-control" name="modelo">
                 </div>
                </div>
                <div class="col-lg-7">
                 <div class="form-group">
                  <label class="form-control-label">Descrição:</label>
                    <input type="text" class="form-control" name="descricao">
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Preço de Custo:</label>
                    <input type="text" class="form-control" name="p_custo">
                 </div>
                </div>
                <div class="col-lg-4">
                 <div class="form-group">
                  <label class="form-control-label">Preço de venda</label>
                    <input type="text" class="form-control" name="p_venda">
                 </div>
                </div>
                <div class="col-lg-5">
                 <div class="form-group">
                  <label class="form-control-label">Estoque</label>
                    <input type="text" class="form-control" name="lug_estoque">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Corredor / Armario</label>
                    <input type="text" class="form-control" name="armario">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Platileira</label>
                    <input type="text" class="form-control" name="platileira">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Gaveta</label>
                    <input type="text" class="form-control" name="gaveta">
                 </div>
                </div>
                <div class="col-lg-3">
                 <div class="form-group">
                  <label class="form-control-label">Contidade</label>
                    <input type="text" class="form-control" name="numero">
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
     $("#cadastra-produto .modal-footer button").click(function(){
          var categoria = $("#cadastra-produto  select[name='categoria']").val();
          var nome = $("#cadastra-produto  input[name='nome']").val();
          var marca = $("#cadastra-produto  input[name='marca']").val();
          var modelo = $("#cadastra-produto  input[name='modelo']").val();
          var descricao = $("#cadastra-produto  input[name='descricao']").val();
          var p_custo = $("#cadastra-produto  input[name='p_custo']").val();
          var p_venda = $("#cadastra-produto  input[name='p_venda']").val();
          var lugar_estoque = $("#cadastra-produto  input[name='lug_estoque']").val();
          var armario = $("#cadastra-produto  input[name='armario']").val();
          var platileira = $("#cadastra-produto  input[name='platileira']").val();
          var gaveta = $("#cadastra-produto  input[name='gaveta']").val();
          var numero = $("#cadastra-produto  input[name='numero']").val();
          // envio em ajax 

             $.ajax({
                 type: 'POST',
                 url:'conf/cadastrar_produto.php',
                 data:{
                  categoria : categoria,
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
             }).done(function(retur54){

                alert(retur54);
                location.reload();

             })
     })
     $(".produto_true").click(function(event){
      event.preventDefault();
           var pro_cli = $(this).attr("href");
         
         $.ajax({
            type:'post',
            url:'conf/id_pro.php',
            data:{
             id: pro_cli 
            }
         }).done(function(session){

             var session = session;

             if(session == "true"){
              location.replace("detalhe_produto.php");

             }

         })
     })

   
  $(function(){
    $(".input-search").keyup(function(){
        //pega o css da tabela 
        var tabela = $(this).attr('alt');
        if( $(this).val() != ""){
            $("."+tabela+" tbody>tr").hide();
            $("."+tabela+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        } else{
            $("."+tabela+" tbody>tr").show();
        }
    }); 
});
$.extend($.expr[":"], {
    "contains-ci": function(elem, i, match, array) {
        return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
});


 </script>
   