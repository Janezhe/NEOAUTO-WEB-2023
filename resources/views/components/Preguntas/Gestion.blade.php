<body class="" cz-shortcut-listen="true">
    <div></div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZJSDV"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Managenoscript) -->
    
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
                    <li title="Central de Ayuda">
                        
                        <a href="{{route('Preguntas')}}">Central de Ayuda</a>
                        
                    </li>
            
                    <li title="Vendedor">
                        
                        <a href="{{route('vendedor')}}">Vendedor</a>
                        
                    </li>
            
                    <li title="Gestión de avisos y cuenta">
                        
                        <a href="{{route('Gestion')}}">Gestión de avisos y cuenta</a>
                        
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
                        <h1>Gestión de avisos y cuenta</h1>
                    </header>
                    <ul class="article-list">                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Contra')}}" class="article-list-link">¿Cómo recuperar mi contraseña?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Cambio_contra')}}" class="article-list-link">¿Cómo cambio la contraseña?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Editar_Aviso')}}" class="article-list-link">¿Cómo edito mi aviso?</a>
                            
                        </li>
                        
                        <li class="article-list-item ">
                            
                            <a href="{{route('Activar_Cuenta')}}" class="article-list-link">¿Por qué necesito activar mi cuenta de usuario?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Editar_Perfil')}}" class="article-list-link">¿Cómo edito mi perfil?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Retirar_Aviso')}}" class="article-list-link">Ya vendí mi vehículo ¿Cómo retiro mi aviso?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Cerrar_Publicacion')}}" class="article-list-link"> ¿Cuándo es el cierre para las publicaciones impresas?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Facturacion')}}" class="article-list-link">¿Cómo cambio los datos en la facturación?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Avisos_Baja')}}" class="article-list-link">¿Qué son avisos de Baja?</a>
                            
                        </li>
                    
                        <li class="article-list-item ">
                            
                            <a href="{{route('Error_aviso')}}" class="article-list-link">¿Qué debo hacer si ocurrió un error al publicar un aviso?</a>
                            
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