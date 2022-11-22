

<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/asistencia.css">

<?php
    // require_once("/xampp/htdocs/Alertem/Vistas/Comunes/nav.php");
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_grupo.php");
    $grupo = new grupo(null);
    $grupos = json_decode($grupo->listarTabla())   ;
    
?>


<button><a href="../Vistas/grupos.php">Agregar</a></button>
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
                    <th>Grupos</th>
                    <th style="width: 120px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    foreach($grupos as $dato){ 
                ?>
                    <tr>
                        <td><?php echo $dato->descripcion_gr; ?></td>

                        
                        <td><button class="btn_tabla" ><a href="../Vistas/grupos.php?id_gr=<?php echo($dato->id_gr)?>"><i class="fa-solid fa-user-pen"></i>  Editar</a> 
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


<script src="../Controladores/controlador_grupos.js"></script>