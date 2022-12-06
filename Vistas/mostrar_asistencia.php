

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">

<?php
    // require_once("/xampp/htdocs/Alertem/Vistas/Comunes/nav.php");
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");
    $asistencia = new asistencia(null,null,null,null,null);
    $asistencia1 = json_decode($asistencia->listarTabla())   ;
    
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

    <button class="agregar_asistencia"><a href="../Vistas/asistencia.php">Agregar</a></button>
    
    <div class="container_table_asis">
        <table>

            <thead>
                <tr>
                    <th>Asistencia</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Asignatura</th>
                    <th>Estudiante</th>
                    <th>Grupo</th>
                    <th style="width: 120px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    foreach($asistencia1 as $dato){ 
                ?>
                    <tr>
                        <td><?php
                        if ($dato->asistencia_as==1){
                            echo "Si";
                        }elseif($dato->asistencia_as ==0){
                            echo "No";
                        };?></td>
                        <td><?php echo $dato->fecha_as; ?></td>
                        <td><?php echo $dato->hora_as; ?></td>
                        <td><?php echo $dato->descripcion_as; ?></td>
                        <td><?php echo $dato->documento_us; ?> <?php echo $dato->nombre_us; ?> <?php echo $dato->p_apellido_us; ?> <?php echo $dato->s_apellido_us; ?></td>
                        <td><?php echo $dato->descripcion_gr; ?></td>                        
                        <td><button class="btn_tabla" ><a href="../Vistas/asistencia.php?id_asi=<?php echo($dato->id_asi)?>"><i class="fa-solid fa-user-pen"></i>  Editar</a> 
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