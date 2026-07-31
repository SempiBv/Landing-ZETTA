<nav class="navbar navbar-expand-lg bg-black navbar-dark sticky-top">

    <div class="container">

        <a class="navbar-brand" href="{{ route('inicio') }}">

            <img src="{{ asset('images/logo/LOGO_ZETTA.png') }}"
                 alt="ZETTA"
                 height="55">

        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
            id="menu">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    {{-- <a href="{{ route('inicio') }}">Inicio</a> --}}
                    <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                </li>

                <li class="nav-item">
                    {{-- <a href="{{ route('servicios') }}">Servicios</a> --}}
                    <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                </li>

            </ul>

            <a href="{{ route('solicitar-servicio') }}" class="btn btn-zetta">
                Solicitar Servicio
            </a>

        </div>

    </div>

</nav>