<section class="faq-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <span class="section-tag">

                PREGUNTAS FRECUENTES

            </span>

            <h2 class="section-title mt-3">

                Resolvemos tus dudas

            </h2>

            <p class="section-description">

                Encuentra respuestas a las preguntas más comunes sobre nuestros
                servicios y procesos de atención.

            </p>

        </div>

        <div class="accordion" id="faqAccordion">

            @foreach($preguntas as $index => $pregunta)

                <div class="accordion-item mb-3">

                    <h2 class="accordion-header">

                        <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faq{{ $index }}">

                            {{ $pregunta['pregunta'] }}

                        </button>

                    </h2>

                    <div id="faq{{ $index }}"
                         class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                         data-bs-parent="#faqAccordion">

                        <div class="accordion-body">

                            {{ $pregunta['respuesta'] }}

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>