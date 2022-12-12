
<?php


class calificacion{

    private $nombre_ac ;
    private $descripcion_ac   ;
    private $f_asignacion_ac ;
    private $f_entrega_ac ;
    private $asignatura_ac ;

    function __construct($nombre_ac,$descripcion_ac,$f_asignacion_ac,$f_entrega_ac,$asignatura_ac)
    {


        $this->nombre_ac = $nombre_ac;
        $this->descripcion_ac =  $descripcion_ac;
        $this->f_asignacion_ac =  $f_asignacion_ac;
        $this->f_entrega_ac =  $f_entrega_ac;
        $this->asignatura_ac =  $asignatura_ac;


        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO actividades_at(nombre_ac,descripcion_ac,f_asignacion_ac,f_entrega_ac,asignatura_ac) VALUES 
            ('$this->nombre_ac','$this->descripcion_ac','$this->f_asignacion_ac','$this->f_entrega_ac',$this->asignatura_ac)"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla($grupo_ho){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT calificaciones_at.id_ca,calificaciones_at.calificacion_ca,actividades_at.nombre_ac,  calificaciones_at.comentario_ca, actividades_at.nombre_ac,usuarios_at.documento_us,usuarios_at.nombre_us,usuarios_at.p_apellido_us,usuarios_at.s_apellido_us FROM calificaciones_at INNER JOIN actividades_at ON calificaciones_at.actividad_ca=actividades_at.id_ac INNER JOIN asignaturas_at ON actividades_at.asignatura_ac=asignaturas_at.id_as INNER JOIN usuarios_at ON calificaciones_at.estudiante_ac=usuarios_at.id_us INNER JOIN grupos_at ON usuarios_at.grupo_us=grupos_at.id_gr WHERE usuarios_at.t_usuario_us='Estudiante' AND grupos_at.id_gr=$grupo_ho;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }      

    function buscar($id_ac){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT actividades_at.id_ac, actividades_at.nombre_ac, actividades_at.descripcion_ac, actividades_at.f_asignacion_ac, actividades_at.f_entrega_ac, actividades_at.asignatura_ac,asignaturas_at.descripcion_as FROM actividades_at, asignaturas_at WHERE id_ac=$id_ac AND actividades_at.asignatura_ac=asignaturas_at.id_as;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }    
        
    function actualizar($id_ac){
        include('conexion.php');
        print_r($_POST);
        $bd ->query("UPDATE actividades_at SET nombre_ac='$this->nombre_ac',descripcion_ac='$this->descripcion_ac',f_asignacion_ac='$this->f_asignacion_ac',f_entrega_ac='$this->f_entrega_ac',asignatura_ac=$this->asignatura_ac WHERE id_ac=$id_ac"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>