<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vistas/Estilos/crear.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>crear cliente</title>
</head>

<body id="body">
    <?php
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/footer.php");
    ?>



    <div class="container_crear">
        <div class="card-header">
            <h4>Crear Estudiante</h4>
        </div>
        <div class="container_tabla_edit">
            <form action="/controlador/registrar.php" method="POST">
                <div class="form-group">
                    <label for="alumno">Estudiante</label><br>
                    <input type="text" class="form-control" name="alumno" required value="" placeholder="Nombre alumno">
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha</label><br>
                    <input type="date" class="form-control" name="fecha" required value="" placeholder="Fecha">
                </div>
                <div class="form-group">
                    <label for="asistencia">Asistencia</label><br>
                    <input type="text" class="form-control" name="asistencia" required value="" placeholder="Asistencia">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label><br>
                    <input type="text" class="form-control" name="telefono" required value="" placeholder="Telefono">
                </div>

                <div class="container_btn">
                    <div class="sub_btn">
                        <button type="submit" class="btn_btn"><a href=""><i class="fa-solid fa-user-check"></i>
                                Crear usuario</a></button>
                    </div>
                    <div class="sub_btn">
                        <button class="btn_vovler"><a href="/view/asistencia.php"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
                    </div>
                </div>
            </form>
        </div>


    </div>
</body>

</html>