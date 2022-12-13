<?php
include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_grupo.php");

if (isset($_GET["id_gr"])) {


    $id_gr = $_GET["id_gr"];
    $grupo = new grupo(null);
    $grupo1 = json_decode($grupo->buscar($id_gr));


    $operacion_gr = "actualizar";
    $boton = 'btnactualizar';
} else {
    $id_gr = null;
    $grupo1 = new stdClass();
    $grupo1->descripcion_gr = "";

    $operacion_gr = "guardar";
    $boton = 'btnguardar';
}
// print_r($boton)
?>
<link rel="stylesheet" href="../Vistas/Estilos/crear.css">

<h1>Crear Grupo</h1>

<div class="sub_btn">
    <button class="btn_vovler"><a href="../Vistas/mostrar_grupos.php"><i class="fa-solid fa-arrow-left-long"></i> Volver inicio</a></button>
</div>

<div class="formulario-grupo">
    <form id="frmPrincipal">
        <input type="text" id="id_gr" value="<?php echo ($grupo1->id_gr); ?>" hidden>

        <div class="form-group">
            <label for="alumno">Grupos</label><br>
            <input type="text" class="form-control" name="descripcion_gr" required value="<?php echo ($grupo1->descripcion_gr); ?>" placeholder="Grupo">
        </div>

        <div class="sub_btn2">
            <button type="submit" class="btn_btn" id="<?php echo ($boton) ?>"><a href=""><i class="fa-solid fa-user-check"></i>
                    Crear usuario</a></button>
        </div>


        <input type="text" name="operacion_gr" id="operacion_gr" value="<?php echo ($operacion_gr); ?>" hidden>
    </form>
</div>
<div id="respuesta">

</div>
<script src="../Controladores/controlador_grupos.js"></script>