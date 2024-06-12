<x-layouts.app title="Crédito Santander Consumer - TUAUTOpe">
    <link rel="stylesheet" href="{{asset('./css/credito.css')}}">
    <x-layouts.nav-credito />
    <x-Credito.seccion />
    <x-Credito.footer />
    <div id="f-reg-log"></div>
    <script src="{{asset('js/i-login.js')}}"></script>
    <script src="{{asset('js/i_registro.js')}}"></script>
    <script src="https://kit.fontawesome.com/97195b44ec.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/homeresp.js')}}"></script>
</x-layouts.app>