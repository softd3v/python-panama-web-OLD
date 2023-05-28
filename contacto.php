<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Python Panama | Contacto</title>

    <meta name="keywords" content="Python Panama" />
    <meta name="description" content="Comunidad Python Panama" />
    <meta name="author" content="pythonpanama.org" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />

    <!-- Web Fonts  -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400"
        rel="stylesheet" type="text/css" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="vendor/animate/animate.min.css" />
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css" />
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/theme-elements.css" />
    <link rel="stylesheet" href="css/theme-blog.css" />
    <link rel="stylesheet" href="css/theme-shop.css" />

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" />
    <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css" />
    <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css" />

    <!-- Demo CSS -->

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script>
</head>

<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500}">
    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="body">
        <?php include 'header.php' ?>



        <div role="main" class="main">

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <!-- <div id="googlemaps" class="google-map mt-0" style="height: 500px;"></div> -->
            <!-- Google Map
		============================================= -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2020982.726150553!2d-81.22678175092908!3d8.378837343393988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa61583c8be2be3%3A0x79eee04d1fa59bcf!2sPanama!5e0!3m2!1sen!2spa!4v1676834367257!5m2!1sen!2spa"
                width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="container">

                <div class="row py-4">
                    <div class="col-lg-6">

                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="200"><strong
                                    class="font-weight-extra-bold">Ponte</strong> En Contacto</h2>
                        </div>
                        <!-- <div class="overflow-hidden mb-4 pb-3">
                            <p class="mb-0 appear-animation" data-appear-animation="maskUp"
                                data-appear-animation-delay="400">No dudes en escribirnos.</p>
                        </div> -->

                        <!-- <form id="contactForm" class="contact-form" action="php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                <strong>Éxito!</strong> Su mensaje ha sido enviado a nosotros.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                <strong>Error!</strong> Hubo un error al enviar su mensaje.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-dark text-2">Nombre Completo</label>
                                    <input type="text" value="" data-msg-required="Por favor, escriba su nombre."
                                        maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-dark text-2">Email</label>
                                    <input type="email" value=""
                                        data-msg-required="Por favor introduzca su correo electrónico."
                                        data-msg-email="Por favor, introduce una dirección de correo electrónico válida."
                                        maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="font-weight-bold text-dark text-2">Asunto</label>
                                    <input type="text" value="" data-msg-required="Por favor ingrese el asunto."
                                        maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="required font-weight-bold text-dark text-2">Mensaje</label>
                                    <textarea maxlength="5000" data-msg-required="Por favor ingrese su mensaje."
                                        rows="8" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Enviar mensaje" class="btn btn-primary btn-modern"
                                        data-loading-text="Cargando...">
                                </div>
                            </div>
                        </form> -->

                    </div>
                    <div class="col-lg-6">

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                            <!-- <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4> -->
                            <ul class="list list-icons list-icons-style-2 mt-2">
                                <!-- <li><i class="fas fa-map-marker-alt top-6"></i> <strong
                                        class="text-dark">Address:</strong> 1234 Street Name, City Name, United States
                                </li> -->
                                <!-- <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123)
                                    456-789</li> -->
                                <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a
                                        href="mailto:contacto@pythonpanama.org">contacto@pythonpanama.org</a></li>
                            </ul>
                        </div>

                        <!-- <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                            <h4 class="pt-5">Business <strong>Hours</strong></h4>
                            <ul class="list list-icons list-dark mt-2">
                                <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                                <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                                <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                            </ul>
                        </div> -->

                        <!-- <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                        <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->

                    </div>

                </div>

            </div>

        </div>
        <?php include 'footer.php' ?>
    </div>

    <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/common/common.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
</body>

</html>