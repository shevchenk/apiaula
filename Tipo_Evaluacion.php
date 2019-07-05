<?php require 'global.php';

$data = array(
    'key' => array(
          array(
          	'id' => ID,
          	'token' => TOKEN
          )
		 ),
     'tipo' => array(
    			array(
              'tipo_evaluacion' => 'P.C.1',
              'tipo_evaluacion_externo_id' => 1,
    			),
          array(
              'tipo_evaluacion' => 'Examen Parcial',
              'tipo_evaluacion_externo_id' => 2,
    			),
          array(
              'tipo_evaluacion' => 'Examen Final',
              'tipo_evaluacion_externo_id' => 3,
    			)
      )
  );

echo json_encode($data);
?>
