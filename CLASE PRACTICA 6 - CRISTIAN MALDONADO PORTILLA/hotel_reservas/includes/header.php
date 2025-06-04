<?php
// includes/header.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ROYAL HOTEL GRUPO 2 LO MEJOR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CSS -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
      rel="stylesheet"
    >   
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="/EJERCICIOS-HTML/CLASE%20PRACTICA%206%20-%20CRISTIAN%20MALDONADO%20PORTILLA/hotel_reservas/assets/css/estilo.css">
</head>
<body>
    <!-- Navbar con logo -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Aquí va el logo -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <!-- Ruta relativa al logo -->
                <img 
                  src="/EJERCICIOS-HTML/CLASE%20PRACTICA%206%20-%20CRISTIAN%20MALDONADO%20PORTILLA/hotel_reservas/assets/css/img/hotel-logo-silhouette-hotel-icon-vector.jpg"
                  alt="Logo Hotel" 
                  width="40" 
                  height="40" 
                  class="me-2"
                >
                <span>ROYAL HOTEL</span>
            </a>
            <button 
              class="navbar-toggler" 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navbarMenu"
              aria-controls="navbarMenu" 
              aria-expanded="false" 
              aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrar.php">Registrarse</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4">
