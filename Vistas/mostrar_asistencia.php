

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php
    // require_once("/xampp/htdocs/Alertem/Vistas/Comunes/nav.php");
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");


    $id_ho = $_GET["id_ho"];
    $asistencia2 = new asistencia(null,null,null,null,null);
    $asistencia3 = json_decode($asistencia2->listarTablaHorario($id_ho))   ;

 
    foreach($asistencia3 as $dato1){ 

    $asignatura_ho = $dato1->asignatura_ho;
    $grupo_ho = $dato1->grupo_ho;
    }
    $asistencia = new asistencia(null,null,null,null,null);
    $asistencia1 = json_decode($asistencia->listarTablaPerso($grupo_ho,$asignatura_ho));
    foreach($asistencia1 as $dato2){ 
        $id_asi=$dato2->id_asi;
    }
?>

<?php
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
    ?>  

<div class="container_asistencia">
    <div class="container_img_asiste">
        <img src="../Recursos/Imagenes/grupo.jpg" alt="" width="100%">
            <div class="datos_profe">
                <h3>Grupo 7B</h3>
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
        </div>
    </div>


    <button class="agregar_asistencia"><a href="../Vistas/asistencia.php?id_as=<?php echo($id_asi)?>">Agregar</a></button>

    <button class="btn-actividades"><a href="../Vistas/mostrar_actividad.php?id_ho=<?php echo($id_ho)?>"><ion-icon name="pricetags-outline"></ion-icon>&nbsp;&nbsp;Actividades</a></button>

    <?php

    ?>

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
                        <td ><?php echo $dato->fecha_as; ?></td>
                        <td><?php echo $dato->hora_as; ?></td>
                        <td><?php echo $dato->descripcion_as; ?> </td>
                        <td><?php echo $dato->documento_us; ?> <?php echo $dato->nombre_us; ?> <?php echo $dato->p_apellido_us; ?> <?php echo $dato->s_apellido_us; ?></td>
                        <td><?php echo $dato->descripcion_gr; ?></td>                  
                        <td><button class="btn_tabla" ><a href="../Vistas/asistencia.php?id_asi=<?php echo($dato->id_asi)?>"><i class="fa-solid fa-user-pen"></i></a> 
                            </button> 
                             </td>
                    </tr>
                    <?php
                        }
                        ?> 
            </tbody>
        </table>

    </div>

    <button class="btn-atras"><a href="../Vistas/asignaturas.php?id_gr=<?php echo($grupo_ho)?>"><ion-icon name="play-back-outline"></ion-icon>&nbsp;&nbsp;&nbsp;Volver atras</a></button>

<script src="../Controladores/controlador_asistencia.js"></script>