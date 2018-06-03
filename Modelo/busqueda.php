<?php
require_once("config.php");
$busqueda=$_POST['valor'];
function conexion($query){
    $DAO = new config();
    $DAO->conectar();
$objets = $DAO->ejecutarConsulta($query);
return $objets;
}

return conexion("Select * from cancion where nombre like '%".$busqueda."%'");

