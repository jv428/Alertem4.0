
<?php


class usuario{

    private $documento_us ;
    private $nombre_us   ;
    private $p_apellido_us ;
    private $s_apellido_us ;
    private $telefono_us ;
    private $direccion_us ;
    private $correo_us ;
    private $clave_us ;
    private $t_usuario_us ;
    private $grupo_us ;

    function __construct($documento_us,$nombre_us,$p_apellido_us,$s_apellido_us,$telefono_us,$direccion_us,$correo_us,$clave_us,$t_usuario_us,$grupo_us)
    {


        $this->documento_us = $documento_us;
        $this->nombre_us =  $nombre_us;
        $this->p_apellido_us =  $p_apellido_us;
        $this->s_apellido_us =  $s_apellido_us;
        $this->telefono_us =  $telefono_us;
        $this->direccion_us =  $direccion_us;
        $this->correo_us =  $correo_us;
        $this->clave_us =  $clave_us;
        $this->t_usuario_us =  $t_usuario_us;
        $this->grupo_us =  $grupo_us;

        
    }

    function guardar(){
        include('conexion.php');
        $id=null;
        $bd ->query("INSERT INTO usuarios_at(documento_us,nombre_us,p_apellido_us,s_apellido_us,telefono_us,direccion_us,correo_us,clave_us,t_usuario_us,grupo_us) VALUES 
            ('$this->documento_us','$this->nombre_us','$this->p_apellido_us','$this->s_apellido_us','$this->telefono_us','$this->direccion_us','$this->correo_us','$this->clave_us','$this->t_usuario_us',$this->grupo_us)"); 
        $bd=null;
        echo json_encode("<script>alert('Guardado con éxito')<script>");  
    }
    
    function listarTabla(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT usuarios_at.id_us, usuarios_at.documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, usuarios_at.telefono_us, usuarios_at.direccion_us, usuarios_at.correo_us, usuarios_at.clave_us ,usuarios_at.t_usuario_us, grupos_at.descripcion_gr FROM usuarios_at,grupos_at WHERE usuarios_at.grupo_us = grupos_at.id_gr;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }  
    function listarTablaAsistencia(){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT usuarios_at.id_us, usuarios_at.documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, usuarios_at.telefono_us, usuarios_at.direccion_us, usuarios_at.correo_us, usuarios_at.clave_us ,usuarios_at.t_usuario_us, grupos_at.descripcion_gr FROM usuarios_at,grupos_at WHERE usuarios_at.t_usuario_us='Estudiante' AND usuarios_at.grupo_us = grupos_at.id_gr;")->fetchAll(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }        

    function buscar($id_us){
        include('conexion.php');
        $id=null;
        $ver_usuario = $bd ->query("SELECT usuarios_at.id_us AS id_us, usuarios_at.documento_us AS documento_us,usuarios_at.nombre_us, usuarios_at.p_apellido_us, usuarios_at.s_apellido_us, usuarios_at.telefono_us, usuarios_at.direccion_us, usuarios_at.correo_us, usuarios_at.clave_us ,usuarios_at.t_usuario_us,usuarios_at.grupo_us, grupos_at.descripcion_gr AS descripcion_gr FROM usuarios_at,grupos_at WHERE id_us=$id_us AND usuarios_at.grupo_us = grupos_at.id_gr;")->fetch(PDO::FETCH_OBJ);
        return json_encode($ver_usuario,JSON_UNESCAPED_UNICODE);
        $bd=null;
    }    
        
    function actualizar($id_us){
        include('conexion.php');
     
        $bd ->query("UPDATE usuarios_at SET documento_us='$this->documento_us',nombre_us='$this->nombre_us',p_apellido_us='$this->p_apellido_us',s_apellido_us='$this->s_apellido_us',telefono_us='$this->telefono_us',direccion_us='$this->direccion_us',correo_us='$this->correo_us',clave_us='$this->clave_us',t_usuario_us='$this->t_usuario_us',grupo_us=$this->grupo_us WHERE id_us=$id_us"); 
        $bd=null;
        echo json_encode("<script>alert('actualizacion completa')<script>");  
    }








}






?>