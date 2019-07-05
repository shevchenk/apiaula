<?php require 'global.php';

$data = array(
    'key' => array(
          array(
          	'id' => ID,
          	'token' => TOKEN
          )
		 ),
    'gestor' => array(
          array(
            'curso' => 'Comunicacion I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 1,
            'docente_dni' => '40404040',
            'docente_paterno' => 'Maria Angelica',
            'docente_materno' => 'Aguilar',
            'docente_nombre' => 'Orue',
            'programacion_unica_estado' => 1,

            'programacion_unica_externo_id' => 1,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          ),
          array(
            'curso' => 'Matematica Basica',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 2,
            'docente_dni' => '40404041',
            'docente_paterno' => 'Luis German',
            'docente_materno' => 'Jauregui',
            'docente_nombre' => 'del Aguila',
            'programacion_unica_estado' => 1,
            'programacion_unica_externo_id' => 2,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          ),
          array(
            'curso' => 'Ofimatica Empresarial I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 3,
            'docente_dni' => '40404042',
            'docente_paterno' => 'Fernando',
            'docente_materno' => 'Loyola',
            'docente_nombre' => 'Fernandez',
            'programacion_unica_estado' => 1,
            'programacion_unica_externo_id' => 3,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          ),
          array(
            'curso' => 'Introduccion a la Contabilidad',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 4,
            'docente_dni' => '40404043',
            'docente_paterno' => 'Lidia',
            'docente_materno' => 'Madera',
            'docente_nombre' => 'Jauregui',
            'programacion_unica_estado' => 1,
            'programacion_unica_externo_id' => 4,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          ),
          array(
            'curso' => 'Filosofia',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 5,
            'docente_dni' => '40404044',
            'docente_paterno' => 'Franklin',
            'docente_materno' => 'Valdiviezo',
            'docente_nombre' => 'Cornetero',
            'programacion_unica_estado' => 1,
            'programacion_unica_externo_id' => 5,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          ),
          array(
            'curso' => 'Metodologia del trabajo Universitario',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 6,
            'docente_dni' => '40404045',
            'docente_paterno' => 'Hayde',
            'docente_materno' => 'Levano',
            'docente_nombre' => 'Ochoa',
            'programacion_unica_estado' => 1,
            'programacion_unica_externo_id' => 6,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12'
          )
    )
);

echo json_encode(utf8_encode($data));
?>
