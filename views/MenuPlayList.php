<?php
require_once("../Modelo/musica.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="../css/playlist.css">
</head>
<body>

<header>
        <hgroup>
            <h1>Bienvenido a "E-MUSIC"</h1>
            <h3>PlayList E-Music</h3>
        </hgroup>
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
    <input type="text" id="busqueda" placeholder="Search"/>
    <input type="submit" value="Buscar">
</form>
</div>

<div id="contenedorCanciones">
<select name="canciones">
<?php

$canciones=getmusica();

for($i=0;$i<(count($canciones));$i++){

echo "<option >".$canciones[$i][2]."</option>";
}
?>
</select>


</div>
<img id="imagenbotondescarga" src="../img/botondescarga.png" with=50 height=50>
<form>
<input id="botondescarga" type="submit" value="Descargar Musica">
</form>
    <footer>
    <div>
        <p>Todos los derechos reservados para E-MUSIC</p>
    </div>
    </footer>
</body>
</html>
