<?php session_start(); 
if(!isset($_SESSION['usuarios']['dni'])){
header("Location:../index.php");
exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de prestamos</title>
    <link rel="stylesheet" href="css/estilos_pre.css">
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="jquery/prestamos.js"></script>
    <link rel="shortcut icon" href="../img/prestamo.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/login.ico" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div id="menu">
    <div id="contenedor">
        <div id="usuario">
            
        </div>
        <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#paginas">Sistema de Préstamos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="#" id="usuarios">
            <i class="bi bi-person"></i> Usuarios
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" id="clientes">
            <i class="bi bi-people"></i> Clientes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="pedido">
          <i class="bi bi-wallet"></i> Pedidos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="prestamos">
          <i class="bi bi-cash-coin"></i> Prestamos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="li_pre">
          <i class="bi  bi-person"></i> Listado De Prestamos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-clock-history"></i> Historial
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="bi bi-file-earmark-bar-graph"></i> Reportes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="vistas/cerrar_sesion.php">
          <i class="bi bi-box-arrow-left fs-6 me-2"></i>Salir
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
        <div id="paginas">
         
         <img src="img/empresa.gif" alt="" class="xd">

        </div>
    </div>
    <script>
        const links = document.querySelectorAll('nav a');
        links.forEach(link => {
            link.addEventListener('click', function () {
                links.forEach(link => link.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
    <!-- Bootstrap y Scripts de JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeo3z7ZVUxL00T4Jr8RXl4ZSA2Yxxm1i5J5xsw/TOv6j6zLo" crossorigin="anonymous"></script>
</body>
</html>