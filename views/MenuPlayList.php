<?php
require_once("../Modelo/musica.php");
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Canciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="../css/playlist.css">
    <script src="../js/seleccion.js">
    

    </script>
</head>
<body>

<header>
        <hgroup>
            <h1>Bienvenido a "E-MUSIC"</h1>
            <h3>PlayList E-Music</h3>
        </hgroup>
    <a id="salir" name="salir" href="../Modelo/Salir.php">Salir</a>
    </header>
    <img id="ImagenAlbum"> 
<h1>Lista de reproducciones E-Music</h><br>

<select id="seleccionCanciones" name="Genero">
    <option disabled>Lo más reciente</option>
<option value="AlbumesREC">Albumes</option>
  <option value="ArtistasREC">Artistas</option>
  <option value="GeneroREC">Genero</opion>
  <option disabled >Lo más escuchado</option>
  <option value="AlbumesESC">Albumes</option>
  <option value="ArtistasESC">Artistas</option>
  <option value="GeneroESC">Genero</option>
<option disabled>Musica de interes</option>
<option value="AlbumesINT">Albumes</option>
<option value="ArtistasINT">Artistas</option>
<option value="GeneroESC">Genero</option>
<option disabled>Mi lista de repriducciones</option>
<option value="AlbumesINT">Albumes</option>
<option value="ArtistasINT">Artistas</option>
<option value="GeneroESC">Genero</option>
</select>
<?php
?>
<div id="search">
<form>
    <label id="busqueda">Buscar en la lista</label>
    <input type="text" id="busqueda" onkeyup="busqueda(this.value);" placeholder="Search"/>
    <input type="submit" value="Buscar">
</form>
</div>

<div id="contenedorCanciones"style="overflow-y: scroll; height:200px;">


<?php

$canciones=getmusica();
echo "<ul>";
for($i=0;$i<(count($canciones));$i++){
echo "<li onclick=seleccionar(".$canciones[$i][0].");>".$canciones[$i][2]."</li>";
}
echo "</ul>";
?>

</div>
<form action="Descarga.php" method="POST">
<input type="hidden" id="cancion" name="cancion" >
<img id="imagenbotondescarga" src="../img/botondescarga.png" with=50 height=50>
<?php if($_SESSION['id']!="admin"){
echo "<input id='botondescarga' type='submit' value='Descargar Musica'>";

}
?>
</form>
<?php 
if($_SESSION["id"]=="admin"){
    echo "<a id='ligaadmin' href='../views/admin.php'>Agregar Canciones y Albumes</a>";
}
?>
</ul>





    <footer>
    <div>
        <p>Todos los derechos reservados para E-MUSIC</p>
    </div>
    </footer>
</body>
</html>
