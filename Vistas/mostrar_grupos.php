<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/mostrarGrupos.css">

<?php

require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/footer.php");

include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_grupo.php");

$grupo = new grupo(null);
$grupos = json_decode($grupo->listarTabla());
?>

<div class="container">
    <button class="btn_btn_editar"><a href="../Vistas/grupos.php">Agregar</a></button>

    <div class="card">
        <?php
    foreach ($grupos as $dato) {
    ?>
        <div class="content-card">
            <h1>
                <?php echo $dato->descripcion_gr; ?>
            </h1>
            <div class="container_btn">
                <div class="sub_btn">
                    <button class="btn_btn_editar">
                        <a href="">Ver Grupo</a>
                    </button>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>


<script src="../Controladores/controlador_grupos.js"></script>