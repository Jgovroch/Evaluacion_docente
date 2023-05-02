<?php

    $host = "localhost";
    $User = "malkrootiel";
    $pass = "";
    $db = "usuarios";
    $conexion = mysqli_connect($host, $User , $pass, $db);

    if (!$con) {
     echo "Conexion fallida";
    }