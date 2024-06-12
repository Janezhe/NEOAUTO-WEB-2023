<!-- CABEZERA PRINCIPAL -->

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

<!-- CUERPO DE PAGINA -->

<main role="main">
    <h1 class="visibility-hidden">Central de Ayuda</h1>

    <section id="main-content" class="section hero">
        <div class="hero-inner">
            <a class="titu">¿En qué podemos ayudarte?</a>
            <h2 class="visibility-hidden">Búsqueda</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12" class="search-icon" aria-hidden="true">
                <circle cx="4.5" cy="4.5" r="4" fill="none" stroke="currentColor"></circle>
                <path stroke="currentColor" stroke-linecap="round" d="M11 11L7.5 7.5"></path>
            </svg>
            <form role="search" class="search search-full" data-search="" data-instant="true" autocomplete="off" action="/hc/es/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓" autocomplete="off"><input type="search" name="query" id="query" placeholder="Buscar" autocomplete="off" aria-label="Buscar"></form>
        </div>
    </section>

    <div class="container">
        <section class="section knowledge-base">
            <h2 class="visibility-hidden">Categorías</h2>
            <section class="categories blocks">
                <ul class="blocks-list">
                    <li class="blocks-item">
                        <a href="{{route('comprador')}}"><img src="//theme.zdassets.com/theme_assets/123476/2d77ccbe2e81698cf54cae305aecb1476238c7fd.png"></a>
                    </li>
                    <li class="blocks-item">
                        <a href="{{route('vendedor')}}"><img src="//theme.zdassets.com/theme_assets/123476/492ff50f2eace139d8b229dae8cdee3e7bcf9663.png"></a>
                    </li>
                    <li class="blocks-item">
                        <a href="{{route('publicacion')}}"><img src="//theme.zdassets.com/theme_assets/123476/dc5c3b8430fb93bdece269a3f415cf5a9e9a3093.png"></a>
                    </li>
                    <li class="blocks-item">
                        <a href="{{route('Medios')}}"><img src="//theme.zdassets.com/theme_assets/123476/0c6e49bb76ec9416d3ac82ff16ea3381e071d744.png"></a>
                    </li>
                    <li class="blocks-item">
                        <a href="{{route('cuentas')}}"><img src="//theme.zdassets.com/theme_assets/123476/beb6fdb082c22e8c1ce8a228e0d600b621a9461d.png"></a>
                    </li>
                </ul>

            </section>


        </section>



        <section class="section home-section activity">

            <div data-app="recent-activity" data-url="/hc/api/internal/recent_activities?locale=es">
                <div class="recent-activity">
                    <h2 class="recent-activity-header">Actividad reciente</h2>
                    <div role="status" class="recent-activity-list">
                        <section class="recent-activity-item" data-recent-activity-action="article_created">
                            <h3><a class="recent-activity-item-parent" href="{{route('cuentas')}}">Cuentas, privacidad y términos de uso</a></h3>
                            <a class="recent-activity-item-link" href="{{route('Aliados')}}">Aliados comerciales de TUAUTOpe SAC</a>
                            <div class="recent-activity-item-meta">
                                <div class="recent-activity-item-time">Artículo creado hace 20 días</div>

                                <div class="recent-activity-item-comment">
                                    <span class="recent-activity-comment-icon" aria-hidden="true" data-comment-count="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                            <path fill="none" stroke="currentColor" d="M1 .5h10c.3 0 .5.2.5.5v7c0 .3-.2.5-.5.5H6l-2.6 2.6c-.3.3-.9.1-.9-.4V8.5H1C.7 8.5.5 8.3.5 8V1C.5.7.7.5 1 .5z"></path>
                                        </svg>
                                    </span>
                                    <span class="recent-activity-accessibility-label">
                                        Número de comentarios: 0
                                    </span>
                                </div>

                            </div>
                        </section>
                        <section class="recent-activity-item" data-recent-activity-action="article_created">
                            <h3><a class="recent-activity-item-parent" href="{{route('Privacidad_menu')}}">Cuentas, privacidad y términos de uso</a></h3>
                            <a class="recent-activity-item-link" href="{{route('Financiamiento')}}">Financiamiento Santander Consumer</a>
                            <div class="recent-activity-item-meta">
                                <div class="recent-activity-item-time">Artículo creado hace 1 año</div>

                                <div class="recent-activity-item-comment">
                                    <span class="recent-activity-comment-icon" aria-hidden="true" data-comment-count="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                            <path fill="none" stroke="currentColor" d="M1 .5h10c.3 0 .5.2.5.5v7c0 .3-.2.5-.5.5H6l-2.6 2.6c-.3.3-.9.1-.9-.4V8.5H1C.7 8.5.5 8.3.5 8V1C.5.7.7.5 1 .5z"></path>
                                        </svg>
                                    </span>
                                    <span class="recent-activity-accessibility-label">
                                        Número de comentarios: 0
                                    </span>
                                </div>

                            </div>
                        </section>
                        <section class="recent-activity-item" data-recent-activity-action="article_created">
                            <h3><a class="recent-activity-item-parent" href="{{route('publicar_venta')}}">¿Cómo publicar la venta de mi vehículo?</a></h3>
                            <a class="recent-activity-item-link" href="{{route('publicar_vehiculo')}}">¿Cómo publicar un vehículo en TUAUTOpe?</a>
                            <div class="recent-activity-item-meta">
                                <div class="recent-activity-item-time">Artículo creado hace 2 años</div>

                                <div class="recent-activity-item-comment">
                                    <span class="recent-activity-comment-icon" aria-hidden="true" data-comment-count="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                            <path fill="none" stroke="currentColor" d="M1 .5h10c.3 0 .5.2.5.5v7c0 .3-.2.5-.5.5H6l-2.6 2.6c-.3.3-.9.1-.9-.4V8.5H1C.7 8.5.5 8.3.5 8V1C.5.7.7.5 1 .5z"></path>
                                        </svg>
                                    </span>
                                    <span class="recent-activity-accessibility-label">
                                        Número de comentarios: 0
                                    </span>
                                </div>

                            </div>
                        </section>
                        <section class="recent-activity-item" data-recent-activity-action="article_created">
                            <h3><a class="recent-activity-item-parent" href="{{route('cuentas')}}">Cuentas, privacidad y términos de uso</a></h3>
                            <a class="recent-activity-item-link" href="{{route('Privacidad_menu')}}">Consentimiento para fines adicionales</a>
                            <div class="recent-activity-item-meta">
                                <div class="recent-activity-item-time">Artículo creado hace 2 años</div>

                                <div class="recent-activity-item-comment">
                                    <span class="recent-activity-comment-icon" aria-hidden="true" data-comment-count="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                            <path fill="none" stroke="currentColor" d="M1 .5h10c.3 0 .5.2.5.5v7c0 .3-.2.5-.5.5H6l-2.6 2.6c-.3.3-.9.1-.9-.4V8.5H1C.7 8.5.5 8.3.5 8V1C.5.7.7.5 1 .5z"></path>
                                        </svg>
                                    </span>
                                    <span class="recent-activity-accessibility-label">
                                        Número de comentarios: 0
                                    </span>
                                </div>

                            </div>
                        </section>
                        <section class="recent-activity-item" data-recent-activity-action="article_created">
                            <h3><a class="recent-activity-item-parent" href="{{route('Factura_menu')}}">Facturación</a></h3>
                            <a class="recent-activity-item-link" href="{{route('Recomendaciones')}}">Recomendaciones para el usuario</a>
                            <div class="recent-activity-item-meta">
                                <div class="recent-activity-item-time">Artículo creado hace 3 años</div>

                                <div class="recent-activity-item-comment">
                                    <span class="recent-activity-comment-icon" aria-hidden="true" data-comment-count="0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" focusable="false" viewBox="0 0 12 12">
                                            <path fill="none" stroke="currentColor" d="M1 .5h10c.3 0 .5.2.5.5v7c0 .3-.2.5-.5.5H6l-2.6 2.6c-.3.3-.9.1-.9-.4V8.5H1C.7 8.5.5 8.3.5 8V1C.5.7.7.5 1 .5z"></path>
                                        </svg>
                                    </span>
                                    <span class="recent-activity-accessibility-label">
                                        Número de comentarios: 0
                                    </span>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="recent-activity-no-activities" style="display: none;"></div>
                    <div class="recent-activity-loader" style="display: none;">...</div>
                    <div class="recent-activity-controls" style="">
                        <a href="#" data-recent-activity-seemore="">
                            Ver más
                            <span style="
                                clip: rect(0 0 0 0);
                                clip-path: inset(50%);
                                height: 1px;
                                overflow: hidden;
                                position: absolute;
                                white-space: nowrap;
                                width: 1px;">
                                elementos de la actividad reciente
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- FOOTER -->

<footer class="footer">
    <div class="footer-inner">
        <a title="Inicio" href="{{route('Preguntas')}}">Central de Ayuda</a>
        <div class="footer-language-selector">
        </div>
    </div>
</footer>