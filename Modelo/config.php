<?php
class config{
private $oConexion=null; 
/*Realiza la conexión a la base de datos*/
 function conectar(){
    $dsn = 'mysql:dbname=emusic;port=3307;host=Localhost';
    $user = 'root';
    $password = '';
$bRet = false;
    try{
        //$this->oConexion = new PDO("mysql:dbname=hospital;port=3307;host=Localhost,hospital,hospital1"); 
        $this->oConexion = new PDO($dsn, $user, $password);
        $bRet = true;
        echo 'conexion exitosa';
    }catch(Exception $e){
        throw $e;
    }
    return $bRet;
}

/*Realiza la desconexión de la base de datos*/
 function desconectar(){
$bRet = true;
    if ($this->oConexion != null){
        $this->oConexion=null;
    }
    return $bRet;
}

/*Ejecuta en la base de datos la consulta que recibió por parámetro.
Regresa
    Nulo si no hubo datos
    Un arreglo bidimensional de n filas y tantas columnas como campos se hayan
    solicitado en la consulta*/
  function ejecutarConsulta($psConsulta){
$arrRS = null;
$rst = null;
$oLinea = null;
$sValCol = "";
$i=0;
$j=0;
    if ($psConsulta == ""){
       throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
    }
    if ($this->oConexion == null){
        throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
    }
    try{
        $rst = $this->oConexion->query($psConsulta); //un objeto PDOStatement o falso en caso de error
    }catch(Exception $e){
        throw $e;
    }
    if ($rst){
        foreach($rst as $oLinea){ 
            foreach($oLinea as $llave=>$sValCol){
                if (is_string($llave)){
                    $arrRS[$i][$j] = $sValCol;
                    $j++;
                }
            }
            $j=0;
            $i++;
        }
    }
    return $arrRS;
}}