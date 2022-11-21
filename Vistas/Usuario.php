

<?php 
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_Usuario.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_grupo.php");
if(isset($_GET["id_us"])){

    
    $id_us = $_GET["id_us"];
    $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
    $usuario1 = json_decode($usuario->buscar($id_us));
    
    $grupos = new grupo(null,null);
    $grupos1 = json_decode($grupos->listarTabla());
    $estudiante="Estudiante";
    $profesor="Profesor";
    $acudiente="Acudiente";
    $admin="Administrador";
     
    $operacion_us = "actualizar";
    $boton ='btnactualizar';

}else{
    $id_us = null;
    $usuario1 = new stdClass();
    $usuario1->id_us ="";
    $usuario1->documento_us ="";
    $usuario1->nombre_us ="";
    $usuario1->p_apellido_us ="";
    $usuario1->s_apellido_us ="";
    $usuario1->telefono_us ="";
    $usuario1->direccion_us ="";
    $usuario1->correo_us ="";
    $usuario1->clave_us ="";
    $usuario1->t_usuario_us ="Estudinte";
    $usuario1->descripcion_gr ="Seleccionar";

    $grupos = new grupo(null,null);
    $grupos1 = json_decode($grupos->listarTabla());

    $estudiante="Estudiante";
    $profesor="Profesor";
    $acudiente="Acudiente";
    $admin="Administrador";

    $operacion_us = "guardar";
    $boton ='btnguardar';
}

?>
<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/crear.css">

<form id="frmPrincipal" >
            <input type="text" id="id_us" value="<?php echo($usuario1->id_us); ?>" hidden >
            
            <div class="form-group">
                <label for="alumno">Documento</label><br>
                <input type="number" class="form-control"  name="documento_us" required value="<?php echo($usuario1->documento_us); ?>" placeholder="Nombre alumno" >
            </div>
            <div class="form-group">
                <label for="fecha">Nombre</label><br>
                <input type="text" class="form-control"  name="nombre_us" required value="<?php echo($usuario1->nombre_us); ?>" placeholder="Fecha">
            </div>
            <div class="form-group">
                <label for="asistencia">Primer Apellido</label><br>
                <input type="text" class="form-control"  name="p_apellido_us" required value="<?php echo($usuario1->p_apellido_us); ?>" placeholder="Asistencia">
            </div>
            <div class="form-group">
                <label for="telefono">Segundo Apellido</label><br>
                <input type="text" class="form-control"  name="s_apellido_us" required value="<?php echo($usuario1->s_apellido_us); ?>" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label><br>
                <input type="text" class="form-control"  name="telefono_us" required value="<?php echo($usuario1->telefono_us); ?>" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="telefono">Direccion</label><br>
                <input type="text" class="form-control"  name="direccion_us" required value="<?php echo($usuario1->direccion_us); ?>" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="telefono">Correo</label><br>
                <input type="email" class="form-control"  name="correo_us" required value="<?php echo($usuario1->correo_us); ?>" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="">Clave</label><br>
                <input type="password" class="form-control"  name="clave_us" required value="<?php echo($usuario1->clave_us); ?>" placeholder="Telefono">
            </div>
            <div class="form-group">
                <label for="telefono">Tipo de Usuario</label><br>
               <select name="t_usuario_us">
                    <?php 
                    echo(' <option value='.$usuario1->t_usuario_us.'>'.$usuario1->t_usuario_us.'</option>'); 
                    
                    ?>
                    <option value="<?php echo($estudiante);?>">Estudiante</option>
                    <option value="<?php echo($profesor); ?>">Profesor</option>
                    <option value="<?php echo($acudiente); ?>">Acudiente</option>
                    <option value="<?php echo($admin); ?>">Administrador</option>
                    
                 </select>
            
            </div>
            <div class="form-group">
                <label for="telefono">Grupo</label><br>
                <select name="grupo_us">
                    <?php
                    echo(' <option value='.$usuario1->grupo_us.'>'.$usuario1->descripcion_gr.'</option>'); 
                    foreach ($grupos1  as $grupo) {
                        echo(' <option value='.$grupo->id_gr.'>'.$grupo->descripcion_gr.'</option>');
                    } 
                    ?>
                 </select>
            </div>

          
                <button type="submit" class="btn_btn" id="<?php echo($boton)?>"><a href=""><i class="fa-solid fa-user-check" ></i>
                Crear usuario</a></button>
                
                <div class="sub_btn">
                    <button class="btn_vovler"><a href="/view/asistencia.php"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
                </div>
            </div>

            <input type="text" name="operacion_us" id="operacion_us" value="<?php echo($operacion_us);?>" hidden>
        </form>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_Usuario.js"></script>
        

     