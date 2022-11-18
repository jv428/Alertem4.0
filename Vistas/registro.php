<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewp-ort" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Alertem/Recursos/recursos/ico/Recurso 3.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/Alertem/Vistas/Estilos/registro.css">
    <title>Registrarse</title>
</head>
<body>
    <header>
        <div class="encabezado">
            <div class="logo">
                <a href="http://localhost/Alertem/Vistas/home.php"><img src="http://localhost/Alertem/Recursos/recursos/0.5x/Recurso 4@0.5x.png" alt="ALERTEM" title="logo" width="170"></a>
            </div>
            <div class="menav">
            </div>  
        </div>
    </header>
        <div class="formu">
            <br>
            <form>
                <label class="usuario" for="Nombre">Nombre</label>
                <br>
                <input type="text" placeholder="Ingrese Nombre del Usuario" required>
                <br>
                <br>
                <label class="apellido" for="apellido">Apellido</label>
                <br>
                <input type="text" placeholder="Ingrese Apellido del Usuario" required>
                <br>
                <br>
                <label class="email" for="email">Email</label>
                <br>
                <input type="email" placeholder="Ingrese su correo electronico" required>
                <br>
                <br>
                <label class="contraseña" for="contraseña">Contraseña</label>
                <br>
                <input type="password" placeholder="Ingrese Contraseña" required>
                <br>
                <br>
                <br>
                <input type="submit" value="Regístrate" >
                <br>
                <br>
                <p class="p">¿Ya tienes cuenta? <a href="http://localhost/Alertem/Vistas/login.php" for="olvido">  Inicia sesión</a></p>
            </form>
        </div>

    <footer>
        <div class="footer"></div>
    </footer>
</body>
</html>