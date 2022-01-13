<?php 
require '../conf/db.php';

session_start();

$id = $_SESSION['clienteid'];

 $buscar = mysqli_query($sql,"SELECT * FROM cliente where id = '$id'");

 $array = mysqli_fetch_array($buscar);

 $obs = $array['obs'];

 ?>

<h2>Observações</h2>
<div class="editable tx-16 bd bd-white-1 pd-30 tx-white medium-editor-element" contenteditable="true" spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="1" medium-editor-index="23c388fa-2f69-fa79-b32c-db3256b456e6" data-placeholder="Type your text" data-medium-focused="true"><?php echo $obs; ?></div> <button class="button-obs br-menu-link active border-0 float-right">Alterar</button>
<script type="text/javascript">
	
  $(".button-obs").click(function(event){
  	event.preventDefault();

    var texto = $(".editable").html();

      $.ajax({
      	type: 'POST',
      	url: 'conf/obs-cliente.php',
      	data:{
      	 texto : texto 	
      	}
      }).done(function(returno){

       $(".editable").html(returno);

      })
  });

</script> 