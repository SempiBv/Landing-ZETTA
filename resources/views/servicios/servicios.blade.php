<section id="servicios" class="services-section py-5">

    <div class="container">

        <!-- Encabezado -->
        <div class="text-center mb-5">

            <h2 class="section-title">
                Nuestros <span>Servicios</span>
            </h2>

            <p class="section-subtitle">
                Soluciones tecnológicas diseñadas para mantener tu empresa siempre operando.
            </p>

        </div>

        <!-- Tarjetas -->
        <div class="row g-4">

            @foreach ($servicios as $servicio)

                <div class="col-lg-4 col-md-6">

                    <div class="service-card">

                        <div class="service-icon">

                            <i class="bi {{ $servicio['icono'] }}"></i>

                        </div>

                        <h4>{{ $servicio['titulo'] }}</h4>

                        <p>{{ $servicio['descripcion'] }}</p>

                        <a href="{{ route('solicitar-servicio') }}" class="service-link">

                            Solicitar servicio

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<section id="proceso" class="process-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">
                PROCESO DE ATENCIÓN
            </span>

            <h2 class="section-title mt-3">
                Así trabajamos contigo
            </h2>

            <p class="section-description">
                Nuestro proceso está diseñado para ofrecer una atención rápida,
                organizada y eficiente desde el primer contacto hasta la solución
                del problema.
            </p>

        </div>

        <div class="row g-4">

            @foreach ($proceso as $paso)

                <div class="col-xl col-lg col-md-6">

                    <div class="process-card">

                        <div class="process-number">

                            {{ $loop->iteration }}

                        </div>

                        <div class="process-icon">

                            <i class="bi {{ $paso['icono'] }}"></i>

                        </div>

                        <h4>{{ $paso['titulo'] }}</h4>

                        <p>{{ $paso['descripcion'] }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<section class="stats-section py-5">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-5">

                <span class="section-tag">

                    NUESTRA EXPERIENCIA

                </span>

                <h2 class="section-title mt-3">

                    Resultados que respaldan nuestro trabajo

                </h2>

                <p class="section-description mt-3">

                    Cada proyecto representa un compromiso con nuestros clientes.
                    Nuestra experiencia y calidad de servicio nos permiten ofrecer
                    soluciones tecnológicas confiables para empresas y particulares.

                </p>

            </div>

            <div class="col-lg-7">

                <div class="row g-4">

                    @foreach($estadisticas as $estadistica)

                        <div class="col-6">

                            <div class="stat-card">

                                <h2>

                                    {{ $estadistica['numero'] }}

                                </h2>

                                <p>

                                    {{ $estadistica['titulo'] }}

                                </p>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>