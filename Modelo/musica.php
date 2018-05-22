<?php
require_once("config.php");

function conexion($query){
    $DAO = new config();
    $DAO->conectar();
$objets = $DAO->ejecutarConsulta($query);
return $objets;
}
function getmusica(){
return conexion("Select * from cancion");
}

?>