<?php 
class Complete {

  private $tabela;
  private $id;

  public function setTabela($tb){
  	   $this->tabela = $tb;
  }
  public function setId($i){
        $this->id = $i;


  }



  public function array(){
    // conexão com banco de dados 
         try{
      $pdo = new PDO("mysql:host=localhost;dbname=mldisplay",'root','');
      $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

 		}
		 catch(PDOException $e){ 
   		echo "error". $e->Message(); 
 		}
    
    //1 ------------------------------------
   switch ($this->tabela) {
    	case 'cliente':
           
           $cliente = $this->id;

          $consulta =  $pdo->query("select * from cliente where id like '$cliente'");
           $contrato = $pdo->query("SELECT * FROM contrato inner join garantia_contrato on contrato.id like garantia_contrato.n_contrato && contrato.fk_cliente like '$cliente' ");
            $cont = $consulta->rowCount();
            


            if($cont == 0){


            	echo "Não existente ";
            }else{
                  
                 
                if($row = $consulta->fetch()){
                       
                     $contra = $contrato->fetch();

                     
                       
                  echo json_encode(
                   array(
                   	'id'=>$row['id'],
                    'nome'=>$row['nome'],
                    'razao'=>$row['razao'],
                    'fones'=>$row['telefone1'].'  '.$row['telefone2'].''.$row['celular1'].' '.$row['celular2'],
                    'email'=>$row['email'],
                    'cep'=>$row['cep'],
                    'endereco'=>$row['endereco'],
                    'numero'=>$row['numero'],
                    'complemento'=>$row['complemento'],
                    'bairro'=>$row['bairro'],
                    'cidade'=>$row['cidade'],
                    'uf'=>$row['uf'],
                    'status'=>$row['status'],
                    'contrato'=>$contra['n_contrato']

                   )


                  );
                

                }

            }  





         break;
    }


  }

}   

 $tabela = $_POST['tabela'];
 $id = $_POST['id'];



$texto = new Complete();

$texto->setTabela($tabela);
$texto->setId($id);
$texto->array();







 ?>