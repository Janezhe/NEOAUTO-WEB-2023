let f_registro =
    "" +
    "<div class='popup-registro'>" +
    "<div class='container-popup-registro'>" +
    "<div class='popup-group-registro'>" +
    "<img src=''" +
    "{{asset('icons/close.svg')}} style= 'height=10px'" +
    "' id='closeReg' onclick=quitarHtml(closeReg) class='closeReg' alt='close' />" +
    "<p class='text-center fs-3 fst-italic'>Registro</p>" +
    ""+
    "<form id='form' action='' class=''>" +
    "<div class='row d-flex gap-2 justify-content-center'>" +
    "<div class='inputbox-reg col-md-5'>" +
    "<ion-icon name='mail-outline'> </ion-icon>" +
    "<label for='inputEmail4' class='form-label fw-bold'>Email</label>" +
    "<input type='email' class='form-control border border-secondary' id='inputEmail4' required />" +
    "</div>" +
    "<div class='inputbox-reg col-md-6'>" +
    "<label for='inputStat' class='form-label fw-bold'>Documento de Identidad</label>" +
    "<div class='d-flex justify-content-center'>" +
    "<select name=' id='sltIdentidad' class='form-select form-select-sm w-60 border border-secondary' required />" +
    "<option selected disabled value>Documento</option>" +
    "<option value='Dni'>Dni</option>" +
    "<option value='Ruc'>Ruc</option>" +
    "</select>" +
    "<input type='number' id='txtIdentidad' class='form-control w-70 border border-secondary' required />" +
    "<p class='error' id='warning'></p>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "<div class='row d-flex justify-content-center'>" +
    "<div class='inputbox-reg col-md-5'>" +
    "<ion-icon name='mail-outline'> </ion-icon>" +
    "<label for='inputPassword4' class='form-label fw-bold '>Password</label>" +
    "<input type='Password' class='form-control border border-secondary' id='inputPassword4' required />" +
    "</div>" +
    "<div class='inputbox-reg col-md-6'>" +
    "<ion-icon name='mail-outline'> </ion-icon>" +
    "<label for='inputCelular4' class='form-label fw-bold'>Celular</label>" +
    "<input type='Celular' class='form-control border border-secondary' id='inputCelular4' required />" +
    "</div>" +
    "</div>" +
    "<div class='row d-flex justify-content-center'>" +
    "<div class='inputbox-reg col-md-5'>" +
    "<ion-icon name='mail-outline'> </ion-icon>" +
    "<label for='inputNombre4' class='form-label fw-bold'>Nombre</label>" +
    "<input type='Nombre' class='form-control border border-secondary' id='inputNombre4' required />" +
    "</div>" +
    "<div class='inputbox-reg col-md-6'>" +
    "<h6>Género</h6>" +
    "<div class='form__radio justify-content-center d-flex gap-3'>" +
    "<div class='form__radio_group'>" +
    "<label for='rdbtnMascReg'>" +
    "<input type='radio' class='form__radio' name='generoReg' id='rdbtnMascReg' required />" +
    "Masculino" +
    "</label>" +
    "</div>" +
    "<div class='form__radio_group'>" +
    "<label for='rdbtnFemReg'>" +
    "<input type='radio' class='form__radio' name='generoReg' id='rdbtnFemReg' required />" +
    "Femenino" +
    "</label>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "<div class='row d-flex justify-content-center'>" +
    "<div class='inputbox-reg col-md-5'>" +
    "<ion-icon name='mail-outline'> </ion-icon>" +
    "<label for='inputApellido4' class='form-label fw-bold'>Apellido</label>" +
    "<input type='Apellido' class='form-control border border-secondary' id='inputApellido4' required />" +
    "</div>" +
    "<div class='inputbox-reg col-md-6'>" +
    "<h6>Fecha de Nacimiento</h6>" +
    "<div class='form__fecha'>" +
    "<div class='form_fecha_group d-flex gap-1 justify-content-center'>" +
    "<div class='fecha__day'>" +
    "<select name='' id='' required />" +
    "<option value='1'>01</option>" +
    "</select>" +
    "</div>" +
    "<div class='fecha__mont'>" +
    "<select name='' id='' required />" +
    "<option value='1'>Abril</option>" +
    "</select>" +
    "</div>" +
    "<div class='fecha__years'>" +
    "<select name=' id=' required />" +
    "<option value='1'>2023</option>" +
    "</select>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
  
    "<div class='container align-content-start'>" +
    "<div class='form-check'>" +
    "<input class='form-check-input' type='checkbox' value='' id='defaultCheck1' required/>" +
    "<label class='form-check-label' for='defaultCheck1'>" +
    "Acepto las" +
    "<a class='text-decoration-none' aria-current='page' href=''>Politicas de privacidad</a>" +
    "de Neoauto.com" +
    "</label>" +
    "</div>" +
    "<div class='form-check'>" +
    "<input class='form-check-input' type='checkbox' value='' id='defaultCheck2' required/>" +
    "<label class='form-check-label' for='defaultCheck2'>" +
    "Acepto los" +
    "<a class='text-decoration-none' aria-current='page' href=''>Términos y condiciones</a>" +
    "de Neoauto.com" +
    "</label>" +
    "</div>" +
    "<div class='form-check'>" +
    "<input class='form-check-input' type='checkbox' value='' id='defaultCheck3' required/>" +
    "<label class='form-check-label' for='defaultCheck3'>" +
    " Autorizo el uso de mis datos para" +
    " <a class='text-decoration-none' aria-current='page' href=''>Fines Adicionales</a>" +
    "</label>" +
    "</div>" +
    "</div>" +
    "<center>" +
    "<div class='inputbox-reg w-50 d-flex justify-content-center'>" +
    "<input type='submit' class='form__submit' value='Registrar' />" +
    "</div>" +
    "</center>" +
    "<label class='form-check-label' for='defaultCheck1'>" +
    "¿Ya tienes cuenta?" +
    "<a class='text-decoration-none' aria-current='page' href='' >Ingresa</a>" +
    "</label>" +
    "</center>" +
    "</form>" +
    "</div>" +
    "</div >" +
    "</div >" +
    "</div >" +
    "</div >" +
    "</div >" ;

