<?php
require_once("config.php");

$username=$_POST['usuario'];
$pass=$_POST['Password'];


    $pdo= new config();
$pdo->conectar();
$query="select * from usuario where Usuario='".$username."' and contrasena='".$pass."';";
$result=$pdo->ejecutarConsulta($query);
if($result==null){
    $query="select * from admin where Usuario='".$username."' and Contrasena='".$pass."';";
    $result=$pdo->ejecutarConsulta($query);
    if($result==null){
    header("Location: ../views/index.php");
}else{
    session_start();
    $_SESSION['id']="admin";
    header("Location: ../views/admin.php");
}

}else if($result!=null){
    session_start();
    $_SESSION['id']=$result[0][0];
    header("Location: ../views/MenuPlayList.php");
}
