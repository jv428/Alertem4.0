<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewp-ort" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/Recursos/recursos/ico/Recurso 3.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Alertem/Vistas/Estilos/login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="encabezado">
            <div class="logo">
                <a href="http://localhost/Alertem/Vistas/home.php"><img src="http://localhost/Alertem/Recursos/recursos/0.5x/Recurso 4@0.5x.png" alt="ALERTEM" title="logo" width="170"></a>
            </div>
            <div class="menav">
                <nav>
                    <ul>
                        <li><a href="#">INICIO</a></li>
                        <li><a href="http://localhost/Alertem/Vistas/registro.php">REGISTRARSE</a></li>
                    </ul>
                </nav>
            </div>  
        </div>
    </header>
    <div class="contenedor">
        <div class="fondo">
            <div class="foto">
                <img src="http://localhost/Alertem/Recursos/recursos/hvjfy.png" width="549" alt="">
            </div>
            <div class="iso">
                <img src="http://localhost/Alertem/Recursos/recursos/1x/Recurso 2.png" width="75" alt="">
            </div>
            <img src="http://localhost/Alertem/Recursos/recursos/1x/fondo1.png" alt="" width="570" height="400px">
        </div>
        <div class="inse">
            <legend>Iniciar Sesión</legend>
        </div>
        <div class="formu">
            <br>
            <form>
                <label class="usuario" for="Usuario">Usuario</label>
                <br>
                <input type="text" placeholder="Ingrese Nombre de Usuario" required>
                <br>
                <br>
                <label class="contraseña" for="contraseña">Contraseña</label>
                <br>
                <input type="password" placeholder="Ingrese Contraseña" required>
                <br>
                <br>
                <input type="checkbox" id="recuerdame">
                <label for="recuerdame">Recuerdame</label>
                <br>
                <br>
                <input type="submit" value="Ingresar" >
                <br>
                <br>
                <a href="#" for="olvido">¿Olvidó su contraseña?</a>
            </form>
        </div>
    </div>
    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>