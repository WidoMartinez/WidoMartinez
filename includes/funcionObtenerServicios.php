<?php

function obtenerservicios($nombreTabla)
{
  try {
    $nombreTabla = "servicios";
    //importar datos de acceso
    require "databasesconeccion.php";

    //consulta sql
    $consulta_sql = "SELECT * FROM $nombreTabla;";
    //realizar la consulta
    $consulta = mysqli_query($db, $consulta_sql);
    //acceder a resultados
    echo "<pre>";
    var_dump(mysqli_fetch_assoc($consulta));
    echo "</pre>";
  } catch (\Throwable $th) {
    var_dump($th);
  }
}

obtenerservicios();
