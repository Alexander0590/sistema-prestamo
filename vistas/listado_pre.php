<?php
include('../conexion/conexion.php');
if(isset($_POST['bfil'])){
    $zona=$_POST['tzona'];
    $consulta="SELECT p.*, c.nombres, c.apellidos
    FROM prestamos p
    INNER JOIN clientes c ON p.dni = c.dni
    WHERE p.estado = 'en curso' and p.color=$zona;";
}
$consulta = "SELECT p.*, c.nombres, c.apellidos
FROM prestamos p
INNER JOIN clientes c ON p.dni = c.dni
WHERE p.estado = 'en curso'" ;

$registros = mysqli_query($cnn, $consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <div id="filtro_pre">
     <form action="" method="post">
      <select name="tzona" id="tzona">
        <option value="0">-------------------------------</option>
        <option value="1" style="background-color: red;">ZONA 1</option>
        <option value="2" style="background-color: green;"> ZONA 2</option>
        <option value="3" style="background-color: aqua;"> ZONA 3</option>
      </select>
      <input type="text" placeholder="INGRESA DNI" name="ttdni">
      <input type="text" placeholder="INGRESE APELLIDO" name="ttapelli">
      <input type="submit" value="Filtrar" name="bfil">
      </form>
    </div>
<div class="container a-x" >
    <div class="row" id="prestam">
        <?php while($fila = mysqli_fetch_array($registros)) { 
            $colorCard = '';
            if ($fila['color'] == '1') {
                $colorCard = 'card-rojo'; 
            } elseif ($fila['color'] == '2') {
                $colorCard = 'card-verde'; 
            } elseif ($fila['color'] == '3') {
                $colorCard = 'card-celeste'; 
            }
        ?>
            <div class="col-md-4 mb-4">
                <div class=" <?php echo $colorCard; ?>" id="prestam" data-codigo="<?php echo $fila['codigo']; ?>">
                    <div class="card-header" >
                        <h5 class="card-title" id="color">Codigo Prestamo: <?php echo $fila['codigo']; ?></h5>
                    </div>
                    <div class="card-body" id="card">
                        <p><strong>Apellido: </strong><?php echo $fila['apellidos']; ?></p>
                        <p><strong>Pago mensual: </strong>S/. <?php echo number_format($fila['pago_mensual'], 2); ?></p>
                    </div>
                    <div class="card-footer" >
                     <small class="text-white" >Última actualización: <?php date_default_timezone_set('America/Lima'); echo date('d/m/Y'); ?></small>
                  </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
x
</html>
