<?php
require_once("config.php");
$pdo= new config();
$pdo->conectar();

if(isset($_POST)){
$nombrealbum=$_POST['nombrealbum'];
     $Nombre=$_POST['Nombre'];
     $Cantante=$_POST['Cantante'];
     $Autor=$_POST['Autor'];
     $Duracion=$_POST['Duracion'];
     $Costo=$_POST['Costo'];
    
     $query="select id from album where nombre='".$nombrealbum."';";
     $resultado=$pdo->ejecutarConsulta($query);
     if($resultado==null){

         echo "<h1>Ocurrio un error :( </h1>";
     }else{
  $id_album=$resultado[0][0];
        $query="Insert into cancion(id_album,nombre,cantante,autor,duracion,costo) values('".$id_album."','".$Nombre."','".$Cantante."','".$Autor."','".$Duracion."','".$Costo."');";
        $pdo->ejecutarConsulta($query);
        header("Location:../views/admin.php");
    }
    }
