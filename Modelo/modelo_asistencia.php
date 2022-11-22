
<?php


class asistencia{

    private $asistencia_as ;
    private $fecha_as   ;
    private $hora_as ;
    private $estudiante_as ;

    function __construct($asistencia_as,$fecha_as,$hora_as,$estudiante_as)
    {


        $this->asistencia_as = $asistencia_as;
        $this->fecha_as =  $fecha_as;
        $this->hora_as =  $hora_as;
        $this->estudiante_as =  $estudiante_as;


        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO asistencias_at(asistencia_as,fecha_as,hora_as,estudiante_as) VALUES 
            ('$this->asistencia_as','$this->fecha_as','$this->hora_as',$this->estudiante_as)"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT asistencias_at.id_asi,asistencias_at.asistencia_as, asistencias_at.fecha_as, asistencias_at.hora_as, usuarios_at.t_usuario_us, usuarios_at.nombre_us, usuarios_at.p_apellido_us,usuarios_at.s_apellido_us, usuarios_at.documento_us FROM asistencias_at, usuarios_at WHERE asistencias_at.estudiante_as= usuarios_at.id_us AND usuarios_at.t_usuario_us='Estudiante';")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }        

    function buscar($id_asi){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT asistencias_at.id_asi,asistencias_at.asistencia_as, asistencias_at.fecha_as, asistencias_at.hora_as, usuarios_at.t_usuario_us FROM asistencias_at, usuarios_at WHERE id_asi=$id_asi AND asistencias_at.estudiante_as= usuarios_at.id_us AND usuarios_at.t_usuario_us='Estudiante';")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }    
        
    function actualizar($id_asi){
        include('conexion.php');
     
        $bd ->query("UPDATE asistencias_at SET asistencia_as='$this->asistencia_as',fecha_as='$this->fecha_as',hora_as='$this->hora_as',estudiante_as=$this->estudiante_as WHERE id_asi=$id_asi"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>