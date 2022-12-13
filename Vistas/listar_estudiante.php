

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php

include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_listar_estudiante.php");

if(isset($_GET["id_gr"])){
    $id_gr = $_GET["id_gr"];

    
    $listar_grupo = new listar_estudiante(null,null,null,null,null,null,null,null,null,null);
    $listar_grupo1 = json_decode($listar_grupo->listarTablagrupo($id_gr))   ;

    foreach($listar_grupo1 as $dato5){ 

        $descrip_grupo = $dato5->descripcion_gr;
        }

    $listar_estudiante = new listar_estudiante(null,null,null,null,null,null,null,null,null,null);
    $listar_estudiante1 = json_decode($listar_estudiante->listarTabla($id_gr))   ;
}
?>

<?php
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
    ?> 

<div class="container_asistencia">
    <div class="container_img_asiste">
    <img src="../Recursos/Imagenes/grupo.jpg" alt="" width="100%">
            <div class="datos_profe">
                <h3>Grupo <?php echo($descrip_grupo)?></h3>
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
    </div>
</div>

<button class="agregar_asistencia"><a href="../Vistas/Usuario.php?id_gr=<?php echo($id_gr)?>">Agregar</a></button>

<button class="btn-asignaturas"><a href="../Vistas/asignaturas.php?id_gr=<?php echo($id_gr)?>"><ion-icon name="library-outline"></ion-icon>&nbsp;&nbsp;Asignaturas</a></button>
    
    <div class="container_table_asis">
        <table>
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo</th>
                    <th style="width: 120px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($listar_estudiante1 as $dato){ 
                ?>
                    <tr>
                        <td><?php echo $dato->documento_us; ?></td>
                        <td><?php echo $dato->nombre_us; ?></td>
                        <td><?php echo $dato->p_apellido_us; ?></td>
                        <td><?php echo $dato->s_apellido_us; ?></td>
                        <td><?php echo $dato->correo_us; ?></td>
                        
                        <td><button class="btn_tabla" ><a href="../Vistas/Usuario.php?id_us=<?php echo( $dato->id_us)?>"><i class="fa-solid fa-user-pen"></i></a> 
                            </button> 
                            <!-- <button class="btn_tabla"><i class="fa-solid fa-trash-can"></i>
                            Eliminar</button> </td> -->
                    </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>


<script src="../Controladores/controlador_Usuario.js"></script>