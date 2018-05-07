<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Song's E-Music</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/Playlist.css" />
    <script src="main.js"></script>
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
<option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option disabled >Lo más escuchado</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
<option disabled>Musica de interes</option>
<option value="Musica1">Musica1</option>
<option value="musica2">Musica2</option>
<option disabled>Mi lista de repriducciones</option>
<option value="lista1">Lista1</option>
</select>

<div id="search">
<form>
    <label id="busqueda">Buscar en la lista</label>
    <input type="text" id="busqueda" placeholder="Search"/>
    <input type="submit" value="Buscar">
</form>
</div>

<div id="contenedorCanciones">



</div>
<img id="imagenbotondescarga" src="../img/botondescarga.png" with=50 height=50>
<form>
<input id="botondescarga" type="submit" value="Descargar Musica">
</form>

<?php
include_once("../footer.html");
?>
</body>
</html>