<?php require 'global.php';

$data = array(
    'key' => array(
          array(
          	'id' => ID,
          	'token' => TOKEN
          )
		 ),
     'curso' => array(
    			array(
              'curso' => 'Comunicación I',
              'curso_externo_id' => 1,
    			),
          array(
              'curso' => 'Matematica Basica',
              'curso_externo_id' => 2,
    			),
          array(
              'curso' => 'Ofimatica Empresarial I',
              'curso_externo_id' => 3,
    			),
          array(
              'curso' => 'Introducción a la Contabilidad',
              'curso_externo_id' => 4,
    			),
          array(
              'curso' => 'Filosofía',
              'curso_externo_id' => 5,
    			),
          array(
              'curso' => 'Metodología del trabajo Universitario',
              'curso_externo_id' => 6,
    			)
      )
  );

echo json_encode(utf8_encode($data));
?>
