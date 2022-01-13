<?php 
  require 'pdo.php';
// class para salvar editar e transferir

  Class Validador{
   private $acao;
   private $nome;
   private $fone;
   private $email;
   private $endereco;
   private $ocorrencia;
   private $feito;
   private $id;
   private $hora;
   private $tecnico;
     function getAcao(){
     	return $this->acao;
     }
     function setAcao($ac){
     	$this->acao = $ac;
     }
     function getNome(){
       return $this->nome;
     }
     function setNome($n){

        $this->nome = $n;	
     }
     function getFone(){
     	return $this->fone;
     }
     function setFone($fon){
     	$this->fone = $fon;
     }

     function getEmail(){
     	return $this->email;
     }
     function setEmail($ail){
     	$this->email = $ail;
     }

     function getEndereco(){
     	return $this->endereco;
     }
     function setEndereco($end){
     	$this->endereco = $end;
     }
     function getOcorrencia(){
     	return $this->ocorrencia;
     }
     function setOcorrencia($oco){
     	$this->ocorrencia = $oco;
     }

     function getId(){
     	return $this->id;
     }
     function setId($ifk){
     	$this->id = $ifk;
     }
     function getHora(){
     	return $this->hora;
     }
     function setHora($ohs){
         $this->hora = $ohs;

     }
     function getLaudo(){
      return $this->feito;
     }
     function setLaudo($lau){
      $this->feito = $lau;

     }
    function setTecnico ($tec){
       $this->tecnico = $tec;


    }



    public  function executar(){

          // conexão com banco 

        try {
        $PDO = new PDO('mysql:host=localhost;dbname=mldisplay', 'root', '');
         $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
         }
      

       $acao_validador = $this->acao;
       $_nome = $this->nome;
       $_fone = $this->fone;
       $_email = $this->email;
       $_endereco = $this->endereco;
       $_ocorrencia = $this->ocorrencia;
       $_laudo = $this->feito;
       $_id = $this->id;
       $_hora = $this->hora;
       $_tec = $this->tecnico;


        switch ($acao_validador){

          case 'Salvar': 

         $PDO->query("UPDATE acesso set nome_contato = '$_nome', fone = '$_fone', mail = '$_email', endereco = '$_endereco', ocorrencia = '$_ocorrencia'  where id = '$_id'");
         
             

        // CONFIGURAÇÃO DO LAUDO NA PAGINA  DE TECNICO 
        
         
          $laudo_cha = $PDO->query("SELECT * FROM laudo where id_cha = '$_id' && nome like '$_tec'");
            
          $laudo_row = $laudo_cha->rowCount();

           if($laudo_row == 0){

             $PDO->query("INSERT into laudo values(default,'$_id','$_tec','$_hora','$_laudo')");

           }else{


            $PDO->query("UPDATE laudo set laudo = '$_laudo' where id_cha = '$_id' && nome = '$_tec'");


           }






         echo "Alterado Com sucesso";
           
        break;

         case 'Finalizar':
              
               $PDO->query("UPDATE acesso set nome_contato = '$_nome', fone = '$_fone', mail = '$_email', endereco = '$_endereco', ocorrencia = '$_ocorrencia',  nivel = '2', hora_final = '$_hora' where id = '$_id'");
               

                // CONFIGURAÇÃO DO LAUDO NA PAGINA  DE TECNICO 
        
         
          $laudo_cha = $PDO->query("SELECT * FROM laudo where id_cha = '$_id' && nome like '$_tec'");
            
          $laudo_row = $laudo_cha->rowCount();

           if($laudo_row == 0){

             $PDO->query("INSERT into laudo values(default,'$_id','$_tec','$_hora','$_laudo')");

           }else{


            $PDO->query("UPDATE laudo set laudo = '$_laudo' where id_cha = '$_id' && nome = '$_tec'");


           }


               echo "Chamado Finalizado com Sucesso!";
         break;

        }  

    }
 

  }



  //declarando variaveis

 session_start();


 $tecnico = $_SESSION['nome'];

$laudo =@$_POST['laudo'];
$login_id  = $_SESSION['id'];
$btn = $_POST['acao'];
$id = $_POST['id'];
$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$ocorrencia = $_POST['ocorrencia'];
$horafind = $_POST['hrsfinal'];
$fk_tecnico = $_POST['fk_tecnico'];
$val = new Validador();
$val->setTecnico($tecnico);
$val->setAcao($btn);
$val->setId($id);
$val->setNome($nome);
$val->setFone($fone);
$val->setEmail($email);
$val->setEndereco($endereco);
$val->setOcorrencia($ocorrencia);
$val->setHora($horafind);
$val->setLaudo($laudo);
$val->executar();


if($btn == 'Finalizar'){


$buscando = $pdo->query("SELECT * FROM acesso where fk_tecnico = '$fk_tecnico' && nivel = 1");


$contando = $buscando->rowCount();



  if($contando == 0){

   $pdo->query("UPDATE hepdesk set status = '1' where conta_fk = '$fk_tecnico'");



  }


}

  




  
 ?>