<?php require 'global.php';

$val_programacion_unica_id = $_POST['programacion_unica_id']; //Variable enviado del Servidor

$data = array(
    'key' => array(
          array(
          	'id' => ID,
          	'token' => TOKEN
          )
		 ),
     'alumno' => array(
      			array(
                'alumno_dni' => '70568567', //12341234
                'alumno_paterno' => 'Mendoza',
                'alumno_materno' => 'Moreno',
                'alumno_nombre' => 'Raul',
                'programacion_unica_id' => $val_programacion_unica_id,
                'programacion_externo_id' => 6,
                'programacion_estado' => 1,
      			),
           array(
                'alumno_dni' => '70596845', //12341234
                'alumno_paterno' => 'Chavez',
                'alumno_materno' => 'Sipriano',
                'alumno_nombre' => 'Fredy',
                'programacion_unica_id' => $val_programacion_unica_id,
                'programacion_externo_id' => 6,
                'programacion_estado' => 1,
      			)
      )
  );

echo json_encode($data);
?>
