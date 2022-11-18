<?php
    $contrasena = "";
    $usuario ="root";
    $nombre_bd = "alertempbd";
    
    try {
        $bd = new PDO (
            'mysql:host=localhost;
            dbname='.$nombre_bd,
            $usuario,
            $contrasena    
        );
        $bd -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $bd -> exec('SET CHARACTER SET UTF8');
    } catch (Exception $e) {
        echo "Problema con la conexion: ".$e->getMessage();
    }
?>