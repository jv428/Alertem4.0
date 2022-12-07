<link rel="stylesheet" href="../Vistas/Estilos/asignaturas.css" />

<?php
    require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
    include_once("/xampp/htdocs/Alertem4.0/Modelo/modelo_horario.php");

  if(isset($_GET["grupo_ho"])){
      $grupo_ho = $_GET["grupo_ho"];
      $horario = new horario(null,null,null,null,null);
      $horario1 = json_decode($horario->listarTablaAsignatura($grupo_ho));
  }
?>

<main>
        <div class="asignaturas" >
        <?php
    foreach ($horario1 as $dato) {
    ?>
            <div class="gal">
                  <a href="#"><img src="../Recursos/asignaturas/matematicas.jpg" width="300" height="190" alt=""></a>
                  <div class="asig-name">
                    <h4 >
                    <?php echo $dato->descripcion_as; ?>
                    </h4>
                    </div>
            </div>
            <?php
    }
    ?>
        </div>    
    </main>