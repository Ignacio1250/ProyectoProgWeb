<?php


class getalbum{

function getAlbum(){
require_once("config.php");
$DAO=new config();   
    $DAO->conectar();
$objets = $DAO->ejecutarConsulta("Select nombre from album");
return $objets;
}

}
?>