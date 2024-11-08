<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicons -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>

    <body>
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Nos offres</h2>
                    <p>Chez Guard AI, nous offrons des services adaptés aux besoins de chacun.</p>
                </div>
        
                <div class="row">
                    <!-- Version gratuite -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box">
                            <h3>Version gratuite</h3>
                            <h4>0<sup>€</sup><span>par mois</span></h4>
                            <ul>
                                <li>Profitez des analyses gratuites</li>
                                <li>Obtenez des conseils d'utilisations</li>
                                <li>Comparez les résultats entre eux</li>
                                <li class="na">Testez avec vos propres données</li>
                                <li class="na">Ayez des retours et des correctifs</li>
                            </ul>
                            <a href="{{ route('reports.index') }}" class="buy-btn">Commencez</a>
                        </div>
                    </div>
        
                    <!-- Version premium -->
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3>Version premium</h3>
                            <h4>9<sup>€</sup><span>par mois</span></h4>
                            <ul>
                                <li>Profitez des analyses gratuites</li>
                                <li>Obtenez des conseils d'utilisations</li>
                                <li>Comparez les résultats entre eux</li>
                                <li>Testez avec vos propres données</li>
                                <li class="na">Ayez des retours et des correctifs</li>
                            </ul>
                            <form action="{{ route('payment.redirect', ['amount' => 900]) }}" method="GET">
                                <input type="hidden" name="role" value="2">
                                <button type="submit" class="buy-btn">
                                    Commencez
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Version entreprise -->
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <h3>Version entreprise</h3>
                            <h4>29<sup>€</sup><span>par mois</span></h4>
                            <ul>
                                <li>Profitez des analyses gratuites</li>
                                <li>Obtenez des conseils d'utilisations</li>
                                <li>Comparez les résultats entre eux</li>
                                <li>Testez avec vos propres données</li>
                                <li>Ayez des retours et des correctifs</li>
                            </ul>
                            <form action="{{ route('payment.redirect', ['amount' => 2900]) }}" method="GET">
                                <input type="hidden" name="role" value="3">
                                <button type="submit" class="buy-btn">
                                    Commencez
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Pricing Section -->

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

    </html>
</x-app-layout>
