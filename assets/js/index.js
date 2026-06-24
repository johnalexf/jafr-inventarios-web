
document.addEventListener('DOMContentLoaded', function(){

    // Variables de la seccion del formulario para registrarse
    const divFormularioRegistro = document.getElementById('divFormularioRegistro');
    const divPanelRegistro = document.getElementById('divPanelRegistro');
    const btnRegistrate = document.getElementById('btnRegistrate');

    //Variables de la seccion del formulario para logearse
    const divPanelLogin = document.getElementById('divPanelLogin');
    const divFormularioLogin = document.getElementById('divFormularioLogin');
    const btnLogearse = document.getElementById('btnLogearse');

    btnRegistrate.addEventListener( "click", () => {
        ocultarFormularioLogin();
        mostrarFormularioRegistro();
    }
    );

    btnLogearse.addEventListener( "click", () =>{
        ocultarFormularioRegistro();
        mostrarFormularioLogin();
    }
    );

    function mostrarFormularioRegistro() {
        divPanelRegistro.classList.add('d-none');
        divFormularioRegistro.classList.remove('d-none');
    }

    function ocultarFormularioRegistro() {
        divPanelRegistro.classList.remove('d-none');
        divFormularioRegistro.classList.add('d-none');
    }

    function mostrarFormularioLogin() {
        divPanelLogin.classList.add('d-none');
        divFormularioLogin.classList.remove('d-none');
    }

    function ocultarFormularioLogin() {
        divPanelLogin.classList.remove('d-none');
        divFormularioLogin.classList.add('d-none');
    }

});