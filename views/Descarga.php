<?php
require_once("../Modelo/musica.php");
session_start();
$id=$_SESSION['id'];
if(isset($_POST)){
    $cancion=$_POST['cancion'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Descarga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/Descarga.css" />
    <script src="main.js"></script>
</head>
<body>
<header>
        <hgroup>
            <h1>Bienvenido a "E-MUSIC"</h1>
            <h3>Descarga</h3>
        </hgroup>
    </header>
<aside>
<h2 >Descarga Musica</h2>
<div>
        <img id="logo">
    </div>
<h1 id="Saldo"> Tu saldo es:<?php require_once("../Modelo/musica.php"); 

$saldo=getsaldo($id);
$nombrecancion=getcosto($cancion);
$saldo=$saldo[0][0];
$link=$nombrecancion[0][8];
echo $saldo;
$logo=getlogoalbum($cancion); 

?> </h1>

<label id="descargalb">Descarga</label>
<div id="canciondescarga">

<label><?php $nombre=getmusicabyid($cancion); echo $nombre[0][0];?></label>
    </div>
    <div ="contenedorboton">
    <img id="imgalbum" src="<?php echo $logo[0][0];?>">
    </div>
    <form method="POST" action="../views/Descargando.php">
    <input type="hidden" name="link" id="link" value="<?php echo $link; ?>">
    <input type="hidden" name="saldo"  id="saldo" value="<?php echo $saldo; ?>">
 <input type="hidden" name="cancion" id="cancion" value="<?php echo $nombrecancion[0][0];?>">
    <input type="submit" id="descargarbutton" value="Descargar">
    </form>

</aside>

  

<footer>
    <div>
        <p>Todos los derechos reservados para E-MUSIC</p>
    </div>
    </footer>
</body>
</html>