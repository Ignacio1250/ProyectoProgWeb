<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

        <header>
        <hgroup>
            <h1>Bienvenido a "E-MUSIC"</h1>
            <h3>Login</h3>
        </hgroup>
    </header>
    
    <aside>
    <div id="Subindice">
        
                
      <form onsubmit="login.php" method="POST">           
        <br>
        <div id="camposlogin">
                <label for="usuario">Usuario:</label>
                <br>
                <label for="password">Password: </label>    
                
        </div>
        <div id="inputlogin">
        <input id="usuario" type="text" name="idusuario" width="70px" ><br>
        <input type="text" id="password" name="Password" width="70px">
        </div>
   <div id="log">
    <input type="button" value="Login" id="login"><br>
    </form>
    <img src="../img/carita.jpg" width="30px" height="30px"/><a href="Login.php" id="ligalostpass">¿Olvidaste tu contraseña de E-music?</a>
</div>
    </div>
</aside>
<footer>
    <div>
        <p>Todos los derechos reservados para E-MUSIC</p>
    </div>
    </footer>
</body>
</html>