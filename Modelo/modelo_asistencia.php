
<?php


class asistencia{

    private $asistencia_as ;
    private $fecha_as   ;
    private $hora_as ;
    private $asignatura_as ;
    private $estudiante_as ;

    function __construct($asistencia_as,$fecha_as,$hora_as,$asignatura_as,$estudiante_as)
    {


        $this->asistencia_as = $asistencia_as;
        $this->fecha_as =  $fecha_as;
        $this->hora_as =  $hora_as;
        $this->asignatura_as =  $asignatura_as;
        $this->estudiante_as =  $estudiante_as;


        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO asistencias_at(asistencia_as,fecha_as,hora_as,asignatura_as,estudiante_as) VALUES 
            ('$this->asistencia_as','$this->fecha_as','$this->hora_as',$this->asignatura_as,$this->estudiante_as)"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT asistencias_at.id_asi, asistencias_at.asistencia_as, asistencias_at.fecha_as,  asistencias_at.estudiante_as,asistencias_at.hora_as, asignaturas_at.descripcion_as, usuarios_at.documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, grupos_at.descripcion_gr FROM asistencias_at INNER JOIN horarios_at ON asistencias_at.asignatura_as=horarios_at.id_ho INNER JOIN asignaturas_at ON horarios_at.asignatura_ho=asignaturas_at.id_as INNER JOIN usuarios_at ON asistencias_at.estudiante_as=usuarios_at.id_us INNER JOIN grupos_at ON usuarios_at.grupo_us=grupos_at.id_gr WHERE usuarios_at.t_usuario_us='Estudiante' ;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }        

    function buscar($id_asi){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT asistencias_at.id_asi, asistencias_at.asistencia_as, asistencias_at.fecha_as, asistencias_at.hora_as, asignaturas_at.descripcion_as, asistencias_at.estudiante_as,usuarios_at.documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, usuarios_at.t_usuario_us, grupos_at.descripcion_gr FROM asistencias_at INNER JOIN horarios_at ON asistencias_at.asignatura_as=horarios_at.id_ho INNER JOIN asignaturas_at ON horarios_at.asignatura_ho=asignaturas_at.id_as INNER JOIN usuarios_at ON asistencias_at.estudiante_as=usuarios_at.id_us INNER JOIN grupos_at ON usuarios_at.grupo_us=grupos_at.id_gr WHERE id_asi=$id_asi AND usuarios_at.t_usuario_us='Estudiante' ;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }    
        
    function actualizar($id_asi){
        include('conexion.php');
     
        $bd ->query("UPDATE asistencias_at SET asistencia_as='$this->asistencia_as',fecha_as='$this->fecha_as',hora_as='$this->hora_as',asignatura_as=$this->asignatura_as,estudiante_as=$this->estudiante_as WHERE id_asi=$id_asi"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>