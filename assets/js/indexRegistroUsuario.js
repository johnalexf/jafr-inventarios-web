// Esperamos a que el HTML termine de cargar antes de ejecutar algo
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Seleccionamos los elementos del DOM que vamos a manipular
    const formularioRegistroUsuario = document.getElementById('formularioRegistroUsuario');
    
    // Los IDs se buscan siempre desde 'document' porque son únicos en la página
    const selectRol = document.getElementById('rolRegistro');
    const btnRegistrarme = document.getElementById('btnRegistrarme');

    const fieldsets = formularioRegistroUsuario.querySelectorAll('fieldset'); // Selecciona todos los fieldsets del formulario
    const fieldsetEmpresa = fieldsets[3]; // El último fieldset es el índice 3 (Datos de la empresa)

    // 2. Escuchamos el evento 'change' del selector
    selectRol.addEventListener('change', function() {
        const rolElegido = this.value;

        // Caso A: Se eligió Administrador
        if (rolElegido === 'admin') {
            habilitarFormularioBase();
            habilitarMostrarDatosEmpresa();
        } 
        // Caso B: Se eligió Vendedor
        else if (rolElegido === 'vendedor') {
            habilitarFormularioBase();
            deshabilitarOcultarDatosEmpresa();
        } 
        // Caso C: Volvió a la opción por defecto ("Tipo de usuario...")
        else {
            bloquearFormularioCompleto();
        }
    });


    // ----------- Funciones Auxiliares para no repetir código ------------

    function habilitarFormularioBase() {
        // Habilitamos los primeros 3 fieldsets (Nombre Completo, DAtos de Contacto, Credenciales)
        for (let i = 0; i < 3; i++) {
            fieldsets[i].disabled = false;
        }
        btnRegistrarme.disabled = false; // Habilitamos el botón
    }

    function bloquearFormularioCompleto() {
        // Deshabilitamos TODOS los fieldsets
        for (let i = 0; i < 3; i++) {
            fieldsets[i].disabled = true;
        }
        deshabilitarOcultarDatosEmpresa();
        btnRegistrarme.disabled = true; // Bloqueamos el botón
    }

    function deshabilitarOcultarDatosEmpresa(){
        // Ocultamos completamente el área de empresa para el vendedor
            fieldsetEmpresa.classList.add('d-none');
            fieldsetEmpresa.disabled = true; // Lo mantenemos deshabilitado por seguridad
    }

    function habilitarMostrarDatosEmpresa(){
        // Aseguramos que el área de empresa esté visible y habilitada
            fieldsetEmpresa.classList.remove('d-none');
            fieldsetEmpresa.disabled = false;
    }
});