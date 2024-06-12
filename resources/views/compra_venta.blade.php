<x-layouts.app title="Compra y Venta de autos y motos | TUAUTOpe">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/vender.css')}}">
    <x-layouts.nav-vender />
    <x-compra_venta.seccion />
    <x-compra_venta.footer />
    <div id="f-reg-log"></div>
    <script src="{{asset('js/i-login.js')}}"></script>
    <script src="{{asset('js/i_registro.js')}}"></script>
    <script src="{{asset('js/homeresp.js')}}"></script>
</x-layouts.app>