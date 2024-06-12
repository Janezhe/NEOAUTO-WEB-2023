<header style="margin-bottom: 0">
    <nav class="navbar navbar-expand-lg p-4 bg-black">
        <div class="container">
            <a class="navbar-brand" href="{{route('inicio')}}">
                <img src="{{asset('images/Logo2.webp')}}" alt="Bootstrap" />
            </a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex me-auto" role="Buscar">
                    <input class="form-control mb-2 bg-white" type="Buscar" placeholder="Buscar por marca" aria-label="Buscar" />
                </form>
                <ul class="navbar-nav me-4 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" id="btnRegistrar" aria-current="page" href="#">Registrate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" id="btnIngresar" onclick="AgregarHtml1(btnIngresar)" href="#">Ingresa</a>
                    </li>
                </ul>
                <a type="button" class="btn-vender btn btn-warning text-light" href="{{route('vender')}}">Vende tu Vehiculo</a>
            </div>  
        </div>
    </nav>
</header>