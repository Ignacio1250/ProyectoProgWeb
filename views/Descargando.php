<?php
if(isset($_POST)){
    $saldo=$_POST['saldo'];
    $cancion=$_POST['cancion'];
    $link=$_POST['link'];
    echo $cancion;
    echo $saldo;
    session_start();
    
}
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Descargando</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/Descargando.css" />
    
</head>
<body>
    <div >
        <img id="logo">
    </div>
    <?php
     require_once("../Modelo/musica.php");
     $reduccion=getcosto($cancion);
    if($saldo>=$reduccion[0][6]){
    saldored($_SESSION['id'],$reduccion[0][6]);    
    echo "<h2>Metadatas Obtenidos...</h2>";
    sleep(5);
    echo '<form action="http://convert2mp3.net/en/index.php?p=convert" method="POST">';
    echo "<input type='hidden' value='$link' id='urlinput' name='url'> ";
    echo '<input type="submit" value="Descargar">';
    echo '</form>';
    echo "<br>";
    }else{
        echo "<h1>No te alcanza para esta rola :D </h1>";
        ?>
      <a href="../views/Recarga.php">Recargar?</a>
        <?php
    }
    ?>
    <br>
    <br>
    <br>
    <a href="MenuPlayList.php" id="LigaLista">Lista de canciones</a>
</body>
</html>