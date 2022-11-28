<?php
include_once('db.php');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

require("login.html");

$conectar = conn();
$sql= "INSERT INTO registro(nombres, apellidos, correo, contraseña) VALUES ('$nombres','$apellidos','$correo','$contraseña')";
$resul = mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);
?>