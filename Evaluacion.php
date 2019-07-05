<?php require 'global.php';

$val_dni = $_POST['dni']; //Variable enviado del Servidor

if($val_dni == '70568567')
  $arr_alum = array('nom' => 'Raul', 'pat' => 'Moreno', 'mat' => 'Mendoza');
else if($val_dni == '70596845')
  $arr_alum = array('nom' => 'Fredy', 'pat' => 'Moreno', 'Chavez' => 'Sipriano');
else
  $arr_alum = array('nom' => 'alum', 'pat' => '33', 'Sipriano' => '333');

if($val_dni == '70568567')
{
  $data = array(
    'key' => array(
          array(
            'id' => ID,
            'token' => TOKEN
          )
     ),
     'alumno' => array(
          array(
              'alumno_dni' => $val_dni, //12341234
              'alumno_paterno' => $arr_alum['pat'],
              'alumno_materno' => $arr_alum['mat'],
              'alumno_nombre' => $arr_alum['nom'],
          )
     ),
    'programacion' => array(
          array(
            'curso' => 'Comunicación I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 1,
            'programacion_unica_externo_id' => 1,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404040',
            'docente_paterno' => 'Maria Angelica',
            'docente_materno' => 'Aguilar',
            'docente_nombre' => 'Orue',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 16,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Matematica Basica',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 2,
            'programacion_unica_externo_id' => 2,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404041',
            'docente_paterno' => 'Luis German',
            'docente_materno' => 'Jauregui',
            'docente_nombre' => 'del Aguila',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 18,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Ofimatica Empresarial I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 3,
            'programacion_unica_externo_id' => 3,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404042',
            'docente_paterno' => 'Fernando',
            'docente_materno' => 'Loyola',
            'docente_nombre' => 'Fernandez',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 20,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Introducción a la Contabilidad',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 4,
            'programacion_unica_externo_id' => 4,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404043',
            'docente_paterno' => 'Lidia',
            'docente_materno' => 'Madera',
            'docente_nombre' => 'Jauregui',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 22,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Filosofía',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 5,
            'programacion_unica_externo_id' => 5,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404044',
            'docente_paterno' => 'Franklin',
            'docente_materno' => 'Valdiviezo',
            'docente_nombre' => 'Cornetero',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 24,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Metodología del trabajo Universitario',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 6,
            'programacion_unica_externo_id' => 6,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404045',
            'docente_paterno' => 'Hayde',
            'docente_materno' => 'Levano',
            'docente_nombre' => 'Ochoa',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 26,
            'programacion_estado' => 1
          ),
      )
    );
}
else if($val_dni == '70596845')
{
  $data = array(
    'key' => array(
          array(
            'id' => ID,
            'token' => TOKEN
          )
     ),
     'alumno' => array(
          array(
              'alumno_dni' => $val_dni, //12341234
              'alumno_paterno' => $arr_alum['pat'],
              'alumno_materno' => $arr_alum['mat'],
              'alumno_nombre' => $arr_alum['nom'],
          )
     ),
    'programacion' => array(
          array(
            'curso' => 'Comunicación I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 1,
            'programacion_unica_externo_id' => 1,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404040',
            'docente_paterno' => 'Maria Angelica',
            'docente_materno' => 'Aguilar',
            'docente_nombre' => 'Orue',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 17,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Matematica Basica',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 2,
            'programacion_unica_externo_id' => 2,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404041',
            'docente_paterno' => 'Luis German',
            'docente_materno' => 'Jauregui',
            'docente_nombre' => 'del Aguila',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 19,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Ofimatica Empresarial I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 3,
            'programacion_unica_externo_id' => 3,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404042',
            'docente_paterno' => 'Fernando',
            'docente_materno' => 'Loyola',
            'docente_nombre' => 'Fernandez',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 21,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Introducción a la Contabilidad',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 4,
            'programacion_unica_externo_id' => 4,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404043',
            'docente_paterno' => 'Lidia',
            'docente_materno' => 'Madera',
            'docente_nombre' => 'Jauregui',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 23,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Filosofía',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 5,
            'programacion_unica_externo_id' => 5,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404044',
            'docente_paterno' => 'Franklin',
            'docente_materno' => 'Valdiviezo',
            'docente_nombre' => 'Cornetero',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 25,
            'programacion_estado' => 1
          ),
          array(
            'curso' => 'Metodología del trabajo Universitario',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 6,
            'programacion_unica_externo_id' => 6,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'docente_dni' => '40404045',
            'docente_paterno' => 'Hayde',
            'docente_materno' => 'Levano',
            'docente_nombre' => 'Ochoa',
            'programacion_unica_estado' => 1,
            'programacion_externo_id' => 27,
            'programacion_estado' => 1
          ),
      )
    );
}

echo json_encode($data);
?>
