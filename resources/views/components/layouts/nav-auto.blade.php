<header>

    <script id="navegg" type="text/javascript" src="//tag.navdmp.com/tm23894.js"></script>

    <link href="https://cds.neoauto.pe/neoauto2/css/topbar_styles.css?20230516121747" rel="stylesheet" type="text/css" media="all">
    <div class="top-gec">
        <div class="w980"><a href="http://elcomercio.pe" target="_blank" title="Grupo El Comercio" class="logo-gec"></a>
            <h4>Los clasificados Automotores del Grupo El Comercio</h4>
        </div>
    </div> <!-- END TOP BAR-->
    <div class="port-wrap-header2">

        <link href="https://cds.neoauto.pe/neoauto2/css/search-styles.css?20230516121747" rel="stylesheet" type="text/css" media="all">

        <div class="neov3_search_port-header2">
            <a href="{{route('inicio')}}">
                
            </a>

            <div class="neov3_search_port-header-2rt neov3_search_fl-rt">
                <div class="neov3_search_port-header-reg neov3_search_fl-rt">

                    <a class="link_login" href="javascript:;">Ingresar</a>
                    <em>|</em>
                    <a class="link_sign_in" href="javascript:;">Registrarse</a>

                </div>

            </div>

            <div class="neov3_search_port-header-form neov3_search_fl-lf">
                <form method="POST" id="frmSearch" action="/busqueda-autos/">
                    <div class="neov3_search_fl-lf frmSearch_divsel">
                        <select name="estado">
                            <option value="" selected="selected">Nuevos y Usados</option>
                            <option value="nuevos">Nuevos</option>
                            <option value="usados">Usados</option>
                        </select>
                    </div>

                    <input type="text" name="keyword" value="" id="validateSearch" class="search-text" placeholder="Buscar por descripción o código de aviso" autocomplete="off" size="31" buscar="">
                    <div class="btndiv neov3_search_fl-lf">
                        <input type="submit" name="lnkvolver" value="Buscar" class="btn buttonsty">
                    </div>
                </form>
            </div>

            <ul class="social-redesNeo">
                <li>
                    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fneoauto.pe&amp;width=74&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:74px; height:35px;" allowtransparency="true"></iframe>
                </li>
                <li>
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="twitter-follow-button twitter-follow-button-rendered" style="position: static; visibility: visible; width: 76px; height: 20px;" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.2b2d73daf636805223fb11d48f3e94f7.es.html#dnt=false&amp;id=twitter-widget-0&amp;lang=es&amp;screen_name=NeoAutocom&amp;show_count=false&amp;show_screen_name=false&amp;size=m&amp;time=1684358547672" data-screen-name="NeoAutocom"></iframe>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");
                    </script>
                </li>
                <li>
                    <div id="___plusone_0" style="position: absolute; width: 450px; left: -10000px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position:absolute;top:-10000px;width:450px;margin:0px;border-style:none" tabindex="0" vspace="0" width="100%" id="I0_1684358544314" name="I0_1684358544314" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=none&amp;hl=es&amp;origin=https%3A%2F%2Fneoauto.com&amp;url=http%3A%2F%2Fneoauto.com%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fabc-static%2F_%2Fjs%2Fk%3Dgapi.lb.es.3Hvfq-qILUY.O%2Fd%3D1%2Frs%3DAHpOoo8S72uoBH2c-3rWI1ONnjoWzc4NtQ%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1684358544314&amp;_gfid=I0_1684358544314&amp;parent=https%3A%2F%2Fneoauto.com&amp;pfname=&amp;rpctoken=16217880" data-gapiattached="true"></iframe></div>
                    <div class="g-plusone" data-annotation="none" data-href="http://neoauto.com/" data-gapiscan="true" data-onload="true" data-gapistub="true"></div>
                    <script type="text/javascript">
                        window.___gcfg = {
                            lang: 'es'
                        };

                        (function() {
                            var po = document.createElement('script');
                            po.type = 'text/javascript';
                            po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(po, s);
                        })();
                    </script>
                </li>
            </ul>


        </div>
        {{-- <link href="https://cds.neoauto.pe/neoauto2/css/menu-styles.css?20230516121747" rel="stylesheet" type="text/css" media="all"> --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-black">
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white fs-4" href="{{route('inicio')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-4" href="">Autos nuevos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" aria-current="page" href="{{route('Autos')}}">Autos Usados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-4" href="{{route('Motos')}}">Motos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-4" href="{{route('Noticias')}}">Noticias Tuautope</a>
                    </li>
                    <li class="nav-item position-absolute top-0 end-0 p-2 fs-4">
                        <a class="nav-link text-white" href="{{route('vender')}}">Publica tu aviso</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <div id="gad_megabanner">
            <script>
                googletag.cmd.push(function() {
                    googletag.display('gad_megabanner');
                });
            </script>
        </div>
        <div id="content" class="fix_flex">
        </div>
    </div>
</header>