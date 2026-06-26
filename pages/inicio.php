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
    <link rel="stylesheet" href="../assets/css/formularios.css">

</head>
<body class="vh-100 d-flex flex-column">

    <header class="p-1">
        <div class="navbar bg-white rounded-1 shadow-sm">
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

                <div class="px-3 py-2 border rounded-4 bg-surface d-flex align-items-center d-none d-md-block ">
                    <p class="mb-0 fw-semibold fs-6" >
                        Administrador
                    </p>
                </div>

                <!-- Icono de menu lateral para pantallas menores a lg -->
                 <!-- Por medio de offcanvas de boostrap podemos mostrar un menu lateral -->
                    <button
                        class="btn btn-primary rounded-4 d-flex d-md-none" type="button" title="Menu"
                        data-bs-toggle="offcanvas" data-bs-target="#menuLateral" aria-controls="menuLateral"
                    >
                        <iconify-icon 
                            icon="mdi:menu" 
                            class="fs-2 my-auto"
                            >
                        </iconify-icon>
                    </button>
                
            </div>
        </div>
    </header>

    <main class="flex-grow-1 overflow-y-auto d-flex flex-column">

        <!-- CONTENEDOR PRINCIPAL - centra el contenido y pone márgenes laterales.  -->
        <section class="container-lg d-flex justify-content-center py-4 my-auto px-0" aria-label="Panel de control">
            
            <!-- Fila Bootstrap que contiene las dos tarjetas principales (Perfil y Menu)-->
            <div class="row w-100 justify-content-center gy-4 gx-md-5" style="max-width: 850px;">
                
                <!--Espacio para la Tarjeta de perfil -->
                <div class="col-12 col-md-6" style="max-width: 400px;">

                    <!-- Tarjeta de perfil -->
                    <section class="bg-white rounded-4 shadow-sm px-4 px-sm-5 py-4 d-flex flex-column" aria-labelledby="titulo-perfil">
                        
                        <h2 class="text-center text-primary fw-bold mb-4 fs-4" id="titulo-perfil">Perfil</h2>

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
                                <div class="input-group border border-dark rounded" style="max-width: 270px;">
                                    <input type="text" class="form-control border-0 text-center fw-semibold text-secondary" value="XASDfsaE#324323cxSD" readonly>
                                    <button class="btn btn-link p-0 border-0 link-primary d-flex pe-1" title="Copiar código">
                                        <iconify-icon icon="pixel:copy-solid" class="fs-3 my-auto"></iconify-icon>
                                    </button>
                                </div>
                                <button class="btn btn-link p-0 link-primary d-flex" type="button" title="Ayuda">
                                    <iconify-icon icon="fluent:chat-help-24-filled" class="fs-2 my-auto"></iconify-icon>
                                </button>
                            </div>
                        </div>

                        <!-- Acciones a ejecutar sobre el perfil del usuario -->
                        <div class="d-flex justify-content-between pt-3">
                            <a href="../index.php" class="link-primary fw-bold ">Cerrar Sesión</a>
                            <button 
                                type="button" 
                                class="btn btn-link p-0 link-primary fw-bold" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEditarUsuario"
                            >
                                Editar Usuario
                            </button>
                        </div>

                    </section>
                </div>

                <!-- Espacio para la tarjeta del menú -->
                 <!-- Esta tarjeta desaparece en pantallas menores a lg y se puede acceder a un menu desplegable con las mismas caracteristicas por medio de un boton en el header -->
                <div class="col-12 col-md-6 d-none d-md-block" style="max-width: 400px;">

                    <!-- Tarjeta del menú -->
                    <nav class="bg-white rounded-4 shadow-sm py-4 h-100" aria-label="Menú principal de módulos">
                        
                        <h2 class="text-center text-primary fw-bold mb-4 fs-4">Menú</h2>

                        <div class="d-flex flex-column gap-4 mx-auto" style="max-width: 154px;">
                            
                            <a href="inicio.php" class="d-flex align-items-center link-secondary fw-bold fs-5">
                                <iconify-icon icon="mdi:home" class="fs-3 me-3"></iconify-icon> Inicio
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="mdi:users" class="fs-3 me-3"></iconify-icon> Usuarios
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="mdi:bread" class="fs-3 me-3"></iconify-icon> Productos
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="clarity:building-line" class="fs-3 me-3"></iconify-icon> Proveedores
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="bxs:store" class="fs-3 me-3"></iconify-icon> Clientes
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="fa7-solid:bag-shopping" class="fs-3 me-3"></iconify-icon> Compras
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="bi:cash-coin" class="fs-3 me-3"></iconify-icon> Ventas
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="mingcute:cube-fill" class="fs-3 me-3"></iconify-icon> Inventario
                            </a>
                            
                            <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                                <iconify-icon icon="mdi:file-chart" class="fs-3 me-3"></iconify-icon> Reporte
                            </a>

                        </div>

                    </nav>
                </div>

            </div>

        </section>

    </main>
    

    <footer class="p-1">
        <div class="container-fluid bg-white border-top py-2 text-center text-muted rounded-1">
            <small>&copy; 2026 JAFR - Administra tu negocio. <span class="d-block d-sm-inline">Prototipo de interfaz.</span></small>
        </div>
    </footer>

    <!-- Contenedor principal del menu lateral -->
    <nav class="offcanvas offcanvas-end rounded-4" tabindex="-1" id="menuLateral" aria-labelledby="etiquetaMenuLateral" style = "max-height: 620px; width:270px">
    
        <div class="offcanvas-header border-bottom">
            <div class="d-flex align-items-center text-primary">
                <iconify-icon icon="mdi:account-badge" class="fs-1 me-2"></iconify-icon>
                <h3 class="offcanvas-title fs-5 fw-bold" id="etiquetaMenuLateral">Menu Administrador</h3>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body overflow-y-auto">
            <div class="d-flex flex-column gap-4 px-3 mt-3">
                
                <a href="inicio.php" class="d-flex align-items-center link-secondary fw-bold fs-5">
                    <iconify-icon icon="mdi:home" class="fs-3 me-3"></iconify-icon> Inicio
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:users" class="fs-3 me-3"></iconify-icon> Usuarios
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:bread" class="fs-3 me-3"></iconify-icon> Productos
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="clarity:building-line" class="fs-3 me-3"></iconify-icon> Proveedores
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="bxs:store" class="fs-3 me-3"></iconify-icon> Clientes
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="fa7-solid:bag-shopping" class="fs-3 me-3"></iconify-icon> Compras
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="bi:cash-coin" class="fs-3 me-3"></iconify-icon> Ventas
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mingcute:cube-fill" class="fs-3 me-3"></iconify-icon> Inventario
                </a>
                
                <a href="#" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:file-chart" class="fs-3 me-3"></iconify-icon> Reporte
                </a>

            </div>
        </div>
    </nav>


    <!-- Modal Editar usuario-->
    <div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="modalTitulo-EditarUsuario" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Contenido del modal que va mostrar un formulario -->
            <form class="modal-content" id="formularioEditarUsuario">

                <!-- Titulo del modal y boton cerrar modal -->
                <div class="modal-header position-relative">
                    <h3 class="modal-title fs-5 fw-bold mx-auto" id="modalTitulo-EditarUsuario">
                        Editar Usuario
                    </h3>
                    <button 
                        type="button" 
                        class="btn btn-link link-dark d-flex position-absolute end-0 top-0 p-2 opacity-75" 
                        data-bs-dismiss="modal" 
                        aria-label="Close">
                            <iconify-icon
                                icon="carbon:close-filled"
                                class="my-auto fs-3">
                            </iconify-icon>
                    </button>
                </div>

                <!-- Cuerpo del modal contenido de los input del formulario-->
                <div class="modal-body px-4">
                
                    <!-- Seccion del formulario para editar nombre completo -->
                    <fieldset class="mb-3 px-2">
                        <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-0 ps-sm-4">
                            Cuenta
                        </legend>

                        <div class="jafr-form-group">
                            <label for="alias" class="jafr-form-label">Alias:</label>
                            <div class="jafr-form-input-container">
                                <input type="text" id="alias" name="alias" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>
                    </fieldset>

                    <!-- Seccion del formulario para editar nombre completo -->
                    <fieldset class="mb-3 px-2">
                        <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-0 ps-sm-4">
                            Nombre Completo
                        </legend>

                        <div class="jafr-form-group">
                            <label for="primerNombre" class="jafr-form-label">Primer Nombre:</label>
                            <div class="jafr-form-input-container">
                                <input type="text" id="primerNombre" name="primerNombre" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>
                        
                        <div class="jafr-form-group">
                            <label for="segundoNombre" class="jafr-form-label">Segundo Nombre:</label>
                            <div class="jafr-form-input-container">
                                <input type="text" id="segundoNombre" name="segundoNombre" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>

                        <div class="jafr-form-group">
                            <label for="primerApellido" class="jafr-form-label">Primer apellido:</label>
                            <div class="jafr-form-input-container">
                                <input type="text" id="primerApellido" name="primerApellido" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>

                        <div class="jafr-form-group">
                            <label for="segundoApellido" class="jafr-form-label">Segundo apellido:</label>
                            <div class="jafr-form-input-container">
                                <input type="text" id="segundoApellido" name="segundoApellido" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>
                    </fieldset>
                    <!-- Fin Seccion del formulario para editar nombre completo -->


                    <!-- Seccion del formulario para editar datos de contacto -->
                    <fieldset class="px-2">
                        <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-0 ps-sm-4">
                            Datos de contacto
                        </legend>

                        <div class="jafr-form-group">
                            <label for="telefono" class="jafr-form-label">Teléfono:</label>
                            <div class="jafr-form-input-container">
                                <input type="tel" id="telefono" name="telefono" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>

                        <div class="jafr-form-group">
                            <label for="correo" class="jafr-form-label">Correo:</label>
                            <div class="jafr-form-input-container">
                                <input type="email" id="correo" name="correo" class="form-control form-control-sm border border-black">                                        
                            </div>
                        </div>
                    </fieldset>
                    <!-- Fin Seccion del formulario para editar datos de contacto -->

                </div>

                <!-- Footer del modal contiene los botones de acción -->
                <div class="modal-footer flex-column justify-content-center">
                    <button 
                        type="submit" 
                        class="btn btn-primary fw-bold px-5 shadow" 
                        data-bs-dismiss="modal">
                            Actualizar
                    </button>
                    <!-- Contenedor acciones de editar otra informacion o (deshabilitar o eliminar)modificar el estado de un objeto -->
                    <div class="w-100 d-flex justify-content-start"> 
                        <button
                            type="button"
                            class="btn btn-link link-secondary py-0 fw-bold"
                        >
                            Editar contraseña
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="../vendor/iconify/js/iconify-icon.min.js"></script>
</body>
</html>
