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
function getsaldo($id){
return conexion("select saldo from usuario where id='".$id."'");
}
function getcosto($id){
    return conexion("select * from cancion where id='".$id."'");
}
function getmusicabyid($id){
return conexion("select nombre from cancion where id='".$id."'");
}
function saldored($id,$costo){
$usueraccount=conexion("select saldo from usuario where id=".$id.";");
$result=$usueraccount[0][0]-$costo;
return conexion("update usuario set saldo=".$result." where id=".$id.";");
}
function getlogoalbum($id){
$album= conexion("select id_album from cancion where id=".$id.";");
$album=$album[0][0];
$logo=conexion("select logo from album where id=".$album.";");
return $logo;
}
?>