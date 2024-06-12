<body class="bg-background">
  <section>
    <div class="fondo-gris p-4">
      <div class="d-grid gap-3 d-md-flex justify-content-md-end container">
        <button class="btn me-md-1 text-white" type="button" style="background-color: #fa9300">
          1
        </button>
        <p class="text-black text-white mt-2 fst-italic fw-bolder">
          SELECCIONA EL TIPO DE AVISO
        </p>
        <button class="btn text-secondary bg-black btn-warning me-md-1 border border-white" type="button">
          2
        </button>
        <button class="btn text-secondary bg-black btn-warning me-md-1 border border-white" type="button">
          3
        </button>
      </div>
    </div>
  </section>
  <section>
    <div class="rectangulo-fondo p-1">
      <h5 class="text-start text-white mt-3 container">
        Elige el tipo de vehiculo
      </h5>
      <div class="d-grid gap-2 d-md-block container">
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked />
          <label class="btn btn-outline-warning text-white border-white me-4" for="btnradio1">
            <img class="me-4" src="{{asset('icons/coche.svg')}}" alt="" />
            AUTO</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" />
          <label class="btn btn-outline-warning text-white border-white me-4" for="btnradio2">
            <img class="me-4" src="{{asset('icons/moto.svg')}}" alt="" />
            MOTO</label>

          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" />
          <label class="btn btn-outline-warning text-white border-white me-4" for="btnradio3">
            <img class="me-4" src="{{asset('icons/camion.svg')}}" alt="" />
            BUS/CAMIÓN</label>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />
  </section>
  <section class="">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-4 g-3">
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <br />
              <h5 class="card-title text-center mt-3 text-secondary fw-semibold">
                PUBLICA
              </h5>
              <h2 class="card-subtitle text-center fst-italic fw-bold text-warning">
                GRATIS
              </h2>
              <button class="btn text-white w-100 mt-5" style="background-color: #fa9300" type="button" id="button-addon1">
                SELECCIONAR
              </button>
            </div>
            <p class="card-text text-center">EXPOSICIÓN BAJA</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">Foto estándar en listado</p>
            <p class="card-text text-center">Vigencia 60 días</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <button class="btn btn-outline-warning w-100 mt-5 border-warning mb-4" style="color: #fa9300" type="button" id="button-addon1" onclick="AgregarHtml1(btnIngresar)">
              SELECCIONAR
            </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <a class="d-flex justify-content-end p-2" style="color: #fa9300" href="#">Ver Ejemplo</a>
              <h5 class="card-title text-center text-secondary fw-semibold">
                SIMPLE
              </h5>
              <h2 class="card-subtitle text-center fst-italic fw-bold text-warning">
                S/ 59
              </h2>
              <h5 class="text-center text-secondary fw-semibold">CON IGV</h5>
              <button class="btn text-white w-100 mt-3" style="background-color: #fa9300" type="button" id="button-addon1">
                SELECCIONAR
              </button>
            </div>
            <p class="card-text text-center text-card">EXPOSICIÓN MEDIA</p>
            <p class="card-text text-center text-card">-</p>
            <p class="card-text text-center text-card">
              Foto estándar en listado
            </p>
            <p class="card-text text-center text-card">Vigencia 60 días</p>
            <p class="card-text text-center text-card">10 fotos en ficha</p>
            <p class="card-text text-center text-card">Video de youtube</p>
            <p class="card-text text-center text-card">-</p>
            <p class="card-text text-center text-card">-</p>
            <p class="card-text text-center text-card">-</p>
            <p class="card-text text-center text-card">-</p>
            <button class="btn btn-outline-warning w-100 mt-5 border-warning mb-4" style="color: #fa9300" type="button" id="button-addon1" onclick="AgregarHtml1(btnIngresar)">
              SELECCIONAR
            </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-info border-3">
            <div class="card-body">
              <a class="d-flex justify-content-end p-2" style="color: #fa9300" href="#">Ver Ejemplo</a>
              <h5 class="card-title text-center text-secondary fw-semibold">
                DESTACADO
              </h5>
              <h2 class="card-subtitle text-center fst-italic fw-bold text-warning">
                S/ 99
              </h2>
              <h5 class="text-center text-secondary fw-semibold">CON IGV</h5>
              <button class="btn text-white w-100 mt-3" style="background-color: #fa9300" type="button" id="button-addon1">
                SELECCIONAR
              </button>
            </div>
            <p class="card-text text-center">EXPOSIÓN ALTA</p>
            <p class="card-text text-center">Estudio de placa gratuito</p>
            <p class="card-text text-center">Foto grande en listado</p>
            <p class="card-text text-center">Vigencia 60 días</p>
            <p class="card-text text-center">15 Fotos en ficha</p>
            <p class="card-text text-center">Video de youtube</p>
            <p class="card-text text-center">Pasador de fotos</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <p class="card-text text-center">-</p>
            <button class="btn btn-outline-warning w-100 mt-5 border-warning mb-4" style="color: #fa9300" type="button" id="button-addon1" onclick="AgregarHtml1(btnIngresar)">
              SELECCIONAR
            </button>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 border-3 border-white">
            <div class="card-body text-white bg-black-card">
              <a class="d-flex justify-content-end p-2" style="color: #fa9300" href="#">Ver Ejemplo</a>
              <h5 class="card-title text-center">PREMIUM</h5>
              <h2 class="card-subtitle text-center fst-italic fw-bold">
                S/ 129
              </h2>
              <h5 class="text-center">CON IGV</h5>
              <button class="btn text-white w-100 mt-3" style="background-color: #fa9300" type="button" id="button-addon1">
                SELECCIONAR
              </button>
            </div>
            <p class="card-text text-center mt-4">EXPOSICIÓN MUY ALTA</p>
            <p class="card-text text-center">Estudio de placa gratuito</p>
            <p class="card-text text-center">Foto grande en listado</p>
            <p class="card-text text-center">Vigencia 75 días</p>
            <p class="card-text text-center">20 Fotos en ficha</p>
            <p class="card-text text-center">Video de youtube</p>
            <p class="card-text text-center">Pasador de fotos</p>
            <p class="card-text text-center">Destaque en portada</p>
            <p class="card-text text-center">Subtítulos en listado</p>
            <p class="card-text text-center">Etiquetas en resultados</p>
            <button class="btn btn-outline-warning mt-5 border-warning mb-4" style="color: #fa9300" type="button" id="button-addon1" onclick="AgregarHtml1(btnIngresar)">
              SELECCIONAR
            </button>
          </div>
        </div>
      </div>
    </div>

    <br />
  </section>
  <br />
  <section>
    <div class="container d-flex justify-content-center">

      <a href="{{route('compra_venta')}}">
        <img class="img-fluid" src="{{asset('images/footer.webp')}}" alt="" />
      </a>

    </div>
  </section>
  <br />
  <section class="images-footer d-flex p-2 justify-content-center align-items-center">
    <p class="text pt-1">Compras 100% seguras con: &nbsp</p>
    <a href="https://pagoefectivo.pe/">
      <img src="{{asset('images/pago.png')}}" alt="Logo de la compañia" class="icon-pago" />
    </a>
    <a href="https://www.visa.com.pe/">
      <img src="{{asset('images/visa.png')}}" alt="Logo de la compañia" class="icon-pago" />
    </a>
    <a href="https://www.mastercard.com.pe/es-pe.html">
      <img src="{{asset('images/mastercad.png')}}" alt="Logo de la compañia" class="icon-pago" />
    </a>
    <p class="text mt-1">Autorizado por Visa para realizar transacciones electronicas</p>
  </section>