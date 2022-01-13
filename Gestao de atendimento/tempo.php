<?php
// Incluímos a biblioteca DOMPDF
require_once("dompdf/dompdf_config.inc.php");
 
// Instanciamos a classe
$dompdf = new DOMPDF();
 
// Passamos o conteúdo que será convertido para PDF
$dompdf->load_html("hhh");
 
?>
