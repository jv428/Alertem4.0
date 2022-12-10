

<?php 
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");

include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_horario.php");
if(isset($_GET["id_asi"])){

    
    $id_asi = $_GET["id_asi"];


    $asistencia = new asistencia(null,null,null,null,null);
    $asistencia1 = json_decode($asistencia->buscar($id_asi));
    

    $asistencia5 = new asistencia(null,null,null,null,null);
    $asistencia6 = json_decode($asistencia5->listarTablaasistencia($id_asi));

    foreach($asistencia6 as $dato5){ 

        $asigna = $dato5->asignatura_as;
        }

    // se hace esta consulta para identificar el grupo y asi traer las asignaturas de ese grupo comboboc
    $asistencia_asignatura = new asistencia(null,null,null,null,null);
    $asistencia_asignatura1 = json_decode($asistencia_asignatura->listarTablaHorario($asigna)); 

    foreach($asistencia_asignatura1 as $dato4){ 

        $grupo_ho1 = $dato4->grupo_ho;
        $asignatura1 = $dato4->asignatura_ho;
        
        }

    $horario = new horario(null,null,null,null,null);
    $horario1 = json_decode($horario->listarTablaAsistencia($grupo_ho1,$asignatura1));

    // se lista los usuarios que pertenecen a ese grupo
    $usuario = new asistencia(null,null,null,null,null);
    $usuario1 = json_decode($usuario->listarTablaUsuario($grupo_ho1));



    

    $si=1;
    $no=0;
 
    $operacion_asi = "actualizar";
    $boton ='btnactualizar';

}else{

    $id_as = $_GET["id_as"];

    $id_asi = null;
    $asistencia1 = new stdClass();
    $asistencia1->id_asi ="";
    $asistencia1->asistencia_as ="";
    $asistencia1->descripcion_as ="";
    $asistencia1->asignatura_as ="";
    $asistencia1->descripcion_gr ="";
    $asistencia1->estudiante_as =null;

    $asistencia5 = new asistencia(null,null,null,null,null);
    $asistencia6 = json_decode($asistencia5->listarTablaasistencia($id_as));

    foreach($asistencia6 as $dato5){ 

        $asigna = $dato5->asignatura_as;
        }

    // se hace esta consulta para identificar el grupo y asi traer las asignaturas de ese grupo
    $asistencia_asignatura = new asistencia(null,null,null,null,null);
    $asistencia_asignatura1 = json_decode($asistencia_asignatura->listarTablaHorario($asigna)); 

    foreach($asistencia_asignatura1 as $dato4){ 

        $grupo_ho1 = $dato4->grupo_ho;
        $asignatura1 = $dato4->asignatura_ho;
        }


    $horario = new horario(null,null,null,null,null);
    $horario1 = json_decode($horario->listarTablaAsistencia($grupo_ho1,$asignatura1));
    // se lista los usuarios que pertenecen a ese grupo
    $usuario = new asistencia(null,null,null,null,null);
    $usuario1 = json_decode($usuario->listarTablaUsuario($grupo_ho1));

    
    // consulta para bton volver

    // foreach($asistencia_asignatura1 as $dato4){ 

    //     $grupo_ho1 = $dato4->grupo_ho;
        
    //     }

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
                    echo(' <option value='.$asistencia1->asignatura_as.'>'.$asistencia1->descripcion_as.' '.$asistencia1->descripcion_gr.'</option>'); 
                    foreach ($horario1  as $horar) {
                        echo(' <option value='.$horar->id_ho.'>'.$horar->descripcion_as .'</option>');
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
                    <a href="../Vistas/mostrar_asistencia.php?id_ho=<?php echo($asigna)?>"   class="btn_vovler"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a>
                </div>
            </div>

            <input type="text" name="operacion_asi" id="operacion_asi" value="<?php echo($operacion_asi);?>" hidden>
        </form>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_asistencia.js"></script>
        

     