<x-layouts.app title="Home">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <x-layouts.navegacion></x-layouts.navegacion>
    <x-home.cabecera></x-home.cabecera>
    <section id="hero">
        <div class="container text-center">
            <h2 class="bauto text-center m-3">Busca autos por</h2>



            <div class="row flex-wrap justify-content-center">
                
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/camionetas-suv.svg')}}" alt="" /> suv
                    </a>
                </div>
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/hatchback.svg')}}" alt="" /> hatchback
                    </a>
                </div>
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/vans.svg')}}" alt="" /> vans
                    </a>
                </div>

                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/station-wagon.svg')}}" alt="" /> s.wagon
                    </a>
                </div>
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/sedan.svg')}}" alt="" /> sedan
                    </a>
                </div>
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/deportivo.svg')}}" alt="" /> deportivo
                    </a>
                </div>
                <div class="icon-tipo">
                    <a href="" class="nav-icon">
                        <img src="{{asset('icons/pick-up.svg')}}" alt="" /> pick-up
                    </a>
                </div>
            </div>
    </section>

    <section id="" class="mb-5 mt-5">
        <div class="container d-flex justify-content-between pb-4">
            <h2 class="bauto">Avisos destacados</h2>
            <button type="button" class="btn btn-outline-warning">Ver mas avisos</button>
        </div>
        <div class="container row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 row-cols-xl-4 m-auto">
             @foreach ($marcas as $item)   
            <div class="col">
                <div class="card">
                     <img src="{{asset("images/Carros/$item->imagen.webp")}}" class="card-img-top" alt="" />  
                    <div class="card-body">
                         <h5 class="card-title">{{$item->marca}}</h5>   
                         <span>{{$item->Descripcion}}</span> 
                       <p>{{$item->Precio}}</p>  
                    </div>
                </div>
            </div>
              @endforeach  

        </div>
    </section>

    <section id="" class="mb-5 mt-5">
        <div class="container d-flex justify-content-between pb-4">
            <h2 class="bauto">Avisos de Motos</h2>
            <button type="button" class="btn btn-outline-warning">Ver mas Motos</button>
        </div>           
        <div class="container row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 row-cols-xl-4 m-auto">
          {{-- @foreach ($motos as $item)  --}}
            <div class="col">
                <div class="card">
                    {{-- <img src="{{asset("images/Moto/$item->imagen.webp")}}" class="card-img-top" alt="ssenda" />  --}}
                    {{-- <img src="{{asset("images/Moto/bmw.webp")}}" class="card-img-top" alt="ssenda" /> --}}
                    <div class="card-body">
                        {{-- <h5 class="card-title">{{$item->nombre}}</h5>   --}}
                         {{-- <h5 class="card-title">Ssenda Matrix 150</h5>   --}}
                        {{-- <span>{{$item->Descripcion}}</span>   --}}
                         {{-- <span>2022-Automática</span>   --}}
                        {{-- <p>{{$item->Precio}}</p>  --}}
                         {{-- <p>US$ 1,721</p>  --}}
                    </div>
                </div>
            </div>
            {{-- @endforeach   --}}

            {{-- <div class="col"> 
                <div class="card">
                    <img src="{{asset('images/Moto/ducati.webp')}}" class="card-img-top" alt="ducati" />
                    <div class="card-body">
                        <h5 class="card-title">Ducati Multiestrada Enduro 950</h5>
                        <span>2018-Mecánica-4900 kms</span>
                        <p>US$ 16,000</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/Moto/pulsar.webp')}}" class="card-img-top" alt="pulsar" />
                    <div class="card-body">
                        <h5 class="card-title">Pulsar Rs200</h5>
                        <span>2022-Mecánica</span>
                        <p>US$ 4,617</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/Moto/ssenda.webp')}}" class="card-img-top" alt="ct" />
                    <div class="card-body">
                        <h5 class="card-title">Ct 125</h5>
                        <span>2022-Mecánica</span>
                        <p>US$ 1,450</p>
                    </div>
                </div>
            </div>--}}   
        </div>
    </section>
    <section id="" class="mb-5 mt-5">
        <div class="buses y camiones">
            <div class="container d-flex justify-content-between pb-4">
                <h2 class="bauto">Avisos de Camiones</h2>
                <button type="button" class="btn btn-outline-warning">Ver mas Camiones</button>
            </div>
            <div class="container row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 row-cols-xl-4 m-auto">
                {{-- @foreach ($camione as $item) --}}
                <div class="col">
                    <div class="card">
                        {{-- <img src="{{asset("images/Camion/$item->imagen.webp")}}" class="card-img-top" alt="ssenda" /> --}}
                        {{-- <img src="{{asset("images/Camion/hino.webp")}}" class="card-img-top" alt="ssenda" /> --}}
                        <div class="card-body">
                            {{-- <h5 class="card-title">{{$item->marca}}</h5> --}}
                            {{-- <h5 class="card-title">Hino</h5> --}}
                            {{-- <span>{{$item->Descripcion}}</span> --}}
                            {{-- <span>2023-Mecánica-5,614 kms</span> --}}
                            {{-- <p>{{$item->Precio}}</p>                 --}}
                            {{-- <p>US$ 125,000</p> --}}
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
                {{-- <div class="col"> 
                    <div class="card">
                        <img src="{{asset('images/Camion/internacional.webp')}}" class="card-img-top" alt="pulsar" />
                        <div class="card-body">
                            <h5 class="card-title">International 7600 sba 6x4</h5>
                            <span>2008-Mecánica-600,000 kms</span>
                            <p>US$ 39,000</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/Camion/hyundai.webp')}}" class="card-img-top" alt="pulsar" />
                        <div class="card-body">
                            <h5 class="card-title">Hyundai Hd 78</h5>
                            <span>2017-Mecánica-21,733 kms</span>
                            <p>US$ 34,900</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/Camion/kia.webp')}}" class="card-img-top" alt="pulsar" />
                        <div class="card-body">
                            <h5 class="card-title">Kia K2700</h5>
                            <span>2013-Mecánica-203,154 kms</span>
                            <p>US$ 13,900</p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <section id="" class="mb-5 mt-5">
        <div class="noticias">
            <div class="container d-flex justify-content-between pb-4">
                <h2 class="bauto">Ultimas Noticias</h2>
                <button type="button" class="btn btn-outline-warning">Ver mas Noticias</button>
            </div>
            <div class="container d-flex justify-content-center m-auto row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3 g-3">
                {{-- @foreach ($noticias as $item) --}}
                <div class="col">
                    <div class="card">
                        {{-- <img src="{{asset("images/Noticia/$item->imagen.webp")}}" class="card-img-top" alt="ssenda" /> --}}
                        {{-- <img src="{{asset('images/Noticia/destinos.webp')}}" class="card-img-top" alt="pulsar" />  --}}
                        <div class="card-body">
                            <p>
                                {{-- {{$item->Descripcion}} --}}
                                {{-- Abril 5,2023 Semana Santa 2023:5 destinos ideales para visitar para visitar el próximo fin --}}
                            </p>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
                {{-- <div class="col">
                    <div class="card">
                        <img src="{{asset('images/Noticia/reduce.webp')}}" class="card-img-top" alt="pulsar" />
                        <div class="card-body">
                            <p>
                                Abril 5,2023 Semana Santa 2023: reduce los riesgos antes de
                                viajar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{asset('images/Noticia/derrapar.webp')}}" class="card-img-top" alt="pulsar" />
                        <div class="card-body">
                            <p>
                                Marzo 31,2023 Drifting: caracteristica de un auto para
                                derrapar.
                            </p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <section class="images-footer d-flex p-2 justify-content-center align-items-center">
        <p class="text pt-1">Compras 100% seguras con: &nbsp</p>
        <a href="https://pagoefectivo.pe/">
            <img src="{{asset('images/pago.png')}}" alt="Logo de la compañia" class="icon-pago" />
        </a>
        <a href="https://www.visa.com.pe/">
            <img src="{{asset('images/visa.png')}}" alt="Logo de la compañia" class="icon-pago" />
        </a>
        <a href="https://www.mastercard.com.pe/es-pe.html">
            <img src="{{asset('images/mastercad.png')}}" alt="Logo de la compañia" class="icon-pago" />
        </a>
    </section>

    <x-layouts.footer></x-layouts.footer>
    <div id="f-reg-log"></div>
    <script src="{{asset('js/i-login.js')}}"></script>
    <script src="{{asset('js/i_registro.js')}}"></script>
    <script src="{{asset('js/homeresp.js')}}"></script>
</x-layouts.app>