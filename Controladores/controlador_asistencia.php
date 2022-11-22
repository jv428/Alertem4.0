<?php
    include("../Modelo/modelo_asistencia.php");

    if (isset($_POST['operacion_asi'])) {
        

        $operacion = $_POST['operacion_asi'];
        print_r($_POST);
        
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
        
        $asistencia_as =  $_POST ['asistencia_as'];
        $fecha_as =  $_POST ['fecha_as'];
        $hora_as =  $_POST ['hora_as'];
        $estudiante_as =  $_POST ['estudiante_as'];
        

        $asistencia = new asistencia($asistencia_as,$fecha_as,$hora_as,$estudiante_as);
      
        $asistencia->guardar();


    }

    function eliminar(){
        
    }

    function actualizar(){

        $id_asi = $_POST ['codigo'];
        $asistencia_as =  $_POST ['asistencia_as'];
        $fecha_as =  $_POST ['fecha_as'];
        $hora_as =  $_POST ['hora_as'];
        $estudiante_as =  $_POST ['estudiante_as'];


        $asistencia = new asistencia($asistencia_as,$fecha_as,$hora_as,$estudiante_as);
      
        $asistencia->actualizar($id_asi);

        
    }

    function listarTabla(){
        

        $asistencia = new asistencia(null,null,null,null);
        $asistencia->listarTabla();

        $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
        $usuario->listarTablaAsistencia();
      
    }



?>