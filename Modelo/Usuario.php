<?php
require_once("config.php");
$nombre=$_POST['name'];
$contraseña=$_POST['password'];
$username=$_POST['identificador'];
$email=$_POST['email'];

$pdo= new config();
$pdo->conectar();
$query="Insert into usuario (nombre,contrasena,Usuario,Correo) values('".$nombre."','".$contraseña."','".$username."','".$email."');";
echo $query;
header("Location: ../views/Login.php");
$objets = $pdo->ejecutarConsulta($query);



?>