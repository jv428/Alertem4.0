<?php
class grupo{

    private $id_gr ;
    private $descripcion_gr   ;


    function __construct($descripcion_gr)
    {

        $this->descripcion_gr =  $descripcion_gr;
    }
    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO grupos_at(descripcion_gr) VALUES 
            ('$this->descripcion_gr')"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    function listarTabla(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT * FROM grupos_at ")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
        }      
    function buscar($id_gr){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT grupos_at.id_gr AS id_gr,grupos_at.descripcion_gr AS descripcion_gr FROM grupos_at WHERE id_gr=$id_gr;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
        }            
    function actualizar($id_gr){
        include('conexion.php');
         
        $bd ->query("UPDATE grupos_at SET descripcion_gr='$this->descripcion_gr' WHERE id_gr=$id_gr"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
        }
    
}

?>