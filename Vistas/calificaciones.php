<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<?php
require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_calificacion.php");

$id_ho = $_GET["id_ho"];
$asistencia2 = new asistencia(null,null,null,null,null);
$asistencia3 = json_decode($asistencia2->listarTablaHorario($id_ho));


foreach($asistencia3 as $dato1){ 

$asignatura_ho = $dato1->asignatura_ho;
$grupo_ho = $dato1->grupo_ho;
}

$calificacion = new calificacion(null,null,null,null,null);
$calificacion1 = json_decode($calificacion->listarTabla($grupo_ho));



?>

<div class="container_actividad">
    <div class="container_img_actividad">
        <img src="../Recursos/Imagenes/calificacion.jpg" alt="" width="100%">
        <div class="titulo-actividad">
            <h3>Calificaciones</h3>
        </div>
    </div>
</div>

<button class="agregar_asistencia"><a href="../Vistas/calificar.php?id_ho=<?php echo($id_ho)?>">Calificar</a></button>

<div class="container_table_asis">
    <table>

        <thead>
            <tr>
                <th>Nombre actividad </th>
                <th>Calificación</th>
                <th>Comentario</th>
                <th>Estudiante</th>
                <th style="width: 120px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($calificacion1 as $dato) {
            ?>
                <tr>
                    <td><?php echo $dato->nombre_ac; ?></td>
                    <td><?php echo $dato->calificacion_ca; ?></td>
                    <td><?php echo $dato->comentario_ca; ?></td>
                    <td><?php echo $dato->documento_us; ?> <?php echo $dato->nombre_us; ?> <?php echo $dato->p_apellido_us; ?> <?php echo $dato->s_apellido_us; ?> </td>
                    <td><button class="btn_tabla"><a href="../Vistas/calificar.php?id_ca=<?php echo ($dato->id_ca)?>"><i class="fa-solid fa-user-pen"></i></a>
                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

<button class="btn-atras"><a href="../Vistas/mostrar_actividad.php?id_ho=<?php echo($id_ho)?>"><ion-icon name="play-back-outline"></ion-icon>&nbsp;&nbsp;&nbsp;Volver atras</a></button>


<script src="../Controladores/controlador_asistencia.js"></script>