<?php
include("../conexion/conexion.php");
$datos=$_POST['tdatos'];
$usuario=$_POST['tusu'];
$clave=$_POST['tpass'];
$rol=$_POST['trol'];


$opcion=$_POST['topcion'];
if ($opcion==1){
    $consulta="INSERT INTO usuarios
    VALUES('$datos','$usuario','$clave',$rol)";
  
}
if ($opcion==2){
    $consulta="UPDATE usuarios SET
    apellidos='$ape',nombres='$nom',direccion='$dir',referencia='$ref'
    WHERE dni='$dni' ";
}

mysqli_query($cnn,$consulta)or die("Error:consulta..!");
echo "Registrado correctamente";
echo'<meta http-equiv="refresh" content="1;url=../principal.php">';
?>