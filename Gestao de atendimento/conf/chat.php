 <?php 
     $sql = mysqli_connect('localhost','root','','mldisplay');
    $mensagens = $_POST['mensagens'];
    $para = $_POST['para'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    
    session_start();

    $id = $_SESSION['nome'];
    $foto = $_SESSION['perfil'];
     $_SESSION['para'] = $para;
      $login = $_SESSION['nome']; 
      

       mysqli_query($sql,"UPDATE mensagens SET status = '1' where  d_quem = '$login' && p_quem = '$para'");
   

    if (empty($mensagens)){
    echo "digite a mensagem";
    }else{

     mysqli_query($sql,"INSERT INTO mensagens values('null','$id','$para','$mensagens','','$data','$hora','0')")or die(mysqli_error());

        $buscar = mysqli_query($sql,"SELECT * FROM mensagens");

       while ($traz = mysqli_fetch_array($buscar)) {
       	   
          
            echo "
            <div  class='media medial  flex-row-reverse' >
              <div class='br-img-user online'><img src='update/".$foto."' alt=''></div>
              <div class='media-body'>
                <div><span>".$traz['d_quem']."</span> <a href=''></a></div>
                <div class='msg-wrapper'>
                  ".$traz['mensagem']."
                </div><!-- msg-wrapper -->
              </div><!-- media-body -->
            </div>
            ";

       }

    }


 ?>