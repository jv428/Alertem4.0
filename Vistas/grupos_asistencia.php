<link rel="stylesheet" href="http://localhost/Alertem4.0/Vistas/Estilos/mostrarGrupos.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<?php

require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");

include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_horario.php");

$horario = new horario(null,null,null,null,null);
$horario1 = json_decode($horario->listarTablagrupos());
?>

<div class="container">
    <a class="btn_btn_agregar" href="../Vistas/grupos.php"><ion-icon name="add-circle-outline"></ion-icon></a>

    <div class="card">
    <?php
    foreach ($horario1 as $dato) {
    ?>
        <div class="content-card">
            <h1>
            <?php echo $dato->descripcion_gr; ?>
            </h1>
            <div class="container_btn">
                <div class="sub_btn">
                    <button class="btn_btn_editar">
                        <a href="../Vistas/asignaturas.php?grupo_ho=<?php echo($dato->grupo_ho)?>">Ver Grupo</a>
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