function AgregarHtml() {
    document.getElementById("f-reg-log").innerHTML = f_registro;
}
function quitarHtml() {
    document.getElementById("f-reg-log").innerHTML = "";
}

window.addEventListener("load", function () {
    var cerrar_reg = this.document.getElementById("closeReg");
    document
        .getElementById("btnRegistrar")
        .addEventListener("click", AgregarHtml);
    if (cerrar_reg) {
        document
            .getElementById("closeReg")
            .addEventListener("click", quitarHtml);
    }
});

var form = this.document.getElementById("form"); //obtener form
var select = document.getElementById("sltIdentidad"); //Obtener el select
var valor = select.options[select.selectedIndex].value; //obtener valor del select
var warning = this.document.getElementById("warning"); //obtener etiqueta <p> mostrar error


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("form").addEventListener('submit', validarForm); 
}); 
function validarForm(evento) {
    evento.preventDefault();
    var email = document.getElementById('email').value;
    if(email.length == 0) {
      alert('No has escrito nada en el email');
      return;
    }
    var Dni = document.getElementById('Dni').value;
    if (Dni.length < 8) {
      alert('Escribe correctamente el DNI');
      return;
    }
    var Password = document.getElementById('Password').value;
    if (Password.length == 0) {
      alert('Escribe tu contraseña');
      return;
    }
    var Nombre = document.getElementById('Nombre').value;
    if (Nombre.length == 0) {
      alert('No has escrito nada en el campo nombre');
      return;
    }
    var Apellido = document.getElementById('Apellido').value;
    if (Apellido.length == 0) {
      alert('No has escrito nada en el campo apellido');
      return;
    }
    this.submit();
  }  
