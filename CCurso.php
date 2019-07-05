<?php

session_start();
require_once 'ModCurso.php';

$key = new ModCurso();

if (isset($_GET["action"])) {
    $accion = $_GET["action"];

    // Falta validar cuando el DNI tiene mas de 8 digitos
    // 1 -> admin, 2 -> profesor, 3 -> alumno
    /*if($accion == "docente"){
      header("location: ../aulavirtual/public/ReportDinamic/Api.ApiCurso@Validaracceso?id=1&dni=40404040&cargo=2");
    }*/
    if($accion == "docente")
      header("location: ../aulavirtual/public/ReportDinamic/Api.ApiCurso@Validaracceso?id=1&dni=40404045&cargo=2");

    if($accion == "alumno"){
      header("location: ../aulavirtual/public/ReportDinamic/Api.ApiCurso@Validaracceso?id=1&dni=70568567&cargo=3");
    }
    if($accion == "alumno2"){
      header("location: ../aulavirtual/public/ReportDinamic/Api.ApiCurso@Validaracceso?id=1&dni=70596845&cargo=3");
    }

    if($accion == "key"){

        $lista['key'] = $key->retornarKey();
        echo json_encode($lista);
    }
}

// Registra datos del Cliente
if(@$_GET["key"] == $key->retornarKey() && is_numeric(@$_GET["dni"]))
{
  // Falta validar que en caso no tenga el DNI exista datos a registrar del alumno
    $lista = array(
              'paterno' => 'Perico',
              'materno' => 'Palotes',
              'nombre' => 'prueba',
              'sexo' => 'M'
           );
    echo json_encode($lista);
}
// --

// Envia datos de cursos

// --
