<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<?php
require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
?>

<div class="container_actividad">
    <div class="container_img_actividad">
        <img src="../Recursos/Imagenes/calificacion.jpg" alt="" width="100%">
        <div class="titulo-actividad">
            <h3>Calificaciones</h3>
        </div>
    </div>
</div>

<button class="agregar_asistencia"><a href="../Vistas/calificar.php">Calificar</a></button>

<div class="container_table_asis">
    <table>

        <thead>
            <tr>
                <th>Nombre actividad</th>
                <th>Calificación</th>
                <th>Comentario</th>
                <th>Estudiante</th>
                <th style="width: 120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="btn_tabla"><a href="../Vistas/actividades.php"><i class="fa-solid fa-user-pen"></i></a>
                        </button>
                    </td>
                </tr>
        </tbody>
    </table>

</div>

<button class="btn-atras"><a href="../Vistas/mostrar_actividad.php"><ion-icon name="play-back-outline"></ion-icon>&nbsp;&nbsp;&nbsp;Volver atras</a></button>


<script src="../Controladores/controlador_asistencia.js"></script>