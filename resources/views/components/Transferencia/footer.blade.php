<footer class="bg-white text-black text-center text-lg-start">
    <div class="container p-4">
        <div class="row align-items-center">
            <div class="col-md-auto mb-4 mb-md-0">
                <p class="text-center mb-0 text-black" style="color: white">
                    © {{date('Y')}} TUAUTOpe
                </p>
            </div>
            <div class="col-md-auto mb-4 mb-md-0 ms-auto">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{route('Cokkie')}}" class="me-4 text-dark text-decoration-none">Política de Cookies</a>
                    <div class="me-4">|</div>
                    <a href="{{route('Terminos_condiciones')}}" class="me-4 text-dark text-decoration-none">Términos de uso</a>
                    <div class="me-4">|</div>
                    <a href="{{route('Privacidad')}}" class="me-4 text-dark text-decoration-none">Políticas de privacidad &nbsp;</a>
                    <div class="me-4">|</div>
                    <a href="{{route('Reclamo')}}">
                        <img src="{{asset('images/rclamaciones.webp')}}" alt="logo" width="88" height="50" class="ms-4" /></a>
                </div>
            </div>
        </div>
    </div>
</footer>