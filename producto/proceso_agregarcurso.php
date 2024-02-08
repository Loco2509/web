<?php
include '../bd/conexion.php';

$curso = $_POST['Curso'];
$horas = $_POST['Horas'];
$sede = $_POST['Sedes'];
$horario = $_POST['Horario'];
$Aula = $_POST['Aula'];
$fecha = $_POST['Inicio'];


$consulta = 'INSERT INTO matricula (Curso,Horas,Sedes,Horario,Aula,Inicio) VALUES ("'.$curso.'","'.$horas.'","'.$sede.'","'.$horario.'","'.$Aula.'","'.$fecha.'")';
mysqli_query($conexion, $consulta);
header('Location: ../PerfilUsuario.php');
?>