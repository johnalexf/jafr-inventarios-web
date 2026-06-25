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

    <main class="flex-grow-1 overflow-y-auto d-flex flex-column">

        <!-- CONTENEDOR PRINCIPAL - centra el contenido y pone márgenes laterales.  -->
        <div class="container-lg d-flex justify-content-center py-4 my-auto px-0">
            
            <!-- Fila Bootstrap que contiene las dos tarjetas principales (Perfil y Menu)-->
            <div class="row w-100 justify-content-center gy-4 gx-md-5" style="max-width: 850px;">
                
                <!--Espacio para la Tarjeta de perfil -->
                <div class="col-12 col-md-6" style="max-width: 400px;">

                    <!-- Tarjeta de perfil -->
                    <div class="bg-white rounded-4 shadow-sm px-4 px-sm-5 py-4 d-flex flex-column">
                        
                        <h2 class="text-center text-primary fw-bold mb-4 fs-3">Perfil</h2>

                        <!-- Informacion del usuario -->
                        <div class="mb-4 fs-6 text-dark">
                            <div class="row mb-2 mb-lg-3">
                                <div class="col-lg-4 text-dark">Empresa:</div>
                                <div class="col-lg-8 fw-semibold text-secondary">Nombre de la empresa</div>
                            </div>
                            <div class="row mb-2 mb-lg-3">
                                <div class="col-lg-4 text-dark">Nombre:</div>
                                <div class="col-lg-8 fw-semibold text-secondary">John Forero</div>
                            </div>
                            <div class="row mb-2 mb-lg-3">
                                <div class="col-lg-4 text-dark">Alias:</div>
                                <div class="col-lg-8 fw-semibold text-secondary">johnalexfr</div>
                            </div>
                            <div class="row mb-2 mb-lg-3">
                                <div class="col-lg-4 text-dark">Teléfono:</div>
                                <div class="col-lg-8 fw-semibold text-secondary">3105642132</div>
                            </div>
                            <div class="row mb-2 mb-lg-3">
                                <div class="col-lg-4 text-dark">Correo:</div>
                                <div class="col-lg-8 fw-semibold text-secondary text-break">johnalexfr@gmail.com</div>
                            </div>
                        </div>

                        <!-- contenedor del codigo de acceso -->
                        <div class="mb-4 text-center">
                            <p class="fw-bold mb-2 text-dark">Código de acceso:</p>
                            <div class="d-flex align-items-center justify-content-center gap-1">
                                <div class="input-group border border-dark rounded" style="max-width: 250px;">
                                    <input type="text" class="form-control border-0 text-center fw-semibold text-secondary" value="XASDfsaE#324323cxSD" readonly>
                                    <button class="btn btn-white border-0 text-primary d-flex align-items-center m-0 p-0 pe-1" type="button" title="Copiar código">
                                        <iconify-icon icon="pixel:copy-solid" class="fs-4"></iconify-icon>
                                    </button>
                                </div>
                                <iconify-icon icon="fluent:chat-help-24-filled" class="fs-2 text-primary" style="cursor: pointer;"></iconify-icon>
                            </div>
                        </div>

                        <!-- Acciones a ejecutar sobre el perfil del usuario -->
                        <div class="d-flex justify-content-between pt-3">
                            <a href="../index.php" class="text-primary fw-bold text-decoration-none">Cerrar Sesión</a>
                            <a href="#" class="text-primary fw-bold text-decoration-none">Editar Usuario</a>
                        </div>

                    </div>
                </div>

                <!-- Espacio para la tarjeta del menú -->
                <div class="col-12 col-md-6" style="max-width: 400px;">

                    <!-- Tarjeta del menú -->
                    <div class="bg-white rounded-4 shadow-sm py-4 h-100">
                        
                        <h2 class="text-center text-primary fw-bold mb-4 fs-3">Menú</h2>

                        <div class="d-flex flex-column gap-4 mx-auto" style="max-width: 154px;">
                            
                            <a href="inicio.html" class="d-flex align-items-center text-secondary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="mdi:home" class="fs-3 me-3"></iconify-icon> Inicio
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="mdi:users" class="fs-3 me-3"></iconify-icon> Usuarios
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="mdi:bread" class="fs-3 me-3"></iconify-icon> Productos
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="clarity:building-line" class="fs-3 me-3"></iconify-icon> Proveedores
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="bxs:store" class="fs-3 me-3"></iconify-icon> Clientes
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="fa7-solid:bag-shopping" class="fs-3 me-3"></iconify-icon> Compras
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="bi:cash-coin" class="fs-3 me-3"></iconify-icon> Ventas
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="mingcute:cube-fill" class="fs-3 me-3"></iconify-icon> Inventario
                            </a>
                            
                            <a href="#" class="d-flex align-items-center text-primary text-decoration-none fw-bold fs-5">
                                <iconify-icon icon="mdi:file-chart" class="fs-3 me-3"></iconify-icon> Reporte
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </main>
    

    <footer class="p-1">
        <div class="container-fluid bg-white border-top py-2 text-center text-muted rounded-1">
            <small>&copy; 2026 JAFR - Administra tu negocio. <span class="d-block d-sm-inline">Prototipo de interfaz.</span></small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="../vendor/iconify/js/iconify-icon.min.js"></script>
</body>
</html>
