

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">

<?php
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_Usuario.php");
    $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
    $usuarios = json_decode($usuario->listarTabla())   ;
    
?>


<button><a href="../Vistas/Usuario.php">Agregar</a></button>
<div class="container_asistencia">
    <div class="container_img_asiste">
        <div class="subContainer_img_asiste">
            <h3>Grupo 7B</h3>
            <div class="datos_profe">
                <h4>Nombre del profesor del grupo<i class="fa-solid fa-pen"></i></h4>
            </div>
        </div>
    </div>

    
    <div class="container_table_asis">
        <table>
            <thead>
                <tr>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Correo</th>
                    <th>Clave</th>
                    <th>Tipo de usuario</th>
                    <th>Grupo</th>
                    <th style="width: 120px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    foreach($usuarios as $dato){ 
                ?>
                    <tr>
                        <td><?php echo $dato->documento_us; ?></td>
                        <td><?php echo $dato->nombre_us; ?></td>
                        <td><?php echo $dato->p_apellido_us; ?></td>
                        <td><?php echo $dato->s_apellido_us; ?></td>
                        <td><?php echo $dato->telefono_us; ?></td>
                        <td><?php echo $dato->direccion_us; ?></td>
                        <td><?php echo $dato->correo_us; ?></td>
                        <td><?php echo $dato->clave_us; ?></td>
                        <td><?php echo $dato->t_usuario_us; ?></td>
                        <td><?php echo $dato->descripcion_gr; ?></td>
                        
                        <td><button class="btn_tabla" ><a href="../Vistas/Usuario.php?id_us=<?php echo($dato->id_us)?>"><i class="fa-solid fa-user-pen"></i>  Editar</a> 
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


<script src="../Controladores/controlador_Usuario.js"></script>