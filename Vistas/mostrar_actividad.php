<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php
// require_once("/xampp/htdocs/Alertem/Vistas/Comunes/nav.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_actividad.php");
$actividad = new actividad(null, null, null, null, null);
$actividad1 = json_decode($actividad->listarTabla());



?>

<?php
require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
?>

<div class="container_actividad">
    <div class="container_img_actividad">
        <img src="../Recursos/Imagenes/actividades_alertem.jpg" alt="" width="100%">
        <div class="titulo-actividad">
            <h3>Actividades</h3>
        </div>
    </div>
</div>

<button class="agregar_asistencia"><a href="../Vistas/actividades.php">Agregar</a></button>

<button class="btn-actividades"><a href="../Vistas/calificaciones.php"><ion-icon name="ribbon-outline"></ion-icon>&nbsp;&nbsp;Calificaciones</a></button>

<div class="container_table_asis">
    <table>

        <thead>
            <tr>
                <th>Nombre actividad</th>
                <th>Descripcion de la actividad</th>
                <th>Fecha de asignacion</th>
                <th>Fecha de entrega</th>
                <th>asignatura</th>
                <th style="width: 120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($actividad1 as $dato) {
            ?>
                <tr>
                    <td><?php echo $dato->nombre_ac; ?></td>
                    <td><?php echo $dato->descripcion_ac; ?></td>
                    <td><?php echo $dato->f_asignacion_ac; ?></td>
                    <td><?php echo $dato->f_entrega_ac; ?> </td>
                    <td><?php echo $dato->descripcion_as; ?></td>
                    <td><button class="btn_tabla"><a href="../Vistas/actividades.php?id_ac=<?php echo ($dato->id_ac) ?>"><i class="fa-solid fa-user-pen"></i></a>
                        </button>
                        <button class="btn_eliminar"><i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</div>

<button class="btn-atras"><a href="../Vistas/mostrar_asistencia.php?id_ho=2"><ion-icon name="play-back-outline"></ion-icon>&nbsp;&nbsp;&nbsp;Volver atras</a></button>


<script src="../Controladores/controlador_asistencia.js"></script>