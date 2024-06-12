<body class="" cz-shortcut-listen="true">
    <div></div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZJSDV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="logo">
            <a title="Inicio" href="{{route('Preguntas')}}">
                <img src="{{asset('images/Logo1.webp')}}" alt="Página principal del Centro de ayuda de Central de Ayuda">
            </a>
        </div>
        <div class="nav-wrapper">
            <button class="menu-button" aria-controls="user-nav" aria-expanded="false" aria-label="Abrir/cerrar menú de navegación">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" focusable="false" viewBox="0 0 16 16" class="icon-menu">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" d="M1.5 3.5h13m-13 4h13m-13 4h13"></path>
                </svg>
            </button>
            <a rel="nofollow" data-auth-action="signin" title="Abre un cuadro de diálogo" role="button" href="{{route('publicacion')}}">
                Iniciar sesión
            </a>
        </div>
    </header>
    <main role="main">
        <div class="container-divider"></div>
        <div class="container">
            <nav class="sub-nav">
                <ol class="breadcrumbs">
                    <li title="Central de Ayuda">

                        <a href="{{route('Preguntas')}}">Central de Ayuda</a>

                    </li>

                    <li title="Cuentas, privacidad y términos de uso">

                        <a href="{{route('cuentas')}}">Cuentas, privacidad y términos de uso</a>

                    </li>

                    <li title="Cuentas, privacidad y términos de uso">

                        <a href="{{route('Privacidad_menu')}}">Cuentas, privacidad y términos de uso</a>

                    </li>
                </ol>
                <div class="search-container">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="search-icon">
                        <circle cx="4.5" cy="4.5" r="4" fill="none" stroke="currentColor"></circle>
                        <path stroke="currentColor" stroke-linecap="round" d="M11 11L7.5 7.5"></path>
                    </svg>
                    <form role="search" class="search" data-search="" action="/hc/es/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓" autocomplete="off"><input type="search" name="query" id="query" placeholder="Buscar" aria-label="Buscar"></form>
                </div>
            </nav>
            <div class="section-container">
                <section id="main-content" class="section-content">
                    <header class="page-header">
                        <h1>Cuentas, privacidad y términos de uso</h1>
                    </header>
                    <ul class="article-list">
                        <li class="article-list-item ">

                            <a href="{{route('Aliados')}}" class="article-list-link">Aliados comerciales de TUAUTOpe SAC</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Financiamiento')}}" class="article-list-link">Financiamiento Santander Consumer</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Consentimiento')}}" class="article-list-link">Consentimiento para fines adicionales</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Cokkie')}}" class="article-list-link">Política de Cookies</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Privacidad')}}" class="article-list-link">POLÍTICA DE PRIVACIDAD DE TUAUTOpe</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Politicas')}}" class="article-list-link">Políticas de Publicación</a>

                        </li>

                        <li class="article-list-item ">

                            <a href="{{route('Terminos_condiciones')}}" class="article-list-link"> Condiciones Generales de Uso</a>

                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer-inner">
            <a title="Inicio" href="{{route('Preguntas')}}">Central de Ayuda</a>
            <div class="footer-language-selector"></div>
        </div>
    </footer>
</body>