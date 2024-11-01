<?php
function conexion() : mysqli {
    $db = mysqli_connect("localhost", "root", "", "bienesraices");

    if ($db) {
        echo "Conectado";
    } else {
        echo "No conectado: " . mysqli_connect_error();
    }

    return $db;
    }
?>