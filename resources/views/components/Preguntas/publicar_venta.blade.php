
<body class="" cz-shortcut-listen="true">
    <div></div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZJSDV"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                    <li title="Vendedor">
                        <a href="{{route('vendedor')}}">Vendedor</a>                
                    </li>    
                    <li title="¿ Cómo publicar la venta de mi vehículo ?">                
                        <a href="{{route('publicar_venta')}}">¿ Cómo publicar la venta de mi vehículo ?</a>                
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
                        <h1>¿ Cómo publicar la venta de mi vehículo ?</h1>
                    </header>          
                    <ul class="article-list">              
                        <li class="article-list-item ">                    
                            <a href="{{route('publicar_vehiculo')}}" class="article-list-link">¿Cómo publicar un vehículo en TUAUTOpe?</a>                    
                        </li>              
                        <li class="article-list-item ">                    
                            <a href="{{route('subir_foto')}}" class="article-list-link">¿Cómo subir la foto de mi aviso?</a>                    
                        </li>
                        <li class="article-list-item ">                    
                            <a href="{{route('agregar')}}" class="article-list-link">¿Cómo puedo agregar accesorios a mi aviso web?</a>                    
                        </li>          
                        <li class="article-list-item ">                    
                            <a href="{{route('Informacion')}}" class="article-list-link">¿Cómo puedo agregar más información en mi aviso web?</a>
                        </li>              
                        <li class="article-list-item ">                    
                            <a href="{{route('publique')}}" class="article-list-link">¿Qué debo hacer si la foto de mi aviso no es la que publiqué?</a>                    
                        </li>                
                        <li class="article-list-item ">                
                            <a href="{{route('pago')}}" class="article-list-link">¿Qué formas de pago existen?</a>                    
                        </li>              
                        <li class="article-list-item ">                    
                            <a href="{{route('Activos')}}" class="article-list-link">¿Qué son avisos activos?</a>                    
                        </li>              
                        <li class="article-list-item ">                    
                            <a href="{{route('Editar')}}" class="article-list-link">¿Puedo editar un aviso impreso?</a>                    
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