<?php
require_once("config.php");

$username=$_POST['usuario'];
$pass=$_POST['Password'];


    $pdo= new config();
$pdo->conectar();
$query="select * from usuario where Usuario='".$username."' and contrasena='".$pass."';";
$result=$pdo->ejecutarConsulta($query);
if($result==null){
    header("Location: ../views/Login.php");
}else if($result!=null){
    header("Location: ../views/MenuPlayList.php");
}
