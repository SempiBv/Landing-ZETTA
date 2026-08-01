<footer class="footer">

    <div class="container">

        <div class="row gy-5">

            <!-- Logo -->

            <div class="col-lg-4">

                <img src="{{ asset('images/logo/LOGO_ZETTA.png') }}"
                     class="footer-logo"
                     alt="ZETTA"
                     height="150">

                <p class="footer-text mt-4">

                    Soluciones tecnológicas para empresas y particulares.
                    Brindamos soporte técnico, mantenimiento e infraestructura
                    para mantener tus sistemas siempre operando.

                </p>

            </div>

            <!-- Navegación -->

            <div class="col-lg-2">

                <h5>Navegación</h5>

                <ul>

                    <li><a href="{{ route('inicio') }}">Inicio</a></li>

                    <li><a href="{{ route('nosotros') }}">Nosotros</a></li>

                    <li><a href="{{ route('servicios') }}">Servicios</a></li>

                    <li><a href="{{ route('faq') }}">FAQ</a></li>

                    <li><a href="{{ route('contacto') }}">Contacto</a></li>

                </ul>

            </div>

            <!-- Contacto -->

            <div class="col-lg-3">

                <h5>Contacto</h5>

                <ul class="footer-contact">

                    <li>

                        <i class="bi bi-telephone-fill"></i>

                        +52 81 1234 5678

                    </li>

                    <li>

                        <i class="bi bi-envelope-fill"></i>

                        contacto@zetta.com

                    </li>

                    {{-- <li>

                        <i class="bi bi-geo-alt-fill"></i>

                        Monterrey, Nuevo León

                    </li> --}}

                </ul>

            </div>

            <!-- Redes -->

            <div class="col-lg-3">

                <h5>Síguenos</h5>

                <p class="footer-text">

                    Mantente conectado con nosotros.

                </p>

                <div class="social-icons">

                    <a href="#"><i class="bi bi-facebook"></i></a>

                    <a href="#"><i class="bi bi-instagram"></i></a>

                    <a href="#"><i class="bi bi-linkedin"></i></a>

                    <a href="#"><i class="bi bi-whatsapp"></i></a>

                </div>

            </div>

        </div>

        <hr>

        <div class="footer-bottom">

            <div class="row align-items-center">

                <div class="col-md-6">

                    © {{ date('Y') }} ZETTA. Todos los derechos reservados.

                </div>

            </div>

        </div>

    </div>

</footer>