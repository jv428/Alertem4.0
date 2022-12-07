

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">

<?php

include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_listar_estudiante.php");

if(isset($_GET["id_gr"])){
    $id_gr = $_GET["id_gr"];
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
                <h3>Grupo 7B</h3>
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
    </div>
</div>

<button class="agregar_asistencia"><a href="../Vistas/Usuario.php">Agregar</a></button>
    
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
                        
                        <td><button class="btn_tabla" ><a href=""><i class="fa-solid fa-user-pen"></i></a> 
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