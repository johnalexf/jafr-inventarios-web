<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icono para pestañas en navegadores web-->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <title>INICIO - JAFR</title>

    <!-- Bootstrap CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Google Fonts -->
        <!-- Tipografías: Montserrat para títulos y Roboto para textos generales -->

        <!-- Optimiza la conexión con los servidores de Google Fonts antes de cargar las fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Carga las familias tipográficas Montserrat y Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Fin Google Fonts -->

    <!-- Estilos propios -->
    <link href="../assets/css/global.css" rel="stylesheet">

</head>
<body class="vh-100 d-flex flex-column">

    <header class="p-1">
        <nav class="navbar bg-white rounded-1 shadow-sm">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                
                <a class="navbar-brand m-0" href="inicio.php">
                    <img src="../assets/img/logo.png" alt="Logo" class="logo">
                </a>
                
                <h1 class="d-flex align-items-center text-primary pe-5 pe-md-0 mb-0 fw-bold fs-3">
                    <span class=" d-none d-lg-block ">
                        Nombre de la empresa /
                    </span>
                    <iconify-icon 
                        icon="mdi:home" 
                        class="px-1 fs-2" >
                    </iconify-icon>
                    <span>Inicio</span>    
                </h1>

                <div class="px-2 px-md-3 py-1 py-md-2 border rounded-4 bg-surface d-flex align-items-center ">

                    <iconify-icon 
                        icon="mdi:account-badge" 
                        class="fs-1 d-md-none">
                    </iconify-icon>

                    <p class="mb-0 fw-semibold fs-6 d-none d-md-block" >
                        Administrador
                    </p>
                </div>
                
            </div>
        </nav>
    </header>

    <main class="flex-grow-1 overflow-y-auto p-3 p-md-4">

    </main>
    

    <footer class="p-1">
        <div class="container-fluid bg-white border-top py-2 text-center text-muted rounded-1">
            <small>&copy; 2026 JAFR - Administra tu negocio. Prototipo de interfaz.</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="../vendor/iconify/js/iconify-icon.min.js"></script>
</body>
</html>
