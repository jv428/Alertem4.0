
<?php


class asistencia{

    private $asistencia_as ;
    private $fecha_as   ;
    private $hora_as ;
    private $estudiantes_as ;

    function __construct($asistencia_as,$fecha_as,$hora_as,$estudiantes_as)
    {


        $this->asistencia_as = $asistencia_as;
        $this->fecha_as =  $fecha_as;
        $this->hora_as =  $hora_as;
        $this->estudiantes_as =  $estudiantes_as;


        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO asistencias_at(asistencia_as,fecha_as,hora_as,estudiantes_as) VALUES 
            ('$this->asistencia_as','$this->fecha_as','$this->hora_as','$this->estudiantes_as')"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT asistencias_at.id_asi, asistencias_at.asistencia_as,asistencias_at.fecha_as, asistencias_at.hora_as, usuarios_at.t_usuario_us FROM asistencias_at,usuarios_at,tipos_usuario_at WHERE asistencias_at.estudiante_as = usuarios_at.id_us= usuarios_at.t_usuario_us=tipos_usuario_at.id_tu;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }        

    function buscar($id_us){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT usuarios_at.id_us AS id_us, usuarios_at.documento_us AS documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, usuarios_at.telefono_us, usuarios_at.direccion_us, usuarios_at.correo_us, usuarios_at.clave_us ,usuarios_at.t_usuario_us,usuarios_at.grupo_us,tipos_usuario_at.descripcion_tu AS descripcion_tu, grupos_at.descripcion_gr AS descripcion_gr FROM usuarios_at,tipos_usuario_at,grupos_at WHERE id_us=$id_us AND usuarios_at.t_usuario_us = tipos_usuario_at.id_tu AND usuarios_at.grupo_us = grupos_at.id_gr;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }    
        
    function actualizar($id_us){
        include('conexion.php');
     
        $bd ->query("UPDATE usuarios_at SET documento_us='$this->documento_us',nombre_us='$this->nombre_us',p_apellido_us='$this->p_apellido_us',s_apellido_us='$this->s_apellido_us',telefono_us='$this->telefono_us',direccion_us='$this->direccion_us',correo_us='$this->correo_us',clave_us='$this->clave_us',t_usuario_us=$this->t_usuario_us,grupo_us=$this->grupo_us WHERE id_us=$id_us"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>