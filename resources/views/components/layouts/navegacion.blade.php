<header style="margin-bottom: 0">
    <nav class="navbar navbar-expand-lg p-2 bg-black">
        <div class="container">
            <a class="navbar-brand" href="{{route('inicio')}}">
                <img src="{{asset('images/logo3.webp')}}"  alt="Bootstrap" />
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex me-auto" role="Buscar">
                    <input class="form-control me-3 bg-white" type="Buscar" placeholder="Buscar por marca o modelo" aria-label="Buscar" />
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" id="btnRegistrar" aria-current="page" href="#">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary fw-bold" id="btnIngresar" onclick="AgregarHtml1(btnIngresar)" href="#">Ingresa</a>
                    </li>
                </ul>
                <a type="button" class="btn-vender btn btn-secondary text-light" href="{{route('vender')}}">Vende tu Vehiculo</a>
                <ul>
                    <li><a href="{{route('compra_venta')}}"></a></li>
                </ul>
                <ul>
                    <li><a href="{{route('Reclamo')}}"></a></li>
                </ul>
                <ul>
                    <li><a href="{{route('Transferencia')}}"></a></li>
                </ul>
                <ul>
                    <li><a href="{{route('Autos')}}"></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>