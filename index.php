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

</head>
<body class="bg-white">
    
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
    
    <main class="container">
        
        <!--autenticacion o registro  -->
        <div class="row align-items-start">

            <!--Seccion de autenticacion  -->
            <section class="col-12 col-md-6 p-5">
                <div class="my-auto p-5 bg-surface rounded shadow-sm">
                    <h2 class="text-primary fs-4 text-center">
                        Iniciar sesión
                    </h2>
                    <div class="mt-4 mx-5 px-5">
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
                                 <button type="submit" class="btn btn-secondary btn-lg">Ingresar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </section>
            
            <!-- Seccion para el registro de un usuario -->
            <section class="col-12 col-md-6 ">
                Formulario de registro
            </section>
            
        </div>
        
    </main>
    
    <!-- Bootstrap JS -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="vendor/iconify/js/iconify-icon.min.js"></script>
</body>
</html>
