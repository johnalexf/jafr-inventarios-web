<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icono para pestañas en navegadores web-->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">

    <title>Ventas - JAFR</title>

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
    <link rel="stylesheet" href="../assets/css/tablasYListasCompuestas.css">

</head>
<body class="container-xxl px-0 vh-100 d-flex flex-column">

    <!--Inicio del header: Barra superior con logo, título y menú desplegable con offcanvas -->
    <header class="p-1">

        <!--Inicio Contenedor principal con diseño navbar aun que no es directamente el nav tiene el boton que lleva al navbar  -->
        <div class="navbar bg-white rounded-1 shadow-sm">

            <!--Inicio Contenedor secundario por defecto configuracion de boostrap -->
            <div class="container-fluid d-flex justify-content-between align-items-center">
                
                <!-- Logotipo de la pagina (Enlace a inicio.php) -->
                <a class="navbar-brand m-0 p-0 ajuste-contenedor-logo-pantallas-muy-pequenas" href="inicio.php">
                    <img src="../assets/img/logo.png" alt="Logo" class="logo">
                </a>
                
                <!-- Titulo con nombre de la empresa y seccion en donde se encuentra el usuario (el nombre de la empresa se oculta en pantallas pequeñas para mejorar la visualizacion)-->
                <h1 class="d-flex align-items-center text-primary pe-4 pe-md-0 mb-0 fw-bold fs-3">
                    <span class=" d-none d-lg-block ">
                        Nombre de la empresa /
                    </span>
                    <iconify-icon 
                        icon="bi:cash-coin" 
                        class="px-2 fs-3" >
                    </iconify-icon>
                    <span>Ventas</span>    
                </h1>

                <!--Inicio Contenedor del rol y del boton de menu de navegacion -->
                <div class="d-flex gap-3">
                    
                    <!-- Contenedor del rol del usuario -->
                    <div class="px-3 border rounded-4 bg-surface d-none d-md-flex align-items-center">
                        <p class="mb-0 fw-semibold fs-6">
                            Administrador
                        </p>
                    </div>
                    
                    <!-- boton del menu -->
                    <button 
                        class="btn btn-primary rounded-4 d-flex align-items-center gap-2"
                        type="button"
                        data-bs-toggle="offcanvas" 
                        data-bs-target="#menuLateral" 
                        aria-controls="menuLateral"
                    >

                        <span class="mb-0 fw-semibold fs-6 d-none d-md-block" >
                            Menú
                        </span>
                        <!-- Icono de menu lateral para pantallas menores a lg -->
                        <!-- Por medio de offcanvas de boostrap podemos mostrar un menu lateral -->
                        <iconify-icon 
                            icon="mdi:menu" 
                            class="fs-2"
                            >
                        </iconify-icon>

                    </button>
                </div>
                <!--Fin Contenedor del rol y del boton de menu de navegacion -->

            </div>
            <!--Fin Contenedor secundario por defecto configuracion de boostrap -->

        </div>
        <!--Fin Contenedor principal con diseño navbar aun que no es directamente el nav tiene el boton que lleva al navbar  -->   

    </header>
    <!--Fin del header Barra superior con logo, título y menú desplegable con offcanvas -->


    <!--Inicio del main esta estructurado para que ocupe todo el espacio disponible ademas permite hacer scroll manteniendo el espacio del header y del footer fijo en la pantalla -->
    <main class="flex-grow-1 overflow-y-auto p-3 p-md-4">

        <!-- Inicio del Contenedor del buscador y del boton agregar nuevo item -->
        <section class="container-fluid mb-4" aria-labelledby="titulo-buscador">

            <h2 id="titulo-buscador" class="visually-hidden">Búsqueda y acciones de ventas</h2>

            <!-- Contenedor secundario del buscador y del boton -->
            <div class="d-flex gap-3">

                <!-- Contenedor del buscador -->
                <div class="input-group">
                    <span class="input-group-text bg-white text-secondary">
                        <iconify-icon icon="mdi:magnify" class="fs-5"></iconify-icon>
                    </span>
                    <input 
                        type="text" 
                        class="form-control border-start-0 ps-0 text-secondary fw-semibold fs-6" 
                        placeholder="Buscar por cliente, usuario o fecha..." 
                        aria-label="Buscar ventas"
                    >
                </div>

                <!-- boton para activar el modal de crear nuevo item -->
                <button 
                    type="button" 
                    class="btn btn-primary px-6 px-sm-2 fw-bold w-btn-agregar-nuevo 
                           d-flex justify-content-around align-items-center"  
                    data-bs-toggle="modal" 
                    data-bs-target="#modalAgregarNuevoItem"
                    >

                    <span class="d-flex d-sm-none">
                        <iconify-icon 
                            icon="mingcute:add-fill" 
                            class="m-auto fs-3" 
                            title=" Agregar nueva venta "
                            >
                        </iconify-icon>  
                    </span>
                    <span class="d-none d-sm-inline"> Agregar Nueva Venta </span>

                </button>

            </div>
            
        </section>
        <!-- Fin del Contenedor del buscador y del boton agregar nuevo item -->



        <!--
        Inicio Contenedor principal de la tabla de ventas esta visual sera despues de pantallas de medida md
        para pantallas menores se manejan card que estan despues de esta seccion
        -->
        <section class="table-responsive d-none d-md-block" aria-labelledby="titulo-tabla">

            <!--
                El titulo por medio del atributo aria en section se asocia para accesibilidad
                Ademas se utiliza la clase de bootstrap visually-hidden para que visualmente no se vea
                Pero para el tema de accesibilidad si sera tenido en cuenta
            -->
            <h2 id="titulo-tabla" class="visually-hidden">Listado de ventas en formato tabla</h2>

            <!-- Inicio de la tabla de ventas -->
            <!-- Los estilos personalizados de la tabla estan en tablasyListas.css para evitar extender el codigo HTML -->
            <table class="table table-hover tabla-principal">

                <caption class="visually-hidden">Lista de ventas</caption>

                <!-- Titulos de las columnas de la tabla -->
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Total</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Editar</th>
                        <th scope="col"><span class="visually-hidden">Ver mas detalles</span></th>
                    </tr>
                </thead>

                <!-- Contenido de la tabla (Filas) -->
                <tbody>

                <!-- Fila item 1 -->
                    <tr>
                        <th scope="row">001</th>
                        <td>Tienda don Jaime</td>
                        <td><time datetime="2025-12-18">18/12/2025</time></td>
                        <td>$340000</td>
                        <td>John Forero</td>
                        <td>
                            <button
                                class="btn btn-link link-primary m-auto p-0 d-flex"
                                title="editar venta"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEditarItem"
                            >
                                <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                            </button>
                        </td>
                        <td class="td-contiene-btn-collapse-item-principal">
                            <div class="pe-2">
                                <button 
                                    class="btn btn-link link-primary m-0 p-0 d-flex btn-acordion collapsed" 
                                    type = "button"
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#divDetalles1" 
                                    aria-expanded="false" 
                                    aria-controls="divDetalles1">
                                    <iconify-icon icon="pixel:chevron-down-solid" class="fs-3"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila item 1 detalles -->
                    <tr>

                        <td colspan="7" >

                            <div id="divDetalles1" class="accordion-collapse collapse px-5 pb-4 pt-1">

                                <!-- subtabla de detalles del item  -->
                                <table class="table table-hover table-sm mb-0 tabla-secundaria">

                                    <caption class="caption-top fw-semibold border-bottom">Detalles de la venta 001</caption>

                                    <!-- Titulos de las columnas de la subtabla -->
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <!-- Fila item 1 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 1 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 1 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 1 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                </table>
                            </div>

                            

                        </td>

                    </tr>

 

                <!-- Fila item 2 -->
                    <tr>
                        <th scope="row">001</th>
                        <td>Tienda don Jaime</td>
                        <td><time datetime="2025-12-18">18/12/2025</time></td>
                        <td>$340000</td>
                        <td>John Forero</td>
                        <td>
                            <button
                                class="btn btn-link link-primary m-auto p-0 d-flex"
                                title="editar venta"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEditarItem"
                            >
                                <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                            </button>
                        </td>
                        <td class="td-contiene-btn-collapse-item-principal">
                            <div class="pe-2">
                                <button 
                                    class="btn btn-link link-primary m-0 p-0 d-flex btn-acordion collapsed" 
                                    type = "button"
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#divDetalles2" 
                                    aria-expanded="false" 
                                    aria-controls="divDetalles2">
                                    <iconify-icon icon="pixel:chevron-down-solid" class="fs-3"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila item 2 detalles -->
                    <tr>

                        <td colspan="7" >

                            <div id="divDetalles2" class="accordion-collapse collapse px-5 pb-4 pt-1">

                                <!-- subtabla de detalles del item  -->
                                <table class="table table-hover table-sm mb-0 tabla-secundaria">

                                    <caption class="caption-top fw-semibold border-bottom">Detalles de la venta 002</caption>

                                    <!-- Titulos de las columnas de la subtabla -->
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <!-- Fila item 2 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 2 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 2 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 2 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                </table>
                            </div>

                            

                        </td>

                    </tr>


                <!-- Fila item 3 -->
                    <tr>
                        <th scope="row">001</th>
                        <td>Tienda don Jaime</td>
                        <td><time datetime="2025-12-18">18/12/2025</time></td>
                        <td>$340000</td>
                        <td>John Forero</td>
                        <td>
                            <button
                                class="btn btn-link link-primary m-auto p-0 d-flex"
                                title="editar venta"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEditarItem"
                            >
                                <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                            </button>
                        </td>
                        <td class="td-contiene-btn-collapse-item-principal">
                            <div class="pe-2">
                                <button 
                                    class="btn btn-link link-primary m-0 p-0 d-flex btn-acordion collapsed" 
                                    type = "button"
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#divDetalles3" 
                                    aria-expanded="false" 
                                    aria-controls="divDetalles3">
                                    <iconify-icon icon="pixel:chevron-down-solid" class="fs-3"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila item 3 detalles -->
                    <tr>

                        <td colspan="7" >

                            <div id="divDetalles3" class="accordion-collapse collapse px-5 pb-4 pt-1">

                                <!-- subtabla de detalles del item  -->
                                <table class="table table-hover table-sm mb-0 tabla-secundaria">

                                    <caption class="caption-top fw-semibold border-bottom">Detalles de la venta 003</caption>

                                    <!-- Titulos de las columnas de la subtabla -->
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <!-- Fila item 3 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 3 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 3 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 3 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                </table>
                            </div>

                            

                        </td>

                    </tr>



                    <!-- Fila item 4 -->
                    <tr>
                        <th scope="row">001</th>
                        <td>Tienda don Jaime</td>
                        <td><time datetime="2025-12-18">18/12/2025</time></td>
                        <td>$340000</td>
                        <td>John Forero</td>
                        <td>
                            <button
                                class="btn btn-link link-primary m-auto p-0 d-flex"
                                title="editar venta"
                                data-bs-toggle="modal" 
                                data-bs-target="#modalEditarItem"
                            >
                                <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                            </button>
                        </td>
                        <td class="td-contiene-btn-collapse-item-principal">
                            <div class="pe-2">
                                <button 
                                    class="btn btn-link link-primary m-0 p-0 d-flex btn-acordion collapsed" 
                                    type = "button"
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#divDetalles4" 
                                    aria-expanded="false" 
                                    aria-controls="divDetalles4">
                                    <iconify-icon icon="pixel:chevron-down-solid" class="fs-3"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila item 4 detalles -->
                    <tr>

                        <td colspan="7" >

                            <div id="divDetalles4" class="accordion-collapse collapse px-5 pb-4 pt-1">

                                <!-- subtabla de detalles del item  -->
                                <table class="table table-hover table-sm mb-0 tabla-secundaria">

                                    <caption class="caption-top fw-semibold border-bottom">Detalles de la venta con id 004</caption>

                                    <!-- Titulos de las columnas de la subtabla -->
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Precio Unitario</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <!-- Fila item 4 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 4 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 4 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                    <!-- Fila item 4 de la subtabla-->
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>Mogolla*12</td>
                                        <td>20</td>
                                        <td>$10.000</td>
                                        <td>$200.000</td>
                                    </tr>

                                </table>
                            </div>

                            

                        </td>

                    </tr>

                </tbody>

            </table>
            <!-- Fin de la tabla de ventas -->

        </section>
        <!--
        Fin Contenedor principal de la tabla de ventas esta visual sera despues de pantallas de medida md
        para pantallas menores se manejan card que estan despues de esta seccion
        -->


        <!-- Inicio contenedor de la lista de ventas esta visual sera antes de pantallas de medida md-->
        <!-- Los estilos personalizados de la lista estan en tablasyListas.css para evitar extender el codigo HTML -->
        <section class="d-md-none jafr-grid-cards" aria-labelledby="titulo-tarjetas">

            <!--
                El titulo por medio del atributo aria en section se asocia para accesibilidad
                Ademas se utiliza la clase de bootstrap visually-hidden para que visualmente no se vea
                Pero para el tema de accesibilidad si sera tenido en cuenta
            -->
            <h2 id="titulo-tarjetas" class="visually-hidden">Listado de ventas en formato tarjeta</h2>

            <!-- Card personalizada para el item 1 -->
            <div class="jafr-card">
                <h3 class="fs-5 fw-bold text-primary">
                    001 - johnalexfr
                </h3>
                <hr>
                <p>John Alexander Forero Rubio</p>
                <p>Usuario1@gmail.com</p>
                <p>3105953212</p>
                <p>Vendedor</p>
                <div class="jafr-card-btn-edit">
                    <button
                        class="btn btn-link link-primary m-auto p-0 d-flex"
                        title="editar venta"
                        data-bs-toggle="modal" 
                        data-bs-target="#modalEditarItem"
                    >
                        <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                    </button>
                </div>
            </div>

            <!-- Card personalizada para el item 2 -->
            <div class="jafr-card item-desactivado">
                <h3 class="fs-5 fw-bold text-primary">
                    001 - johnalexfr2
                </h3>
                <hr>
                <p>John Alexander Forero Rubio</p>
                <p>Usuario1@gmail.com</p>
                <p>3105953212</p>
                <p>Vendedor</p>
                <div class="jafr-card-btn-edit">
                    <button
                        class="btn btn-link link-primary m-auto p-0 d-flex"
                        title="editar venta"
                        data-bs-toggle="modal" 
                        data-bs-target="#modalEditarItem"
                    >
                        <iconify-icon icon="boxicons:edit-filled" class="fs-3"></iconify-icon>
                    </button>
                </div>
            </div>

        </section>
        <!-- Fin contenedor de la lista de ventas esta visual sera antes de pantallas de medida md-->
            

    </main>
    <!-- Fin del main  -->


    <!-- Inicio del footer -->
    <footer class="p-1">
        <div class="container-fluid bg-white border-top py-2 text-center text-muted rounded-1">
            <small>&copy; 2026 JAFR - Administra tu negocio. <span class="d-block d-sm-inline">Prototipo de interfaz.</span></small>
        </div>
    </footer>
    <!-- Fin del footer -->


    <!-- 
    =====================================================================
        Apartir de este este punto los contenedores son secciones 
        que se van a sobreponer sobre toda la pagina, por ello
        es que se encuentra aparte de la secciones principales
    =====================================================================
    -->

    <!-- Inicio del nav Contenedor principal del menu lateral se activa con el boton en el header-->
    <nav class="offcanvas offcanvas-end rounded-4" tabindex="-1" id="menuLateral" aria-labelledby="etiquetaMenuLateral" style = "max-height: 620px; width:270px">
    
        <!--Contenedor Encabezado del menu lateral -->
        <div class="offcanvas-header border-bottom">

            <!-- Identificacion del rol en el menú -->
            <div class="d-flex align-items-center text-primary">
                <iconify-icon icon="mdi:account-badge" class="fs-1 me-2"></iconify-icon>
                <h3 class="offcanvas-title fs-5 fw-bold" id="etiquetaMenuLateral">Menu  Administrador</h3>
            </div>

            <!-- Boton para cerrar el menu lateral -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        </div>
        
        <!-- Inicio del Cuerpo del menu lateral (lista de enlaces a los modulos): este contenedor permite que sea scrolleable el menu si el alto de la pantalla es muy pequeño-->
        <div class="offcanvas-body overflow-y-auto">

            <!-- Inicio contenedor secundario de los links a los diferentes modulos -->
            <div class="d-flex flex-column gap-4 px-3 mt-3">
                
                <a href="inicio.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:home" class="fs-3 me-3"></iconify-icon> Inicio
                </a>
                
                <a href="usuarios.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:users" class="fs-3 me-3"></iconify-icon> Usuarios
                </a>
                
                <a href="productos.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:bread" class="fs-3 me-3"></iconify-icon> Productos
                </a>
                
                <a href="proveedores.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="clarity:building-line" class="fs-3 me-3"></iconify-icon> Proveedores
                </a>
                
                <a href="clientes.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="bxs:store" class="fs-3 me-3"></iconify-icon> Clientes
                </a>
                
                <a href="compras.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="fa7-solid:bag-shopping" class="fs-3 me-3"></iconify-icon> Compras
                </a>
                
                <a href="ventas.php" class="d-flex align-items-center link-secondary fw-bold fs-5">
                    <iconify-icon icon="bi:cash-coin" class="fs-3 me-3"></iconify-icon> Ventas
                </a>
                
                <a href="inventario.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mingcute:cube-fill" class="fs-3 me-3"></iconify-icon> Inventario
                </a>
                
                <a href="reporte.php" class="d-flex align-items-center link-primary fw-bold fs-5">
                    <iconify-icon icon="mdi:file-chart" class="fs-3 me-3"></iconify-icon> Reporte
                </a>

            </div>
            <!-- Fin contenedor secundario de los links a los diferentes modulos -->
            
        </div>
        <!-- Fin del Cuerpo del menu lateral (lista de enlaces a los modulos) -->

    </nav>
    <!-- Fin del nav Contenedor principal del menu lateral se activa con el boton en el header-->


    <!-- Inicio contenedor Modal de Agregar nuevo con formulario: este abarca toda la pantalla para poder generar una pequeña oscuridad en el fondo -->
    <div class="modal fade" id="modalAgregarNuevoItem" tabindex="-1" 
        aria-labelledby="modalTitulo-AgregarItem" aria-hidden="true">

        <!-- Inicio contenedor del contenido del modal -->
        <div class="modal-dialog modal-dialog-centered">

            <!-- Contenido del modal que va mostrar un formulario -->
            <form class="modal-content" id="formularioAgregarVenta">

                <!-- Titulo del modal y boton cerrar modal -->
                <div class="modal-header position-relative">

                    <h3 class="modal-title fs-5 fw-bold mx-auto" id="modalTitulo-AgregarItem">
                        Agregar Nueva Venta
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
                
                    

                </div>

                <!-- Footer del modal contiene los botones de acción -->
                <div class="modal-footer flex-column justify-content-center">

                    <button 
                        type="submit" 
                        class="btn btn-primary fw-bold px-5 shadow" 
                        data-bs-dismiss="modal">
                            Agregar
                    </button>


                </div>

            </form>

        </div>
        <!-- Fin contenedor del contenido del modal -->

    </div>
    <!-- Fin contenedor Modal de Ejemplo con formulario: este abarca toda la pantalla para poder generar una pequeña oscuridad en el fondo -->    


    <!-- Inicio contenedor Modal de editar con formulario: este abarca toda la pantalla para poder generar una pequeña oscuridad en el fondo -->
    <div class="modal fade" id="modalEditarItem" tabindex="-1" 
        aria-labelledby="modalTitulo-EditarItem" aria-hidden="true">

        <!-- Inicio contenedor del contenido del modal -->
        <div class="modal-dialog modal-dialog-centered">

            <!-- Contenido del modal que va mostrar un formulario -->
            <form class="modal-content" id="formularioEditarVenta">

                <!-- Titulo del modal y boton cerrar modal -->
                <div class="modal-header position-relative">

                    <h3 class="modal-title fs-5 fw-bold mx-auto" id="modalTitulo-EditarItem">
                        Editar Venta
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

                    <div class="mb-3 px-2">
                        <p class="fw-bold">
                           ID: &nbsp;&nbsp;001
                        </p>
                    </div>


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
                    <div class="w-100 d-flex justify-content-end"> 
                        <button
                            type="button"
                            class="btn btn-link link-danger py-0 fw-bold"
                        >
                            eliminar venta
                        </button>
                    </div>

                </div>

            </form>

        </div>
        <!-- Fin contenedor del contenido del modal -->

    </div>
    <!-- Fin contenedor Modal de Ejemplo con formulario: este abarca toda la pantalla para poder generar una pequeña oscuridad en el fondo -->    



    <!-- Bootstrap JS -->
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Iconify -->
    <script src="../vendor/iconify/js/iconify-icon.min.js"></script>
    
</body>
</html>
