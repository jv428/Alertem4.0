<?php
    include("../Modelo/modelo_calificacion.php");

    if (isset($_POST['operacion_ca'])) {


        $operacion = $_POST['operacion_ca'];
        print_r($operacion);
        if (strcmp($operacion,"actualizar")==0) {
            actualizar();
        }
        

        if(strcmp($operacion,"guardar")==0) {
            guardar();
            
        }
       
        
        if (strcmp($operacion,"eliminar")==0) {
            eliminar();
        }
        if(strcmp($operacion,"mostrar")==0){
            listarTabla();
        }
       

    }


    function guardar(){
        
        $calificacion_ca =  $_POST ['calificacion_ca'];
        $comentario_ca =  $_POST ['comentario_ca'];
        $actividad_ca =  $_POST ['actividad_ca'];
        $estudiante_ac =  $_POST ['estudiante_ac'];


        $calificacion = new calificacion($calificacion_ca,$comentario_ca,$actividad_ca,$estudiante_ac);
      
        $calificacion->guardar();


    }

    function eliminar(){
        
    }

    function actualizar(){
        $id_ca =  $_POST ['codigo'];
        $calificacion_ca =  $_POST ['calificacion_ca'];
        $comentario_ca =  $_POST ['comentario_ca'];
        $actividad_ca =  $_POST ['actividad_ca'];
        $estudiante_ac =  $_POST ['estudiante_ac'];


        $calificacion = new calificacion($calificacion_ca,$comentario_ca,$actividad_ca,$estudiante_ac);
      
        $calificacion->actualizar($id_ca);

        
    }

    function listarTabla(){
        

        $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
        $usuario->listarTabla();

        $grupo = new grupo(null);
        $grupo->listarTabla();
      
    }



?>