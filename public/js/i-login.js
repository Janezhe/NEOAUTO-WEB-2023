let f_login =
    "<div class='popup'>" +
    "<div class='container-popup'>" +
    "<div class='popup-group w-75 me-auto ms-auto'>" +
    "<img src=" +
    "{{asset('icons/close.svg')}}" +
    " class='close' id='close' onclick='quitarHtml1(close)' alt='close' />" +
    "<h1 class='m-auto'>LOGIN</h1>" +
    "<form action=' class='w-100'>" +
    "<div class='inputbox'>" +
    "<input type='email' class='form__input' id='txtLogEmail' placeholder=' ' required />" +
    "<label for='txtLogEmail' class='form__label'>Email</label>" +
    "</div>" +
    "<div class='inputbox'>" +
    "<input type='password' class='form__input' id='txtLogPass' placeholder='' required />" +
    "<label for='txtLogPass' class='form__label'>Password</label>" +
    "</div>" +
    "<div class='inputbox'>" +
    "<input type='submit' class='form__submit' value='Login' />" +
    "</div>" +
    "</form>" +
    "<div>" +
    "<div class='container'>" +
    "<ul class='navbar-nav me-4 mb-2 mb-lg-0'>" +
    "<li class='nav-item'>" +
    "<a class='text-decoration-none text-primary' aria-current='page' href='#'>¿Olvidaste tu" +
    "contraseña?</a>" +
    "</li>" +
    "<p class='text-t'>" +
    "Si no eres mienbro de Neoauto," +
    "<a class='text-decoration-none text-primary' aria-current='page' href='{{route('i_registro')}}'>Registrate" +
    "aqui</a>" +
    "es facil y rapido" +
    "</p>" +
    "</ul>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>" +
    "</div>";

function AgregarHtml1() {
    document.getElementById("f-reg-log").innerHTML = f_login;
}
function quitarHtml1() {
    document.getElementById("f-reg-log").innerHTML = "";
}

var submit = document.getElementById(submit);
var password = document.getElementById(password);
var email = document.getElementById(email);
submit.addEventListener("click", function (evt) {
    if (password.value === "") {
        console.log("El campo es requerido");
    }
});
