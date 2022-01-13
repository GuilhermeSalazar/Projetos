<?php 
require 'db.php';

$id = $_POST['id'];


session_start();


$_SESSION['clienteid'] = $id;

echo"true";


 ?>