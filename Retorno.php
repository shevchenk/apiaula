<?php require 'global.php';

 $programacion_unica = $_POST['programacion_unica']; //Variable enviado del Servidor
 $curso = $_POST['curso'];
 $programacion = $_POST['programacion'];

// Creación de un archivo JSON para dar respuesta al cliente
  $uploadFolder = 'txt/api';
  $nombre_archivo = "cliente.json";
  $file = $uploadFolder . '/' . $nombre_archivo;
  unlink($file);
  if($archivo = fopen($file, "a"))
  {
    fwrite($archivo, $curso);
    fclose($archivo);
  }
// --
?>
