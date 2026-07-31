<section class="contact-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">

                CONTÁCTANOS

            </span>

            <h2 class="section-title mt-3">

                Estamos para ayudarte

            </h2>

            <p class="section-description">

                Si tienes dudas, necesitas asesoría o deseas solicitar información,
                envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.

            </p>

        </div>

        <div class="row shadow-lg rounded-4 overflow-hidden">

            <!-- Información -->

            <div class="col-lg-4 contact-info">

                <div class="contact-content">

                    <h3>Información de contacto</h3>

                    {{-- <div class="contact-item">

                        <i class="bi bi-geo-alt-fill"></i>

                        <div>

                            <strong>Dirección</strong>

                            <p>Av. Tecnología 123, Monterrey, Nuevo León.</p>

                        </div>

                    </div> --}}

                    <div class="contact-item">

                        <i class="bi bi-telephone-fill"></i>

                        <div>

                            <strong>Teléfono</strong>

                            <p>+52 81 1234 5678</p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="bi bi-envelope-fill"></i>

                        <div>

                            <strong>Correo</strong>

                            <p>contacto@zetta.com.mx</p>

                        </div>

                    </div>

                    <div class="contact-item">

                        <i class="bi bi-clock-fill"></i>

                        <div>

                            <strong>Horario</strong>

                            <p>Lunes - Viernes<br>8:00 AM - 6:00 PM</p>

                        </div>

                    </div>

                    <i class="bi bi-headset contact-watermark"></i>

                </div>

            </div>

            <!-- Formulario -->

            <div class="col-lg-8 bg-white p-5">

                <form method="POST"
                      action="#">

                    @csrf

                    <div class="row">

                        <div class="col-md-6 mb-4">

                            <input
                                type="text"
                                name="nombre"
                                value="{{ old('nombre') }}"
                                class="form-control @error('nombre') is-invalid @enderror"
                                placeholder="Nombre">

                            @error('nombre')
                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>
                            @enderror

                        </div>

                        <div class="col-md-6 mb-4">

                            <input
                                type="email"
                                name="correo"
                                value="{{ old('correo') }}"
                                class="form-control @error('correo') is-invalid @enderror"
                                placeholder="Correo electrónico">

                            @error('correo')
                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>
                            @enderror

                        </div>

                        <div class="col-12 mb-4">

                            <input
                                type="text"
                                name="asunto"
                                value="{{ old('asunto') }}"
                                class="form-control @error('asunto') is-invalid @enderror"
                                placeholder="Asunto">

                            @error('asunto')
                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>
                            @enderror

                        </div>

                        <div class="col-12 mb-4">

                            <textarea
                                rows="7"
                                name="mensaje"
                                class="form-control @error('mensaje') is-invalid @enderror"
                                placeholder="Escribe tu mensaje...">{{ old('mensaje') }}</textarea>

                            @error('mensaje')
                            <div class="invalid-feedback">

                                {{ $message }}

                            </div>
                            @enderror

                        </div>

                        <div class="col-12">

                            <button
                                class="btn btn-zetta w-100 py-3">

                                <i class="bi bi-send-fill"></i>

                                Enviar Mensaje

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>