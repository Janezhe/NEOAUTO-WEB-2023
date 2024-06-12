<body class="">
    <section>
        <div class="fondo-bl">
            <br>
            <br>
            <div class="container d-flex justify-content-center">
                <h1>TUAUTOpe-Libro de reclamaciones</h1>
            </div>
            <br>
            <div class="container text-center">
                <div class="fondo-br">
                    <br>
                    <br>
                    <br>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col">
                            <h3 class="fw-medium">Reclamo o queja</h3>
                            <br>
                            <div>
                                <a class="btn btn-primary" href="{{route('registrar_reclamo')}}" roule="button">Registrar reclamo o queja</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="fw-medium">Consulte el estado de su reclamo</h3>
                            <br>
                            <div class="col-md-12 text-start">
                                <label for="validationCustom01" class="form-label">Nro de reclamo</label>
                                <input type="reclamo" class="form-control" id="validationCustom01" placeholder="" required>
                                <div class="valid-feedback">
                                    Ingresa numero
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6 text-start">
                                <label for="validationCustom01" class="form-label">Tipo de documento</label>
                                <select id="validationCustom01" class="form-select" required>
                                    <option selected>DNI</option>
                                    <option>Carnet de extranjeria</option>
                                </select>
                                <div class="valid-feedback">
                                    Selecciona una alternativa
                                </div>
                            </div>
                            <br>
                            
                            <div class="col-md-6 text-start">
                                <label for="validationCustom01" class="form-label">Nro de documento</label>
                                <input type="reclamo" class="form-control" id="validationCustom01" placeholder="" minlength="8">
                                <div class="valid-feedback">
                                    Ingresa numero de 8 digitos
                                </div>
                            </div>
                            <br>
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary">Consultar</button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
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