<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/Descarga.css" />
    <script src="main.js"></script>
</head>
<body>
<header>
        <hgroup>
            <h1>Bienvenido a "E-MUSIC"</h1>
            <h3>Admin</h3>
        </hgroup>
    </header>

<aside>

<div>
<h1>Album</h1>
<form action="..\Modelo\Album.php" method="POST">
<label for="namealbum">Album</label><br>
<input type="text" placeholder="nombre del album" name="namealbum" id="namealbum"><br>
<label for="genero">Genero</label><br>
<input type="text" placeholder="Genero" name="genero" id="genero"><br>
<label for="artista">Artista</label><br>
<input type="text" placeholder="Artista" name="artista" id="artista"><br>
<label for="Descripcion">Descripcion</label><br>
<input type="text" placeholder="Descripcion" name="Descripcion" id="Descripcion"><br>
<label for="Logo">Logo</label><br>
<input type="text" placeholder="Link del Logo" name="Logo" id="Logo"><br>
<button type="submit">Guardar Album</button>
</form>
</div>

<div>
<h1>Cancion</h1>
<form action="../Modelo/Cancion.php" method="POST">
<label for="namealbum">Album</label><br>
<?php
require_once("../Modelo/getalbum.php");
$_albumes = new getalbum();
$albumes=$_albumes->getAlbum();
echo "<select name='nombrealbum' id='nombrealbum'>";
for($i=0;$i<count($albumes);$i++){    
    echo "<option value='".(String)$albumes[$i][0]."'>".(String)$albumes[$i][0]."</option>";
}
echo "</select><br>";
?>
<label for="Nombre">Nombre</label><br>
<input type="text" placeholder="Nombre" name="Nombre" id="Nombre"><br>
<label for="Cantante">Cantante</label><br>
<input type="text" placeholder="Cantante" name="Cantante" id="Cantante"><br>
<label for="Autor">Autor</label><br>
<input type="text" placeholder="Autor" name="Autor" id="Autor"><br>
<label for="Duracion">Duracion</label><br>
<input type="text" placeholder="Duracion" name="Duracion" id="Duracion"><br>
<label for="Costo">Costo</label><br>
<input type="text" placeholder="Costo" name="Costo" id="Costo"><br>
<label for="Link">Link</label><br>
<input type="text" placeholder="Link" name="Link" id="Link"><br>
<button type="submit">Guardar Cancion</button>
</form>
</div>
<a href="MenuPlayList.php">Revisar Canciones</a>
</aside>

    <footer>
    <div>
        <p>Todos los derechos reservados para E-MUSIC</p>
    </div>
    </footer>
</body>
</html>