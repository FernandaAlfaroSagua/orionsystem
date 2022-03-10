<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <?php
    require_once("views/contents/partnership.php")
    ?>
    <!-- Navbar Start -->
    <div class="navigation fixed top-0 left-0 w-full z-30 duration-300 relative">
        <div class="container">
            <nav class="navbar py-2 navbar-expand-lg flex justify-between items-center relative duration-300">
                <div class="absolute right-0 z-30">
                    <?php
        if (isset($_GET['error'])) {

            ?>

                    <div class="mb-2 hideMe">
                        <div class="my-3 error py-6 px-5 rounded shadow">
                            Por favor, complete el formulario y vuelva a intentarlo.
                        </div>
                    </div>

                    <?php
        }

        if (isset($_GET['success'])) {

        ?>

                    <div class="my-3 hideMe">

                        <div class="success py-6 px-5  rounded shadow">
                            Gracias! Tu mensaje ha sido enviado.
                        </div>
                    </div>

                    <?php
        }

        ?>
                </div>
                <a class="navbar-brand mr-5" href="./">
                    <img src="./views/assets/img/orionsystem/logo-footer.png" alt="Logo">
                </a>
                <button class="navbar-toggler focus:outline-none block lg:hidden" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse hidden lg:block duration-300 shadow absolute top-100 left-0 mt-full bg-white z-20 px-5 py-3 w-full lg:static lg:bg-transparent lg:shadow-none"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto justify-center items-center lg:flex">
                        <li class="nav-item">
                            <a class="page-support" href="./">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-support" href="./#corporative">Corporativo</a>
                        </li>
                        <li class="nav-item solutions relative">
                            <a class="page-support">Soluciones <i class="fa-solid fa-angle-down"></i></a>
                            <ul class="bg-white p-2 rounded shadow solutions-dropdown absolute">
                                <li class="nav-item">
                                    <a class="page-support" href="./salas-interactivas">Salas Interactivas Edutick</a>
                                </li>
                                <li class="nav-item edutick relative">
                                    <a class="page-support">Plataforma Edutick <i
                                            class="fa-solid fa-angle-right"></i></a>
                                    <ul class="bg-white p-2 sm:block shadow edutick-dropdown bg-blue-100 rounded">
                                        <li class="nav-item">
                                            <a class="page-support" target="_blank"
                                                href="https://dcl.edutick.cl/">DCL</a>
                                            <hr class="dcl-color">

                                        </li>
                                        <li class="nav-item">
                                            <a class="page-support" target="_blank"
                                                href="https://eda.edutick.cl/login/docente">EDA</a>
                                            <hr class="eda-color">

                                        </li>
                                        <li class="nav-item">
                                            <a class="page-support" target="_blank"
                                                href="https://inedu.edutick.cl/">INEDU</a>
                                            <hr class="inedu-color">

                                        </li>
                                        <li class="nav-item">
                                            <a class="page-support" target="_blank"
                                                href="https://simce-online.cl/">SIMCE</a>
                                            <hr class="simce-color mb-2">

                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="page-support" href="./conectividad-y-redes">Conectividad y Redes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-support" href="./e-blocks">E-Blocks</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-support" href="./licencias">Licencias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-support" href="./catalogo">Catálogo de productos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="page-support" href="./#contact">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="page-support" href="./soporte">Soporte</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</header>
<!-- Header Area wrapper End -->