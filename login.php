<?php

include_once('db.php');

$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

require("index.html");

$conectar = conn();
$sql = "SELECT correo, contraseña FROM  registro";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);

?>