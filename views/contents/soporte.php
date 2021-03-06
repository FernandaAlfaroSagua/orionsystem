<!-- Support Section Start -->
<section id="support" class="py-10 bg-blue-100">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-12 text-4xl text-gray-700 font-bold tracking-wide wow fadeInDown" data-wow-delay="0.3s">
                Soporte</h2>
        </div>

        <div class="flex flex-wrap contact-form-area wow fadeInUp" data-wow-delay="0.4s">
            <div class="w-full md:w-1/2">
                <div class="ml-3 md:ml-12 wow fadeIn">
                    <img src="./views/assets/img/orionsystem/soporte.png" alt="Logo">
                </div>
            </div>

            <div class="w-full md:w-1/2">
                <div class="contact wow fadeInLeft">

                    <form>
                        <div class="flex flex-wrap">
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <div id="frm_name">
                                        <input type="text" class="form-input rounded-full" id="name" name="name"
                                            placeholder="Nombre (requerido)" required
                                            data-error="Por favor, ingrese el nombre">
                                        <div class="invalid-feedback rounded-full shadow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                <div class="mx-3">
                                    <div id="frm_email">
                                        <input type="email" placeholder="Email (requerido)" id="email"
                                            class="form-input rounded-full" name="email" required
                                            data-error="Por favor, ingrese el correo">
                                        <div class="invalid-feedback rounded-full shadow"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="w-full">
                                <div class="mx-3">
                                    <div id="frm_school">
                                        <input type="text" placeholder="Establecimiento (requerido)" id="school"
                                            class="form-input rounded-full" name="school"
                                            data-error="Por favor, ingrese el establecimiento">
                                        <div class="invalid-feedback rounded-full shadow">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="w-full">
                                <div class="mx-3">
                                    <label for="asunto" class="mx-3">Asunto</label>
                                    <select name="asunto" id="asunto" class="form-input rounded">
                                        <option value="salas">Salas Interactivas</option>
                                        <option value="redes">Conectividad y Redes</option>
                                        <option value="carro">Carro Interactivo</option>
                                        <option value="magicbox">Magic Box</option>
                                        <option value="plataforma">Plataforma Educativa</option>
                                        <option value="eda">EDA</option>
                                        <option value="dcl">DCL</option>
                                        <option value="inedu">INEDU</option>
                                    </select>

                                </div>
                            </div>
                            <div class="w-full">
                                <div class="mx-3">
                                    <textarea class="form-input rounded" name="mensaje" placeholder="Mensaje"
                                        id="mensaje" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="submit-button mx-3 ">
                                    <button style="background-color:#1e40af;" class="btn" onclick="enviar();"
                                        type="button"> Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Support Section End -->