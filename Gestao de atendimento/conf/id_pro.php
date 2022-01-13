<?php 
require 'db.php';

$id = $_POST['id'];

session_start();

$_SESSION['idpro'] = $id;

echo "true";


 ?>