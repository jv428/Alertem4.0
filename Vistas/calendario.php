<link rel="stylesheet" href="../Vistas/Estilos/calendario.css" />

<?php
require_once("/xampp/htdocs/Alertem4.0/Vistas/Comunes/nav.php");
?>

<div class="container">

    <h1 class="title">Calendario Académico</h1>

    <div class="calendar">
        <div class="calendar__info">
            <div class="calendar__prev" id="prev-month">&#9664;</div>
            <div class="calendar__month" id="month"></div>
            <div class="calendar__year" id="year"></div>
            <div class="calendar__next" id="next-month">&#9654;</div>
        </div>


        <div class="calendar__week">
            <div class="calendar__day calendar__item">Lunes</div>
            <div class="calendar__day calendar__item">Martes</div>
            <div class="calendar__day calendar__item">Miércoles</div>
            <div class="calendar__day calendar__item">Jueves</div>
            <div class="calendar__day calendar__item">Viernes</div>
            <div class="calendar__day calendar__item">Sábado</div>
            <div class="calendar__day calendar__item">Domingo</div>
        </div>

        <div class="calendar__date" id=dates></div>

    </div>

</div>

<script src="../JavaScript/calendario.js"></script>