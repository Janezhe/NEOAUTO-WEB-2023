<body class="fondo-bl">
    <section>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="container d-flex justify-content-center">
                <h1 class="fw-semibold">TUAUTOpe-Libro de reclamaciones</h1>
            </div>
            <br>
            <div class="d-flex justify-content-between align-items-center">
                <div class="mt-3">
                    <p class="fs-5 fw-medium">Empresa Editora el Comercio S.A.</p>
                    <p class="">RUC:20143229816</p>
                    <p class="">Direccion: Jirón Jorge Salazar Araoz Nro.171 Urb. Santa Catalina Lima - Lima - La Victoria</p>
                </div>
            </div>
        </div>
        <br>
        <div class="container fondo-br t-2">
            <div class="p-3 mb-2 bg-warning text-dark">
                <div class="container d-flex justify-content-between">
                    <p class="fs-5">Información del consumidor reclamante</p>
                </div>
            </div>
            <form class=" needs-validation" novalidate>
                <br>
                <div class="row mb-3">
                    <div class="text-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="validationCustom01" value="option1" required>
                            <label class="form-check-label" for="validationCustom01">Persona natural</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" required>
                            <label class="form-check-label" for="inlineRadio2">Empresa</label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">                  
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa nombre
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa Apellido Paterno
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Apellido Materno</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa Apellido Materno
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Tipo de documento</legend>
                    <div class="col-sm-5">
                        <select id="inputState" class="form-select" required>
                            <option selected>DNI</option>
                            <option>Carnet de extranjeria</option>
                        </select>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Número de documento</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa numero de DNI
                    </div>
                </div>
                <div class="text-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault" >
                            ¿Menor de edad?
                        </label>
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa correo
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                       Ingresa dirección
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="validationCustom01" class="col-sm-2 col-form-label">Teléfono1</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="validationCustom01" required>
                    </div>
                    <div class="valid-feedback">
                        Ingresa numero de telefono
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label">Teléfono2</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputEmail3">
                    </div>
                </div>
                
                <div class=" container fondo-br">
                    <div class="p-3 mb-2 bg-warning text-dark">
                        <div class="container d-flex justify-content-between">
                            <p class="fs-5">Identificación del bien contratado</p>
                        </div>
                    </div>
            
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Producto o servicio</legend>
                        <div class="col-sm-10">
                            <select id="inputState" class="form-select" required>
                                <option selected>-------</option>
                                <option>TUAUTOpe</option>
                            </select>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Tipo de bien</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Servicio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Producto
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Monto reclamado</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="validationCustom01" required>
                        </div>
                        <div class="valid-feedback">
                            Ingresa monto de reclamo
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Descripción</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="validationCustom01" rows="3"></textarea>
                        </div>
                        <div class="valid-feedback">
                            Ingresa descripcion del producto o servicio
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <div class=" container fondo-br">
                    <div class="p-3 mb-2 bg-warning text-dark">
                        <div class="container d-flex justify-content-between">
                            <p class="fs-5">Detalle de la reclamación</p>
                        </div>
                    </div>
            
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Tipo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Reclamo (Disconformidad relacionada a los productos y/o servicios)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Queja (Disconformidad no relacionada a los productos y/o servicios o malestar o descontento a la atención al público)
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Detalle</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Pedido</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="validationCustom01" rows="3"></textarea>
                        </div>
                        <div class="valid-feedback">
                            Ingresa el pedido
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <div class=" container fondo-br">
                    <div class="p-3 mb-2 bg-warning text-dark">
                        <div class="container d-flex justify-content-between">
                            <p class="fs-5">Acciones adoptadas por el proveedor</p>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Detalle</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-2 col-form-label">Ingrese el siguiente texto</label>
                        <div class="col-sm-3">
                            <img src="{{asset('images/Captcha.webp')}}" alt="">
                            <div>
                                <input class="form-control" type="text" placeholder="" aria-label="default input example">
                            </div>
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
                <br>
            </form>
            <br>
            <br>
        
            <br>
        </div>
    </section>
</body>
<script>
    (function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')

  // Bucle sobre ellos y evitar el envío
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>