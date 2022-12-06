<?php
    include("../Modelo/modelo_actividad.php");

    if (isset($_POST['operacion_ac'])) {
        

        $operacion = $_POST['operacion_ac'];
        
        
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
        
        $nombre_ac =  $_POST ['nombre_ac'];
        $descripcion_ac =  $_POST ['descripcion_ac'];
        $f_asignacion_ac =  $_POST ['f_asignacion_ac'];
        $f_entrega_ac =  $_POST ['f_entrega_ac'];
        $asignatura_ac =  $_POST ['asignatura_ac'];
        

        $actividad = new actividad($nombre_ac,$descripcion_ac,$f_asignacion_ac,$f_entrega_ac,$asignatura_ac);
      
        $actividad->guardar();


    }

    function eliminar(){
        
    }

    function actualizar(){
        $id_ac = $_POST ['codigo'];
        $nombre_ac =  $_POST ['nombre_ac'];
        $descripcion_ac =  $_POST ['descripcion_ac'];
        $f_asignacion_ac =  $_POST ['f_asignacion_ac'];
        $f_entrega_ac =  $_POST ['f_entrega_ac'];
        $asignatura_ac =  $_POST ['asignatura_ac'];


        $actividad1 = new actividad($nombre_ac,$descripcion_ac,$f_asignacion_ac,$f_entrega_ac,$asignatura_ac);
      
        $actividad1->actualizar($id_ac);

        
    }

    // function listarTabla(){
        

    //     $asistencia = new asistencia(null,null,null,null,null);
    //     $asistencia->listarTabla();

    //     $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
    //     $usuario->listarTablaAsistencia();
      
    // }



?>