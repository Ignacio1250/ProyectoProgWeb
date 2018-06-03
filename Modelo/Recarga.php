<?php
require_once("config.php");
$cuenta=$_POST['cuenta'];
$monto=$_POST['monto'];
$usuario=$_POST['usuario'];


    $DAO = new config();
    $DAO->conectar();
    $object=$DAO->ejecutarConsulta("select * from recarga where codigo='".$cuenta."';");
    echo "Cuenta: -> ".$object[0][0];
    $saldoold=$DAO->ejecutarConsulta("select saldo from usuario where id=".$usuario.";");
    $saldoold=$saldoold[0][0];
    $objets = $DAO->ejecutarConsulta("update usuario set saldo='".($monto+$saldoold)."' where id='".$usuario."';");
    $eliminacioncodigo=$DAO->ejecutarConsulta("delete from recarga where codigo='".$cuenta."';");
    header("Location: ../views/MenuPlayList.php");