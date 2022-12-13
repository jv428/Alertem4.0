
<?php


class calificacion{

    private $calificacion_ca ;
    private $comentario_ca   ;
    private $actividad_ca ;
    private $estudiante_ac ;


    function __construct($calificacion_ca,$comentario_ca,$actividad_ca,$estudiante_ac)
    {


        $this->calificacion_ca = $calificacion_ca;
        $this->comentario_ca =  $comentario_ca;
        $this->actividad_ca =  $actividad_ca;
        $this->estudiante_ac =  $estudiante_ac;



        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO calificaciones_at(calificacion_ca,comentario_ca,actividad_ca,estudiante_ac) VALUES 
            ('$this->calificacion_ca','$this->comentario_ca',$this->actividad_ca,$this->estudiante_ac)"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla($grupo_ho){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT calificaciones_at.id_ca,calificaciones_at.calificacion_ca, calificaciones_at.actividad_ca,actividades_at.id_ac,actividades_at.nombre_ac,  calificaciones_at.comentario_ca, actividades_at.nombre_ac,usuarios_at.id_us,usuarios_at.documento_us,usuarios_at.nombre_us,usuarios_at.p_apellido_us,usuarios_at.s_apellido_us FROM calificaciones_at INNER JOIN actividades_at ON calificaciones_at.actividad_ca=actividades_at.id_ac INNER JOIN asignaturas_at ON actividades_at.asignatura_ac=asignaturas_at.id_as INNER JOIN usuarios_at ON calificaciones_at.estudiante_ac=usuarios_at.id_us INNER JOIN grupos_at ON usuarios_at.grupo_us=grupos_at.id_gr WHERE usuarios_at.t_usuario_us='Estudiante' AND grupos_at.id_gr=$grupo_ho;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }  
    
    function listarTablaEstudiante($grupo_ho){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT * FROM usuarios_at WHERE usuarios_at.grupo_us=$grupo_ho AND usuarios_at.t_usuario_us='Estudiante';")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }  

    function listarTablaEstudianteGrupo($id_ca){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT usuarios_at.id_us,usuarios_at.documento_us,usuarios_at.nombre_us,usuarios_at.p_apellido_us,usuarios_at.s_apellido_us,usuarios_at.telefono_us,usuarios_at.direccion_us,usuarios_at.correo_us,usuarios_at.clave_us,usuarios_at.t_usuario_us,usuarios_at.grupo_us  FROM usuarios_at WHERE usuarios_at.id_us=$id_ca AND usuarios_at.t_usuario_us='Estudiante';")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }  

    function buscar($id_ac){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT calificaciones_at.actividad_ca, calificaciones_at.id_ca,calificaciones_at.calificacion_ca,usuarios_at.grupo_us, calificaciones_at.comentario_ca, actividades_at.nombre_ac,usuarios_at.documento_us,usuarios_at.nombre_us,usuarios_at.p_apellido_us,usuarios_at.s_apellido_us FROM calificaciones_at INNER JOIN actividades_at ON calificaciones_at.actividad_ca=actividades_at.id_ac INNER JOIN asignaturas_at ON actividades_at.asignatura_ac=asignaturas_at.id_as INNER JOIN usuarios_at ON calificaciones_at.estudiante_ac=usuarios_at.id_us INNER JOIN grupos_at ON usuarios_at.grupo_us=grupos_at.id_gr WHERE calificaciones_at.id_ca=$id_ac;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    } 
    function actividad($acti){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT actividades_at.id_ac,actividades_at.nombre_ac,actividades_at.descripcion_ac,actividades_at.f_asignacion_ac,actividades_at.f_entrega_ac,actividades_at.asignatura_ac  FROM actividades_at WHERE  actividades_at.asignatura_ac=$acti;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }   
    function actividad1($asigna){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT actividades_at.id_ac, actividades_at.nombre_ac,actividades_at.descripcion_ac,actividades_at.f_asignacion_ac,actividades_at.f_entrega_ac, actividades_at.asignatura_ac FROM actividades_at  WHERE  actividades_at.asignatura_ac=$asigna;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }      
        
    function actualizar($id_ca){
        include('conexion.php');
        print_r($_POST);
        $bd ->query("UPDATE calificaciones_at SET calificacion_ca='$this->calificacion_ca',comentario_ca='$this->comentario_ca',actividad_ca=$this->actividad_ca,estudiante_ac=$this->estudiante_ac WHERE id_ca=$id_ca"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>