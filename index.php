<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icono para pestañas en navegadores web-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <title>JAFR Administra tu negocio</title>

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
    <!-- Google Fonts -->
        <!-- Tipografías: Montserrat para títulos y Roboto para textos generales -->

        <!-- Optimiza la conexión con los servidores de Google Fonts antes de cargar las fuentes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Carga las familias tipográficas Montserrat y Roboto -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Fin Google Fonts -->

    <!-- Estilos propios -->
    <link href="./assets/css/global.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/formularios.css">

</head>
<body class="vh-100 bg-white overflow-lg-hidden">
    
    <header class="p-1">
        <nav class="navbar bg-white rounded-1">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                
                <a class="navbar-brand d-none d-md-block" href="#">
                    <img src="assets/img/logo.png" alt="Logo" class="logo">
                </a>
                
                <h1 class="mb-0 text-primary fw-bold fs-3 text-center px-3 py-2">
                    Bienvenido a JAFR administra tu negocio
                </h1>
            </div>
        </nav>
    </header>
    
    <main class="container-sm px-sm-0 pb-5 h-100">
        
        <!--autenticacion o registro  -->
        <div class="px-1 px-sm-2 px-md-5 pb-5 d-flex flex-column flex-lg-row justify-content-center align-items-center ">
 
            <!--Seccion de autenticacion  -->
            <section class="w-sm-75">
                <div class="my-auto py-4 bg-surface rounded shadow-sm">
                    <h2 class="text-center text-primary fs-4 fw-bold mt-4">
                        Iniciar sesión
                    </h2>
                    <div class="mt-4 mx-5 ">
                        <form>
                            
                            <div class="mb-4">
                                <label for="emailLogin" class="form-label">Correo:</label>
                                <input type="email" class="form-control" id="emailLogin" required>
                            </div>

                            <div class="mb-2">
                                <label for="passwordLogin" class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="passwordLogin" required>
                            </div>

                            <div class="mb-4 text-center">
                                <a class="btn text-primary text-decoration-none" href="">Recuperar contraseña</a>
                            </div>

                            <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-secondary fw-bold px-5 shadow">Ingresar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </section>
            

            <!-- Seccion para el formulario de registro de un usuario -->
            <section class="w-100 overflow-lg-scroll" style="max-height: 90vh;">


                <!-- Contenedor principal del formulario Registrarse con su titulo -->
                <div class="py-4 bg-surface-50 rounded shadow-sm">

                    <h2 class="mt-3 mb-4 text-center text-primary fs-4 fw-bold">
                        Registrarse
                    </h2>

                    <!-- Formulario registro de un usuario -->
                    <form class="mx-1 px-3 px-xl-5" id="formularioRegistroUsuario">
                        
                        <!-- Selector de tipo de usuario -->
                        <div class="mb-3">
                            <label for="rolRegistro" class="visually-hidden">Tipo de usuario</label>
                            <select class="form-select border-black jafr-max-w-sm mx-auto" id="rolRegistro" name="rolRegistro" aria-label="Rol del usuario dentro del sistema">
                                <option selected>Tipo de usuario...</option>
                                <option value="admin">Administrador</option>
                                <option value="vendedor">Vendedor</option>
                            </select>
                        </div>
                        
                        <!-- Seccion del formulario para diligenciar nombre completo -->
                        <fieldset class="mb-3" disabled>
                            <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-3">
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
                        <!-- Fin Seccion del formulario para diligenciar nombre completo -->

                        
                        <!-- Seccion del formulario para diligenciar datos de contacto -->
                        <fieldset class="mb-3" disabled>
                            <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-3">
                                Datos de contacto
                            </legend>

                            <div class="jafr-form-group">
                                <label for="telefono" class="jafr-form-label">Teléfono:</label>
                                <div class="jafr-form-input-container">
                                    <input type="tel" id="telefono" name="telefono" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>

                            <div class="jafr-form-group">
                                <label for="correoRegistro" class="jafr-form-label">Correo:</label>
                                <div class="jafr-form-input-container">
                                    <input type="email" id="correoRegistro" name="correoRegistro" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>
                        </fieldset>
                        <!-- Fin Seccion del formulario para diligenciar datos de contacto -->


                        <!-- Seccion del formulario para diligenciar Credenciales de acceso -->
                        <fieldset class="mb-3" disabled>
                            <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-3">
                                Credenciales de Acceso
                            </legend>

                            <div class="jafr-form-group">
                                <label for="alias" class="jafr-form-label">Alias:</label>
                                <div class="jafr-form-input-container">
                                    <input type="text" id="alias" name="alias" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>

                            <div class="jafr-form-group">
                                <label for="passwordRegistro" class="jafr-form-label">Contraseña:</label>
                                <div class="jafr-form-input-container">
                                    <input type="password" id="passwordRegistro" name="passwordRegistro" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>

                            <div class="jafr-form-group">
                                <label for="confirmarPassword" class="jafr-form-label">Confirmar Contraseña:</label>
                                <div class="jafr-form-input-container">
                                    <input type="password" id="confirmarPassword" name="confirmarPassword" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>

                            <div class="jafr-form-group">
                                <label for="codigoAcceso" class="jafr-form-label">Código de acceso:</label>
                                <div class="jafr-form-input-container position-relative">
                                    <input type="text" id="codigoAcceso" name="codigoAcceso" class="form-control form-control-sm border border-black">   
                                    <iconify-icon 
                                        icon="fluent:chat-help-24-filled" 
                                        class="position-absolute top-0 end-0 fs-2 pe-2 jafr-icon" 
                                        id="iconoAyuda">
                                    </iconify-icon>                                     
                                </div>
                            </div>
                        </fieldset>
                        <!-- Fin Seccion del formulario para diligenciar Credenciales de acceso -->


                        <!-- Seccion datos de la empresa -->
                        <fieldset class="mb-4 d-none" disabled>
                            <legend class="fs-6 fw-bold border-bottom border-dark mb-3 ps-3">
                                Datos de la empresa
                            </legend>

                            <div class="jafr-form-group">
                                <label for="nombreComercial" class="jafr-form-label">Nombre comercial:</label>
                                <div class="jafr-form-input-container">
                                    <input type="text" id="nombreComercial" name="nombreComercial" class="form-control form-control-sm border border-black">                                        
                                </div>
                            </div>
                        </fieldset>
                        <!-- Fin Seccion datos de la empresa -->

                        <div class="d-flex justify-content-center py-3">
                            <button id="btnRegistrarme" type="submit" class="btn btn-secondary fw-bold px-5 shadow" disabled>Registrarme</button>
                        </div>

                    </form>
                    <!-- Fin Formulario registro de un usuario -->

                </div>
                <!-- Fin Contenedor principal del formulario Registrarse con su titulo -->

            </section>
            <!-- Fin Seccion para el formulario de registro de un usuario -->
            
        </div>
        
    </main>
    
    <!-- Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="vendor/iconify/js/iconify-icon.min.js"></script>

    <!-- Registro de un usuario -->
     <script src="assets/js/indexRegistroUsuario.js"></script>
</body>
</html>
