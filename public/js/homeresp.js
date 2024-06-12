let f_buscar = document.getElementById("f-search");
let f_radio = document.getElementById("form__radio");
let radio_desk =
    "" +
    "<div class='form-check'>" +
    "<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio1' value='option1' />" +
    "<label class='form-check-label text-white' for='inlineRadio1' style='padding-right: 4rem'>Autos</label>" +
    "</div >" +
    "<div class='form-check '>" +
    "<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio2' value='option2' />" +
    "<label class='form-check-label text-white' for='inlineRadio2' style='padding-right: 4rem'>Motos</label>" +
    "</div>" +
    "<div class='form-check '>" +
    "<input class='form-check-input' type='radio' name='inlineRadioOptions' id='inlineRadio3' value='option3' />" +
    "<label class='form-check-label text-white' for='inlineRadio3'>Buses y camiones</label>" +
    "</div>";
let contenido_Desk =
    "" +
    "<div class='row'>" +
    "<div class='col-md-3 mb-3 form__search-desk flex-column'>" +
    "<label for='marca' class='form-label text-black'>Marca:</label>" +
    "<input type='text' id='marca' name='marca' placeholder='Agregar Marca' class='form-control' />" +
    "</div>" +
    "<div class='col-md-3 mb-3 form__search-desk flex-column'>" +
    "<label for='modelo' class='form-label text-black'>Modelo:</label>" +
    "<input type='text' id='modelo' name='modelo' class='form-control' placeholder='Agragar Modelo' />" +
    "</div>" +
    "<div class='col-md-3 mb-3 form__search-desk'>" +
    "<div class='row'>" +
    "<div class='col-6'>" +
    "<label for='ano' class='form-label text-black'>Año:</label>" +
    "<input type='number' id='ano' name='ano' class='form-control' />" +
    "</div>" +
    "<div class='col-6'>" +
    "<label for='precio' class='form-label text-black'>Precio:</label>" +
    "<input type='number' id='precio' name='precio' class='form-control' />" +
    "</div>" +
    "</div>" +
    "</div>" +
    "<div class='col-md-3 mb-3 '>" +
    "<button type='submit' class='btn btn-primary bg-warning border-0 text-white w-100 h-100'>" +
    "Buscar" +
    "</button>" +
    "</div>";

let contenido_mobile =
    "<div class='d-flex justify-content-between '>" +
    "<div class='d-flex w-100'>" +
    "<div class='w-75'>" +
    "<input type='search' name='search' class='form-control' placeholder='Busca por marca y modelo'>" +
    "</div>" +
    "<div class='d-flex w-25'>" +
    "<button type='submit' class='btn btn-primary bg-warning border-0 text-white w-100 h-100'>Buscar</button>" +
    "</div>" +
    "</div>";

let classicon = document.getElementById("stick_modelo");

function cambiarForm() {
    let pantalla = window.innerWidth;

    if (pantalla > 770) {
        f_radio.innerHTML = radio_desk;
        f_buscar.innerHTML = contenido_Desk;
    } else {
        f_radio.innerHTML = "";
        f_buscar.innerHTML = contenido_mobile;
    }
}

cambiarForm();

window.addEventListener("resize", cambiarForm);
