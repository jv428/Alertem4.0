

<?php 
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_actividad.php");
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_asignatura.php");
if(isset($_GET["id_ac"])){

    
    $id_ac = $_GET["id_ac"];
    $actividad = new actividad(null,null,null,null,null);
    $actividad1 = json_decode($actividad->buscar($id_ac));
    
    $asignatura = new asignatura(null,null);
    $asignatura1 = json_decode($asignatura->listarTablaAsistencia());


    $si=1;
    $no=0;
 
    $operacion_ac = "actualizar";
    $boton ='btnactualizar';

}else{



    $id_ac = null;
    $actividad1 = new stdClass();
    $actividad1->id_ac ="";
    $actividad1->nombre_ac ="";
    $actividad1->descripcion_ac ="";
    $actividad1->f_asignacion_ac ="";
    $actividad1->f_entrega_ac ="";
    $actividad1->asignatura_ac ="";

    $asignatura = new asignatura(null,null);
    $asignatura1 = json_decode($asignatura->listarTablaAsistencia());




    $operacion_ac = "guardar";
    $boton ='btnguardar';
}



?>
<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/crear.css">

<form id="frmPrincipal" >
            <input type="text" id="id_ac" value="<?php echo($actividad1->id_ac); ?>" hidden >
            
            <div class="form-group">
                <label for="">Nombre de actividad</label><br>
                <input type="text" class="form-control"    name="nombre_ac" required value="<?php echo($actividad1->nombre_ac); ?>" placeholder="Nombre de actividad" >            
            </div>
            <div class="form-group">
                <label for="">Descripcion de actividad</label><br>
                <input type="text" class="form-control"    name="descripcion_ac" required value="<?php echo($actividad1->descripcion_ac); ?>" placeholder="Descripcion de actividad" >            
            </div>

            <input type="date" class="form-control"    name="f_asignacion_ac" required value="<?php 
                    date_default_timezone_set('America/Bogota');
                    $f_asignacion_ac=date("Y-m-d");
                    echo($f_asignacion_ac); ?>" placeholder="Fecha" hidden>


            <div class="form-group">
                <label for="">Fecha de entrega</label><br>
                <input type="date" class="form-control"    name="f_entrega_ac" required value="<?php echo($actividad1->f_entrega_ac); ?>" placeholder="Fecha de entrega" >            
            </div>
           
            <div class="form-group">
                <label for="">Asignatura</label><br>
               <select name="asignatura_ac">
                    <?php 
                    echo(' <option value='.$actividad1->asignatura_ac.'>'.$actividad1->descripcion_as.' </option>'); 
                    foreach ($asignatura1  as $asig) {
                        echo(' <option value='.$asig->	id_as.'>'.$asig->descripcion_as .'</option>');
                    } 
                    ?>
                 </select>
            </div>
          
                <button type="submit" class="btn_btn" id="<?php echo($boton)?>"><a href=""><i class="fa-solid fa-user-check" ></i>
                Guardar</a></button>
                
                <div class="sub_btn">
                    <button class="btn_vovler"><a href="../Vistas/mostrar_asistencia.php"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
                </div>
            </div>

            <input type="text" name="operacion_ac" id="operacion_ac" value="<?php echo($operacion_ac);?>" hidden>
        </form>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_actividad.js"></script>
        

     