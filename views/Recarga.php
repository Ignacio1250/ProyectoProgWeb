<?php
session_start();
$usuario=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Recarga en E-MUSIC</title>
<link rel="stylesheet" type="text/css" href="../css/index.css" >
<script src="../js/index.js"></script> 
</head>
<body>

<?php
include_once("../header.html")
?>
<img id="logo" src="../img/E-Music.jpg">

<form action="../Modelo/Recarga.php" method="POST">
<input type="hidden" name="usuario" id="usuario" value="<?php echo $usuario;?>"/>
<div>
<label name="monto">Ingresa el monto de recarga: </label>
<input name="monto" placeholder="Monto de recarga" />
</div>

<div>
<label type="text" name="cuenta">Ingresa el c&oacute;digito de recarga: </label>
<input type="text" name="cuenta" placeholder="C&oacute;digo de verificaci&oacute;n" />
</div>

<div>
<button type="submit" id="Envio">Verificar</button>
</div>

</form>


<footer>
Targetas de credito disponibles:
<br>
C&oacute;digo de verificaci&oacute;n
</footer>
</body>
</html>