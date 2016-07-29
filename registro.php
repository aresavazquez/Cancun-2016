<?php 
$message = '';

/* A message le agregamos 
* lo que viene en la variable certification 
* y un espacio para que no salga todo encimado
*/
$message .= $_POST['nombre'] . ' '; 
$message .= $_POST['correo'] . ' '; 
$message .= $_POST['telefono'] . ' '; 
$message .= $_POST['zona'] . ' '; 
$message .= $_POST['comentario'] . ' ';

/*
Así con todas las variables
.
.
.
*/
mail("convencionsoc@gmail.com", 'Registro Convención Cancún', $message);

// mail("avazquez@socasesores.com", $_MESSAGE["subject"], $_MESSAGE["message"]); // sirve para mandar los datos a un correo
// mail($_POST["ares@digitaldealers.mx"], $_POST["subject"], $_POST["message"]); // manda un correo al mail registrado
// var a = "message"; // var no se usa en php
?>