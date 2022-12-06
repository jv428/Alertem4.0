

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">

<?php
    // require_once("/xampp/htdocs/Alertem/Vistas/Comunes/nav.php");
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_actividad.php");
    $actividad = new actividad(null,null,null,null,null);
    $actividad1 = json_decode($actividad->listarTabla())   ;


    
?>

<?php
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/footer.php");
    ?>  

<div class="container_asistencia">
    <div class="container_img_asiste">
        <div class="subContainer_img_asiste">
            <h3>Grupo 7B</h3>
            <div class="datos_profe">
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
        </div>
    </div>

    <button class="agregar_asistencia"><a href="../Vistas/actividades.php">Agregar</a></button>
    
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
                    foreach($actividad1 as $dato){ 
                ?>
                    <tr>
                        <td><?php echo $dato->nombre_ac; ?></td>
                        <td><?php echo $dato->descripcion_ac; ?></td>
                        <td><?php echo $dato->f_asignacion_ac; ?></td>
                        <td><?php echo $dato->f_entrega_ac; ?> </td>
                        <td><?php echo $dato->descripcion_as; ?></td>              
                        <td><button class="btn_tabla" ><a href="../Vistas/actividades.php?id_ac=<?php echo($dato->id_ac)?>"><i class="fa-solid fa-user-pen"></i>  Editar</a> 
                            </button> 
                            <button class="btn_tabla"><i class="fa-solid fa-trash-can"></i>
                            Eliminar</button> </td>
                    </tr>
                    <?php
                        }
                        ?> 
            </tbody>
        </table>

    </div>
</div>


<script src="../Controladores/controlador_asistencia.js"></script>