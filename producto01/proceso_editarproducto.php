<?php
include '../bd/conexion.php';
$id = $_POST['idususario'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];

$consulta = 'UPDATE ususario SET usuario="'.$usuario.'", clave="'.$clave.'", correo="'.$correo.'" WHERE id='.$id;
mysqli_query($conexion, $consulta);
header('Location: ../portada.php');
?>