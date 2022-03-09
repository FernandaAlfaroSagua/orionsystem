<!-- Contact Section Start -->
<section id="contact" class="py-16">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">
                Contacto</h2>

        </div>

        <div class="flex flex-wrap contact-form-area wow fadeInUp " data-wow-delay="0.4s">
            <div class="w-full md:w-1/2">
                <div class="contact wow fadeInLeft">
                    <div class="w-full mb-5">
                        <div class="text-box" data-wow-delay="1.2s">
                            <div class="mb-3">
                                <p class="font-medium text-gray-700 mx-3">Si desea establecer contacto con
                                    nosotros, puede
                                    comunicarse directamente o a través de nuestro formulario de contacto y a la
                                    brevedad responderemos a sus inquietudes.</p>
                            </div>
                        </div>
                    </div>

                    <form id="contactForm" method="POST" action="/assets/contact.php">
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" class="form-input rounded-full" id="name" name="name"
                                        placeholder="Nombre (requerido)" required
                                        data-error="Por favor, ingrese el nombre">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Establecimiento (requerido)" id="school"
                                        class="form-input rounded-full" name="school"
                                        data-error="Por favor, ingrese el establecimiento">

                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="RBD" id="rbd" class="form-input rounded-full"
                                        name="rbd">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Comuna (requerido)" id="comuna"
                                        class="form-input rounded-full" name="comuna" required
                                        data-error="Por favor, ingrese la comuna">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Cargo (requerido)" id="cargo"
                                        class="form-input rounded-full" name="cargo" required
                                        data-error="Por favor, ingrese el cargo">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Fono (requerido)" id="fono"
                                        class="form-input rounded-full" name="fono" required
                                        data-error="Por favor, ingrese el fono">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="email" placeholder="Email (requerido)" id="email"
                                        class="form-input rounded-full" name="email" required
                                        data-error="Por favor, ingrese el correo">
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <input type="text" placeholder="Asunto" id="asunto" class="form-input rounded-full"
                                        name="asunto">
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="mx-3">
                                    <textarea class="form-input rounded" name="mensaje" placeholder="Mensaje"
                                        id="mensaje" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="submit-button mx-3 mb-4 ">
                                    <button style="background-color:#1e40af;" class="btn" id="form-submit"
                                        type="submit"> Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="ml-3 md:ml-12 wow fadeIn">
                    <?php  require_once("map.php") ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->