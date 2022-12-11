
<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/crear.css">

<form id="frmPrincipal" >
            <input type="text" id="id_ac" value="" hidden >
            
            <div class="form-group">
                <label for="">Nombre de actividad</label><br>
                <input type="text" class="form-control"    name="" placeholder="Nombre de actividad" >            
            </div>
            <div class="form-group">
                <label for="">Calificación</label><br>
                <input type="text" class="form-control"    name="" placeholder="Calificación" >            
            </div>

            <div class="form-group">
                <label for="">Comentario</label><br>
                <input type="text" class="form-control"    name="" required value="" placeholder="Justificación de la nota" >            
            </div>
           
            <div class="form-group">
                <label for="">Estudiante</label><br>
               <select name="">
                 </select>
            </div>
          
                <button type="submit" class="btn_btn" id=""><a href=""><i class="fa-solid fa-user-check" ></i>
                Guardar</a></button>
                
                <div class="sub_btn">
                    <button class="btn_vovler"><a href="../Vistas/mostrar_asistencia.php"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
                </div>
            </div>

            <input type="text" name="operacion_ac" id="operacion_ac" value="" hidden>
        </form>
        <div id="respuesta">
            
        </div>
        <script src="../Controladores/controlador_actividad.js"></script>