<?php
    include("../Modelo/modelo_grupo.php");

    if (isset($_POST['operacion_gr'])) {


        $operacion = $_POST['operacion_gr'];
        
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
        
        $descripcion_gr =  $_POST ['descripcion_gr'];


        $grupo = new grupo($descripcion_gr);
      
        $grupo->guardar();


    }

    function eliminar(){
        
    }

    function actualizar(){

        $id_gr = $_POST ['codigo'];
        $descripcion_gr =  $_POST ['descripcion_gr'];


        $grupo = new grupo($descripcion_gr);
      
       $grupo->actualizar($id_gr);

        
    }

    function listarTabla(){
        

        $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
        $usuario->listarTabla();

        $grupo = new grupo(null);
        $grupo->listarTabla();
      
    }



?>