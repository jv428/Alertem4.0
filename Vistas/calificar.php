
<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/crear.css">
<?php
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asistencia.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_calificacion.php");



if(isset($_GET["id_ca"])){

    
    $id_ca = $_GET["id_ca"];
    $calificar = new calificacion(null,null,null,null,null);
    $calificar1 = json_decode($calificar->buscar($id_ca)); //de aqui saco tambien el id del grupo con el id de estudiante 
    
    $acti=$calificar1->actividad_ca;
    $estudian=$calificar1->estudiante_ac;


    $estudi = new calificacion(null, null, null, null, null);
    $estudi1 = json_decode($estudi->actividad($acti));
    
    $asignatura_ho=$estudi1->asignatura_ac;

    $calificacion = new calificacion(null,null,null,null,null);
    $calificacion1 = json_decode($calificacion->listarTablaActividad($asignatura_ho));




    $estudi4 = new calificacion(null, null, null, null, null);
    $estudi5 = json_decode($estudi4->listaEstudiante($estudian));
    $id_cac = $estudi5->grupo_us;



    

    $estudiantes2 = new calificacion(null,null,null,null,null);
    $estudiantes3 = json_decode($estudiantes2->listarTablaEstudiante($id_cac));

    $id_grupo1 = new calificacion(null,null,null,null,null);
    $id_grupo2 = json_decode($id_grupo1->listahorarioConGrupo($asignatura_ho,$id_cac));

    $id_ho = $id_grupo2->id_ho;




    $operacion_ca = "actualizar";
    $boton ='btnactualizar';

}else{

    $id_ho = $_GET["id_ho"];

    $id_ca = null;
    $calificar1 = new stdClass();
    $calificar1->id_ca ="";
    $calificar1->actividad_ca ="";
    $calificar1->calificacion_ca ="";
    $calificar1->comentario_ca ="";
    $calificar1->estudiante_ac ="";




    $asistencia2 = new asistencia(null,null,null,null,null);
    $asistencia3 = json_decode($asistencia2->listarHorario($id_ho));


    foreach($asistencia3 as $dato1){ 

    $asignatura_ho = $dato1->asignatura_ho;
    $grupo_ho = $dato1->grupo_ho;
    }

    $calificacion = new calificacion(null,null,null,null,null);
    $calificacion1 = json_decode($calificacion->listarTablaActividad($asignatura_ho));

    $estudiantes2 = new calificacion(null,null,null,null,null);
    $estudiantes3 = json_decode($estudiantes2->listarTablaEstudiante($grupo_ho));




    $operacion_ca = "guardar";
    $boton ='btnguardar';
}

?>

<div class="sub_btn">
    <button class="btn_vovler"><a href="../Vistas/calificaciones.php?id_ho=<?php echo ($id_ho) ?>"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
</div>

<div class="formulario">
<form id="frmPrincipal" >
            <input type="text" id="id_ca" value="<?php echo($calificar1->id_ca); ?>" hidden >
            
            <div class="form-group">
                <label for="">Nombre de actividad</label><br>
                <select name="actividad_ca">
               <?php 

                    echo(' <option value='.$calificar1->actividad_ca.'>'.$calificar1->nombre_ac.' </option>'); 
                    foreach ($calificacion1  as $act) {
                        echo(' <option value='.$act->id_ac.'>'.$act->nombre_ac.'</option>');
                    } 
                    ?>

                 </select>            
            </div>
            <div class="form-group">
                <label for="">Calificación</label><br>
                <input type="text" class="form-control" value="<?php echo($calificar1->calificacion_ca); ?>"  name="calificacion_ca" placeholder="Calificación" >            
            </div>

            <div class="form-group">
                <label for="">Comentario</label><br>
                <input type="text" class="form-control"  value="<?php echo($calificar1->comentario_ca); ?>"  name="comentario_ca" placeholder="Justificación de la nota" >            
            </div>
           
            <div class="form-group">
                <label for="">Estudiante</label><br>
               <select name="estudiante_ac">
               <?php 
          
                    echo(' <option value='.$calificar1->id_us.'>'.$calificar1->documento_us.' '.$calificar1->nombre_us.' '.$calificar1->p_apellido_us.' '.$calificar1->s_apellido_us.'</option>'); 
                    foreach ($estudiantes3  as $estu) {
                        echo(' <option value='.$estu->id_us.'>'.$estu->documento_us.' '.$estu->nombre_us.' '.$estu->p_apellido_us.' '.$estu->s_apellido_us.'</option>');
                    } 
                    ?>

                 </select>
            </div>
          
            <button type="submit" class="btn_btn" id="<?php echo($boton)?>"><a href=""><i class="fa-solid fa-user-check" ></i>
                Guardar</a></button>
                
                
            </div>

            <input type="text" name="operacion_ca" id="operacion_ca" value="<?php echo($operacion_ca);?>" hidden>
        </form>
        </div>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_calificacion.js"></script>