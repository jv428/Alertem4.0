<?php
    include("../Modelo/modelo_login.php");
    if (isset($_POST['operacion_lo'])) {
        

        $operacion = $_POST['operacion_lo'];
        
        if (strcmp($operacion,"ingresar")==0) {
            login();
        }
        if (strcmp($operacion,"cerrar_sesion")==0) {
            cerrar_sesion();
        }
        
        
       

    }


    function login(){
        $documento_us =  $_POST ['usuario'];
        $clave_us =  $_POST ['clave'];

        $usuario = new login($documento_us,$clave_us);
      
        $usuario->iniciarSesion();
    }
    function cerrar_sesion(){
        $documento_us =  null;
        $clave_us =  null;

        $usuario = new login($documento_us,$clave_us);
      
        $usuario->cerrar_sesion();
    }





?>