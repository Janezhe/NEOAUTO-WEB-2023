<!--Cuerpo principal-->
<body class="">
    <header class="header">
        <div class="logo">
            <a title="Inicio" href="{{route('inicio')}}">
                <img src="{{asset('images/Logo1.webp')}}" alt="Página principal del Centro de ayuda de Central de Ayuda">
            </a>
        </div>
        <div class="nav-wrapper">
            <button class="menu-button" aria-controls="user-nav" aria-expanded="false" aria-label="Abrir/cerrar menú de navegación">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" focusable="false" viewBox="0 0 16 16" class="icon-menu">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" d="M1.5 3.5h13m-13 4h13m-13 4h13"></path>
                </svg>
            </button>
            <a rel="nofollow" data-auth-action="signin" title="Abre un cuadro de diálogo" role="button" href="">
                Iniciar sesión
            </a>
        </div>
    </header>
    <main role="main">
        <div class="container-divider"></div>
        <div class="container">
            <nav class="sub-nav">
                <ol class="breadcrumbs">
                    <li title="Central de Ayuda"><a href="{{route('Preguntas')}}">Central de Ayuda</a></li>
                    <li title="Comprador"><a href="{{route('comprador')}}">Comprador</a></li>
                    <li title="Cuenta"><a href="{{route('Cuenta')}}">Cuenta</a></li>
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
                        <h1>Cuenta</h1>                        
                    </header>            
                    <ul class="article-list">
                        <li class="article-list-item "><a href="{{route('registro_cuenta')}}" class="article-list-link">¿Cómo me registro en NeoAuto?</a></li>
                        <li class="article-list-item "><a href="{{route('neo_registro')}}" class="article-list-link">¿Cómo me registro?</a></li>
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
 