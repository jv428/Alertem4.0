<?php

session_start();

class login{

    private $documento_us ;
    private $clave_us ;


    function __construct($documento_us,$clave_us)
    {


        $this->documento_us = $documento_us;
        $this->clave_us =  $clave_us;

        
    }


    function iniciarSesion(){
        include('conexion.php');
        if ($bd ->query("SELECT * FROM usuarios_at WHERE usuarios_at.documento_us ='$this->documento_us'  AND usuarios_at.clave_us='$this->clave_us';")->fetch(PDO::FETCH_OBJ)){
            $_SESSION['usuario']=$bd ->query("SELECT * FROM usuarios_at WHERE usuarios_at.documento_us ='$this->documento_us'  AND usuarios_at.clave_us='$this->clave_us';")->fetch(PDO::FETCH_OBJ); 
            $bd=null;
            echo json_encode(1);

        }else{
            echo json_encode(0);  
        }
        


    }

    function cerrar_sesion(){
        
        session_destroy();     
        echo json_encode(0); 
    }

}

?>