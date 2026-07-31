<section class="request-section py-5">

    <div class="container">

        <div class="row shadow-lg rounded-4 overflow-hidden">

            <!-- Panel izquierdo -->

            <div class="col-lg-4 request-info">

                <div class="request-content">

                    <h2>SOLICITA TU <span>SERVICIO</span></h2>

                    <p>

                        Cuéntanos qué necesitas y uno de nuestros
                        especialistas se pondrá en contacto contigo
                        para brindarte la mejor solución tecnológica.

                    </p>

                    <ul>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Atención rápida
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Técnicos certificados
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Soporte para empresas
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Atención personalizada
                        </li>

                    </ul>

                    <i class="bi bi-tools request-watermark"></i>

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
                                placeholder="Nombre completo">

                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-md-6 mb-4">

                            <input
                                type="text"
                                name="empresa"
                                value="{{ old('empresa') }}"
                                class="form-control"
                                placeholder="Empresa (Opcional)">

                        </div>

                        <div class="col-md-6 mb-4">

                            <input
                                type="email"
                                name="correo"
                                value="{{ old('correo') }}"
                                class="form-control @error('correo') is-invalid @enderror"
                                placeholder="Correo electrónico">

                            @error('correo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-md-6 mb-4">

                            <input
                                type="text"
                                name="telefono"
                                value="{{ old('telefono') }}"
                                class="form-control @error('telefono') is-invalid @enderror"
                                placeholder="Teléfono">

                            @error('telefono')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-12 mb-4">

                            <select
                                name="servicio"
                                class="form-select @error('servicio') is-invalid @enderror">

                                <option selected disabled>
                                    Selecciona un servicio
                                </option>

                                @foreach($tiposServicio as $servicio)

                                    <option
                                        value="{{ $servicio }}"
                                        {{ old('servicio')==$servicio ? 'selected' : '' }}>

                                        {{ $servicio }}

                                    </option>

                                @endforeach

                            </select>

                            @error('servicio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-12 mb-4">

                            <textarea
                                rows="6"
                                name="descripcion"
                                class="form-control @error('descripcion') is-invalid @enderror"
                                placeholder="Cuéntanos más detalles...">{{ old('descripcion') }}</textarea>

                            @error('descripcion')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="col-12">

                            <button
                                class="btn btn-zetta w-100 py-3">

                                <i class="bi bi-send-fill"></i>

                                Solicitar Servicio

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</section>