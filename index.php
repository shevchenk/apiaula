<?php
//var_dump($_SERVER);
echo getenv('REMOTE_ADDR');
echo '<br/>';
echo $_SERVER['REMOTE_ADDR'];
echo '<br/>';
//echo $_SERVER['HTTP_REFERER'];
 ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <body>
      <div class="col-md-12">
        <br/><br/>
        Enlace para Aula virtual
        <form action="CCurso.php" method="POST">
            <a href="CCurso.php?action=docente" target="_blank">Docente</a><br>
            Alumnos
            <a href="CCurso.php?action=alumno" target="_blank">Alumno 1</a>
            <a href="CCurso.php?action=alumno2" target="_blank">Alumno 2</a>
        </form>
      </div>
    </body>
</html>
