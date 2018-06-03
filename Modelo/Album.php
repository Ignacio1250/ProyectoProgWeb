<?php
require_once("config.php");
$pdo= new config();
$pdo->conectar();

if(isset($_POST)){

$namealbum=$_POST['namealbum'];
$genero=$_POST['album'];
$artista=$_POST['artista'];
$Descripcion=$_POST['Descripcion'];
$Logo=$_POST['Logo'];


$query="Insert into album(nombre,genero,artista,descripcion,logo) values('".$namealbum."','".$genero."','".$artista."','".$Descripcion."','".$Logo."');";
$result=$pdo->ejecutarConsulta($query);
header("Location: ../views/admin.php");


}


