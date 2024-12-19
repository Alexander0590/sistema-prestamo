<?php
include("../conexion/conexion.php");

$codigo = $_POST['tcod'];
$dni = $_POST['tcliente'];
$tipo = $_POST['ttip'];
$cantidad_prestar = $_POST['tcan'];
$interes = $_POST['tint'];
$cuotas = $_POST['tcuo'];
$pago_mensual = $_POST['tmen'];
$color = $_POST['tcolor'];
$estado = "En Curso";
date_default_timezone_set('America/Lima');
$fecha = date('Y-m-d');
$consulta = "INSERT INTO prestamos (codigo, dni, tipo, cantidad_prestar, interes, cuotas, pago_mensual, color, estado, fecha_registro) 
             VALUES ($codigo, '$dni', '$tipo', $cantidad_prestar, $interes, $cuotas, $pago_mensual, '$color', '$estado', '$fecha')";

mysqli_query($cnn, $consulta); 
echo "Se registro correctamente...";
echo '<meta http-equiv="refresh" content="1;url=../principal.php">';
?>
