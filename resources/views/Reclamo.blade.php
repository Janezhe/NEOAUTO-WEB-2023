<x-layouts.app title="Libro de reclamaciones">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/Reclamo.css')}}">
    <x-layouts.nav-reclamo />
    <x-Reclamo.section />
    <x-Reclamo.footer />
    <div id="f-reg-log"></div>
    <script src="{{asset('js/i-login.js')}}"></script>
    <script src="{{asset('js/i_registro.js')}}"></script>
    <script src="{{asset('js/homeresp.js')}}"></script>
    <script src="https://kit.fontawesome.com/97195b44ec.js" crossorigin="anonymous"></script>
</x-layouts.app>