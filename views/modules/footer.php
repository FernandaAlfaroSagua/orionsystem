<!-- Footer Section Start -->
<footer id="footer" class="bg-gray-800 py-16">
    <div class="container">
        <div class="flex flex-wrap justify-center">
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp " data-wow-delay="0.2s">
                <div class="mx-3 flex justify-center">

                    <div class="footer-logo mb-3">
                        <img src="./views/assets/img/orionsystem/logo.png" alt="">
                    </div>
                </div>
                <div class="mx-3 flex justify-center">

                    <div class="footer-logo mb-3">
                        <img src="./views/assets/img/orionsystem/convenio.png" alt="">
                    </div>
                </div>

            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-2/4 wow fadeInUp text-center" data-wow-delay="0.4s">
                <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Datos de la empresa</h3>
                    <ul>
                        <li><a href="https://www.google.cl/maps/place/R%C3%ADo+Andali%C3%A9n+3470,+Coquimbo/@-29.963629,-71.3074038,17z/data=!3m1!4b1!4m5!3m4!1s0x9691c96eaa73235d:0x6db5d6e056779ca3!8m2!3d-29.9636892!4d-71.3051821"
                                class="footer-links"><i class="fa-solid fa-location-dot"></i> Rio Andalién #3470,
                                Coquimbo - Chile</a></li>
                        <li><a href="tel:+56512359390" class="footer-links"><i class="fa-solid fa-phone"></i> Fono: +56
                                51 - 2359390</a></li>
                        <li><a href="mailto:contacto@orionsystem.cl" class="footer-links"> <i
                                    class="fa-solid fa-envelope"></i>
                                contacto@orionsystem.cl</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 wow fadeInUp text-center" data-wow-delay="0.8s">
                <div class="mx-3 mb-8">
                    <h3 class="font-bold text-xl text-white mb-5">Encuentranos en</h3>

                    <ul class="social-icons flex justify-center">
                        <li class="mx-2">
                            <a href="https://www.facebook.com/OrionSystemLTDA/" class="footer-icon hover:bg-indigo-500">
                                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="https://mobile.twitter.com/orionsystemltda" class="footer-icon hover:bg-blue-400">
                                <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="footer-icon hover:bg-red-500">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="https://www.linkedin.com/company/orionsystem/about/"
                                class="footer-icon hover:bg-indigo-600">
                                <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->


<!-- Go to Top Link -->
<a href="#"
    class="back-to-top w-10 h-10 fixed bottom-0 right-0 mb-5 mr-5 flex items-center justify-center rounded-full bg-blue-800 text-white text-lg z-20 duration-300 hover:bg-blue-100">
    <i class="fa-solid fa-arrow-up"></i>
</a>

<!-- All js Here -->
<script src="./views/assets/js/wow.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!-- <script src="./views/assets/js/contact-form.js"></script> -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="./views/assets/js/jquery.min.js"></script>
<script src="./views/assets/js/jquery.easing.min.js"></script>
<?php
require_once "./controllers/ViewsController.php";

$vc = new ViewsController();
$viewsR=$vc->get_views_controller();

print_r($viewsR);

if($viewsR=="./views/contents/soporte.php"){
    require_once "./views/modules/support-script.php";
}
else{
    require_once "./views/modules/contact-script.php";
}

?>
<script src="./views/assets/js/main.js"></script>
</body>

</html>