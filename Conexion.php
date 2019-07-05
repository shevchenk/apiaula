<?php

function Conectar(){

$db= new mysqli("localhost", "root", "", "cliente_api") 
 or die("Error conectando a la base de datos");
return $db;
}
?>
