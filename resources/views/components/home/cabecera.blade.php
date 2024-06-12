<section id="Link ">
    <div class="fondo">
        <br />
        <div class="paralelogramo container content-center">
            <div class="container d-flex justify-content-center">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="#">Comprar Usados</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="#">Comprar Nuevos</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="{{route('vender')}}">Quiero Vender</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link text-white" href="{{route('Credito')}}">Quiero Financiar</a>
                    </li>
                </ul>
                <br />
            </div>
            <center>
                <hr style="width: 80%" />
            </center>
            <div class="container d-flex justify-content-around" id="form__radio">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
                    <label class="form-check-label text-white" for="inlineRadio1" style="padding-right: 4rem">Autos</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
                    <label class="form-check-label text-white" for="inlineRadio2" style="padding-right: 4rem">Motos</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" />
                    <label class="form-check-label text-white" for="inlineRadio3">Buses y camiones</label>
                </div>
            </div>
            <br />
            <div class="form__search">
                <form class="bg-white p-3 rounded" id="f-search"></form>
            </div>
            <br />
        </div>
        <br />
    </div>
</section>