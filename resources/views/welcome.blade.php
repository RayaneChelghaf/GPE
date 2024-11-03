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
    
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
    
          <h1 class="logo me-auto"><a href="/">GUARD AI</a></h1>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link  active" href="/">Accueil</a></li>
              <li><a class="getstarted " href="{{ route('dashboard') }}">Commencez</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </header><!-- End Header -->
    
      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
    
        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>Protégez vous face aux discriminations de l'IA</h1>
              <h2>Profitez d'une transparence pour mieux comprendre et rectifier les biais discriminatoirs des systèmes d'IA.<h2>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <a href="{{ route('dashboard') }}" class="btn-get-started scrollto">Commencez</a>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>
    
      </section><!-- End Hero -->
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">
      
            <div class="section-title">
                <h2>Services</h2>
                <p>Chez Guard AI, nous nous engageons fermement envers la responsabilité et l'éthique dans le développement et l'utilisation de l'intelligence artificielle. Nous visons à créer un environnement où l'IA est à la fois performante, équitable et transparente.</p>
            </div>
      
            <div class="row">
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Transparence pour les utilisateurs</a></h4>
                        <p>Notre application met un fort accent sur la transparence, car nous croyons qu'il est essentiel d'expliquer clairement nos méthodes de test, les types de données utilisées, et notre vision d'une intelligence artificielle éthique.</p>
                    </div>
                </div>
      
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Un moyen de connaître les biais</a></h4>
                        <p>Guard AI propose aux utilisateurs de demander des tests pour identifier d'éventuels biais discriminatoires dans les systèmes d'IA. Cette démarche vise à prévenir et à corriger les biais potentiellement présents.</p>
                    </div>
                </div>
      
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Un moyen de se prémunir des biais</a></h4>
                        <p>Notre expertise nous permet également d'accompagner des entreprises qui voudraient s'assurer que leurs systèmes d'IA sont neutres ou bien corriger certains biais discriminatoires.</p>
                    </div>
                </div>
            </div>
      
        </div>
    </section>
    <!-- End Team Section -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Equipe</h2>
            <p>Notre équipe se compose de trois développeurs juniors passionnés par le développement de solutions web et d'applications centrées sur l'intelligence artificielle. Nous nous engageons à créer des outils performants permettant de détecter et corriger les biais dans les systèmes d'IA, garantissant ainsi une utilisation plus équitable et transparente de ces technologies.</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/leonard.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Léonard Navatte</h4>
                  <span>Développeur Back-End</span>
                  <p>Expert en architecture logicielle et en traitement des données, Léonard est responsable du développement de notre outil d'analyse des systèmes d'IA, en s'assurant qu'il soit capable de détecter et corriger les biais algorithmiques.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/ulysse.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Ulysse Yadan</h4>
                  <span>Développeur Fullstack</span>
                  <p>Chargé du développement de notre site vitrine, s'assurant que tout fonctionne parfaitement et que l'expérience utilisateur soit agréable et intuitive.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="assets/img/team/rayane.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Rayane Chelghaf</h4>
                  <span>Développeur Fullstack & Designer</span>
                  <p>Développer front-end responsable de l’aspect visuel et l'ergonomie de nos projets, s'assurant que chaque élément ergonomique et fonctionnel.</p>
                </div>
              </div>
            </div>
        </div>
      </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Nos offres</h2>
            <p>Chez Guard AI, nous offrons des services adaptés aux besoins de chacun, que vous soyez un utilisateur individuel, une entreprise, ou un organisme à la recherche de solutions pour améliorer la transparence et corriger les biais dans les systèmes d'intelligence artificielle.</p>
          </div>

          <div class="row">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>Version gratuite</h3>
                <h4>0<sup>€</sup><span>par mois</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Profitez des analyses gratuites</li>
                  <li><i class="bx bx-check"></i> Obtenez des conseils d'utilisations</li>
                  <li><i class="bx bx-check"></i> Comparez les résultats entre eux</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Testez avec vos propres données</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Ayez des retours et des correctifs de vos systèmes d'IA</span></li>
                </ul>
                <a href="{{ route('charge.store') }}" class="buy-btn">Commencez</a>
              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3>Version premium</h3>
                <h4>9<sup>€</sup><span>par mois</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Profitez des analyses gratuites</li>
                  <li><i class="bx bx-check"></i> Obtenez des conseils d'utilisations</li>
                  <li><i class="bx bx-check"></i> Comparez les résultats entre eux</li>
                  <li><i class="bx bx-check"></i> Testez avec vos propres données</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Ayez des retours et des correctifs de vos systèmes d'IA</span></li>
                </ul>
                <a href="{{ route('charge.store') }}" class="buy-btn">Commencez</a>

              </div>
            </div>
  
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3>Version entreprise</h3>
                <h4>29<sup>€</sup><span>par mois</span></h4>
                <ul>
                  <li><i class="bx bx-check"></i> Profitez des analyses gratuites</li>
                  <li><i class="bx bx-check"></i> Obtenez des conseils d'utilisations</li>
                  <li><i class="bx bx-check"></i> Comparez les résultats entre eux</li>
                  <li><i class="bx bx-check"></i> Testez avec vos propres données</li>
                  <li><i class="bx bx-check"></i> Ayez des retours et des correctifs de vos systèmes d'IA</li>
                </ul>
                <a href="{{ route('charge.store') }}" class="buy-btn">Commencez</a>
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
  