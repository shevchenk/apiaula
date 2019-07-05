<?php require 'global.php';

$val_dni = $_POST['dni']; //Variable enviado del Servidor

if($val_dni == '40203145')
  $arr_alum = array('nom' => 'Elena', 'pat' => 'Camonez', 'mat' => 'Belen');
else
  $arr_alum = array('nom' => 'Maria Angelica', 'pat' => 'Aguilar', 'mat' => 'Ore');

$data = array(
    'key' => array(
          array(
          	'id' => ID,
          	'token' => TOKEN
          )
		 ),
     'docente' => array(
    			array(
              'docente_dni' => $val_dni, //12341234
              'docente_paterno' => $arr_alum['pat'],
              'docente_materno' => $arr_alum['mat'],
              'docente_nombre' => $arr_alum['nom'],
    			)
 		 ),
    'gestor' => array(
          array(
            'curso' => 'Administración de Redes I',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 4,
            'programacion_unica_externo_id' => 4,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'programacion_unica_estado' => 1
          ),
          array(
            'curso' => 'Administración de Redes II',
            'carrera' => 'Contabilidad y Finanzas',
            'ciclo' => 'I',
            'semestre' => '2017 - I',
            'curso_externo_id' => 5,
            'programacion_unica_externo_id' => 5,
            'fecha_inicio' => '2017-10-20 06:07:45',
            'fecha_final' => '2017-10-31 15:00:12',
            'programacion_unica_estado' => 1
          )
    )
);

echo json_encode($data);
?>
