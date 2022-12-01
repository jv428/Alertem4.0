

<?php 
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_Usuario.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asignatura.php");
if(isset($_GET["id_asi"])){

    
    $id_asi = $_GET["id_asi"];
    $asistencia = new asistencia(null,null,null,null,null);
    $asistencia1 = json_decode($asistencia1->buscar($id_asi));
    
    $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
    $usuario1 = json_decode($usuario->listarTablaAsistencia());

    $asignaturas = new asignatura(null,null);
    $asignatura1 = json_decode($asignaturas->listarTablaAsistencia());

    $si=1;
    $no=0;
 
    $operacion_asi = "actualizar";
    $boton ='btnactualizar';

}else{



    $id_asi = null;
    $asistencia1 = new stdClass();
    $asistencia1->id_asi ="";
    $asistencia1->asistencia_as ="";
    $asistencia1->descripcion_as ="";
    $asistencia1->estudiante_as =null;


    $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
    $usuario1 = json_decode($usuario->listarTablaAsistencia());

    $asignatura = new asignatura(null,null);
    $asignatura1 = json_decode($asignatura->listarTablaAsistencia());

    $si=1;
    $no=0;

    $operacion_asi = "guardar";
    $boton ='btnguardar';
}



?>
<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/crear.css">

<form id="frmPrincipal" >
            <input type="text" id="id_asi" value="<?php echo($asistencia1->id_asi); ?>" hidden >
            
            <div class="form-group">
                <label for="telefono">Asistencia</label><br>
               <select name="asistencia_as">
                    <?php 
                    echo(' <option value='.$asistencia1->asistencia_as.'>'.$asistencia1->asistencia_as.'</option>'); 
                    
                    ?>
                    <option value="<?php echo($si);?>">Si</option>
                    <option value="<?php echo($no); ?>">No </option>                    
                 </select>
            
            </div>

                <input type="date" class="form-control"    name="fecha_as" required value="<?php 
                    date_default_timezone_set('America/Bogota');
                    $fecha_as=date("Y-m-d");
                    echo($fecha_as); ?>" placeholder="Fecha" hidden>



                <input type="time" class="form-control"  name="hora_as" required value="<?php
                    date_default_timezone_set('America/Bogota');
                    $hora_as=date("H:i:s");                
                    echo($hora_as); ?>" placeholder="Asistencia" hidden>
            
           
            <div class="form-group">
                <label for="telefono">Asignatura</label><br>
               <select name="asignatura_as">
                    <?php 
                    echo(' <option value='.$asistencia1->asignatura_as.'>'.$asistencia1->descripcion_as.'</option>'); 
                    foreach ($asignatura1  as $asig) {
                        echo(' <option value='.$asig->id_as.'>'.$asig->descripcion_as .'</option>');
                    } 
                    ?>
                 </select>
            </div>

            <div class="form-group">
                <label for="telefono">Estudiante</label><br>
               <select name="estudiante_as">
                    <?php 
                    echo(' <option value='.$asistencia1->estudiante_as.'>'.$asistencia1->documento_us .' '.$asistencia1->nombre_us .' '.$asistencia1->p_apellido_us .' '.$asistencia1->s_apellido_us .'</option>'); 
                    foreach ($usuario1  as $usuario) {
                        echo(' <option value='.$usuario->id_us.'>'.$usuario->documento_us .' '.$usuario->nombre_us .' '.$usuario->p_apellido_us .' '.$usuario->s_apellido_us .'</option>');
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

            <input type="text" name="operacion_asi" id="operacion_asi" value="<?php echo($operacion_asi);?>" hidden>
        </form>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_asistencia.js"></script>
        

     