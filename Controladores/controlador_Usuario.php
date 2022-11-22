<?php
    include("../Modelo/modelo_Usuario.php");

    if (isset($_POST['operacion_us'])) {
        

        $operacion = $_POST['operacion_us'];
        
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
        
        $documento_us =  $_POST ['documento_us'];
        $nombre_us =  $_POST ['nombre_us'];
        $p_apellido_us =  $_POST ['p_apellido_us'];
        $s_apellido_us =  $_POST ['s_apellido_us'];
        $telefono_us =  $_POST ['telefono_us'];
        $direccion_us =  $_POST ['direccion_us'];
        $correo_us =  $_POST ['correo_us'];
        $clave_us =  $_POST ['clave_us'];
        $t_usuario_us =  $_POST ['t_usuario_us'];
        $grupo_us =  $_POST ['grupo_us'];



        $usuario = new usuario($documento_us,$nombre_us,$p_apellido_us,$s_apellido_us,$telefono_us,$direccion_us,$correo_us,$clave_us,$t_usuario_us,$grupo_us);
      
        $usuario->guardar();


    }

    function eliminar(){
        
    }

    function actualizar(){

        $id_us = $_POST ['codigo'];
        $documento_us =  $_POST ['documento_us'];
        $nombre_us =  $_POST ['nombre_us'];
        $p_apellido_us =  $_POST ['p_apellido_us'];
        $s_apellido_us =  $_POST ['s_apellido_us'];
        $telefono_us =  $_POST ['telefono_us'];
        $direccion_us =  $_POST ['direccion_us'];
        $correo_us =  $_POST ['correo_us'];
        $clave_us =  $_POST ['clave_us'];
        $t_usuario_us =  $_POST ['t_usuario_us'];
        $grupo_us =  $_POST ['grupo_us'];

        $usuario = new usuario($documento_us,$nombre_us,$p_apellido_us,$s_apellido_us,$telefono_us,$direccion_us,$correo_us,$clave_us,$t_usuario_us,$grupo_us);
      
       $usuario->actualizar($id_us);

        
    }

    function listarTabla(){
        

        $usuario = new usuario(null,null,null,null,null,null,null,null,null,null);
        $usuario->listarTabla();
      
    }



?>