<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-MUSIC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
    <script>
function validar(obj){
	var d = document.getElementById("Envio");
	if(obj.checked==true){
		d.disabled = false;
	}else{
		d.disabled= true;
	}
}
</script>
</head>

<body>
<?php
include_once("../header.html");
?>    
    <form action="../Modelo/Usuario.php" method="POST" id="formulario" name="formulario">
        <label for="name">Ingresa tu nombre:</label>
        <input type="text" name="name" id="name" placeholder="Nombre">

        <label for="identificador">Ingresa un nickname:</label>
        <input type="text" name="identificador" id="identificador" placeholder="Username">


        <label for="email">Ingresa un E-mail:</label>
        <input type="text" name="email" id="email" placeholder="E-mail">

        <label for="password">Ingresa una contraseña:</label>
        <input type="password" name="password" id="password" placeholder="password">
        <div>
            <label>
                <input type="checkbox" class="politicas" id="politicas" onclick="javascript:validar(this);">¿Aceptas las politicas de "E-MUSIC"?</label>
        </div>
        <button type="submit"  id="Envio" onclick="validar()" disabled>Registrar</button>
        <button type="reset" onclick="this.reset()">Borrar campos</button>
    </form>

    <dialog id="message">
        <label id="muestra"></label>
        <button id="cancel" >Aceptar</button>
    </dialog>
    <?php
include_once("../footer.html");
?>
</body>

</html>