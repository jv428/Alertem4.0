<?php

class tipo_usuario{

private $id_tu ;
private $descripcion_tu   ;


function __construct($id_tu,$descripcion_tu)
{


    $this->id_tu = $id_tu;
    $this->descripcion_tu =  $descripcion_tu;
}

function listarTabla(){
    include('conexion.php');
    $id=null;
    $ver_usuario = $bd ->query("SELECT * FROM tipos_usuario_at ;")->fetchAll(PDO::FETCH_OBJ);
    return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
    $bd=null;
    }         

}

?>