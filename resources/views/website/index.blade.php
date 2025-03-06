@extends('partials.vitrine.template')
@section('content')
<main class="main">

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="assets/img/a1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/a2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/a4.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" id="animated-text" data-aos="fade-up">Bienvenue Chez <span id="target-text">World Performance</span></span>
        </div>

            <h1 class="mb-4" data-aos="fade-up">
              WORLD PERFORMANCE all solutions
            </h1>
            <p data-aos="fade-up">
                WP réputée pour ses solutions novatrices et
                son dévouement inébranlable à l'excellence.
                Réputée pour sa fiabilité et son soutien
                inégalé à la clientèle, elle reste un précurseur,
                redéfinissant constamment les critères de
                référence dans son secteur.
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="#" class="btn btn-get-started">Faire une demande </a>
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section light-background">

      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="assets/img/b1.jpg" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">AMBITION-VISION-MISSION</span>
                <h2 class="content-title text-start">
                  <strong>Ambition:</strong> WP est déterminé à montrer la voieen
                  offrant des solutions inventives qui
                  stimulent l'efficacité des entreprises et
                  favorisent la croissance des clients.
                </h2>
                <p class="lead">
                    <h2 class="content-title text-start">
                        <strong>Vision:</strong> WP se veut être un véritable fertilisateur
                        d’entreprise, pour la croissance et le
                        développement des PME Africaines.
                      </h2>
                </p>
                <p class="mb-5">
                    <h2 class="content-title text-start">
                        <strong>Mission:</strong> WP est à l’écoute des entreprises, les
                        PME en particulier, afin d’apporter des
                        solutions idoines et innovantes à
                        l’amélioration de leur performance
                      </h2>
                </p>
                <p>
                  <a href="#" class="btn-get-started">En Savoir plus</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About 2 Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">
                     <h2 style="text-align: center; padding-bottom:100px">Nos Services</h2>
      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>Ingénierie financière & Gestion des
                    risques</h3>
                <p>élaboration de plans d'affaires, la formation, le conseil en financement, la structuration, l'audit financier, et le pilotage de la performance.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>Conseils et Ingénierie informatique</h3>
                <p>audit des systèmes et de la sécurité, la gestion de projets et des risques SI, l’intégration d’infrastructures, le développement d’applications et de sites web, ainsi que la formation et l’accompagnement technologique.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>Conseil comptable et fiscal</h3>
                <p>organisation et le renforcement comptable, la comptabilité analytique, l’optimisation et l’audit fiscal, ainsi que la gestion des déclarations et la défense des intérêts en cas de contrôle fiscal.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="row gy-4 justify-content-center">

            <div class="col-lg-3">
              <div class="services-item" data-aos="fade-up" data-aos-delay="100">
                <div class="services-icon">
                  <i class="bi bi-command"></i>
                </div>
                <div>
                  <h3>Assistance juridique</h3>
                  <p>Separated they live in Bookmarksgrove right at the coast</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
                <div class="services-item" data-aos="fade-up">
                  <div class="services-icon">
                    <i class="bi bi-bullseye"></i>
                  </div>
                  <div>
                    <h3>Assistance RH</h3>
                    <p>conseils, consultations, secrétariat juridique, création et restructuration de sociétés, rédaction d’actes et contrats, audits juridiques, formalités administratives et d’immigration.</p>
                  </div>
                </div>
              </div>
            <div class="col-lg-3">
              <div class="services-item" data-aos="fade-up" data-aos-delay="200">
                <div class="services-icon">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <div>
                  <h3>Marketing & Communication</h3>
                  <p>stratégies en ligne (sites web, réseaux sociaux, contenu, publicité mobile) et hors ligne (radio, affichage, sponsoring), ainsi que des solutions de création graphique, design, rédaction, photographie et vidéo.</p>
                </div>
              </div>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-lg-3">
                  <div class="services-item" data-aos="fade-up">
                    <div class="services-icon">
                      <i class="bi bi-bullseye"></i>
                    </div>
                    <div>
                      <h3>Externalisation de la fonction audit interne</h3>
                      <p> renforcer les objectifs organisationnels, la gouvernance, la gestion des risques, les processus de décision, la surveillance, ainsi que la réputation et la crédibilité auprès des parties prenantes, tout en servant l'intérêt général.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="services-item" data-aos="fade-up">
                      <div class="services-icon">
                        <i class="bi bi-bullseye"></i>
                      </div>
                      <div>
                        <h3>Formations</h3>
                        <p> WP-ACADEMY: Elle est une plateforme
                            d'excellence et de formation dans tous les
                            domaines de la gestion des entreprises et des
                            organisations.</p>
                      </div>
                    </div>
                  </div>


              </div>

          </div>
      </div>
    </section><!-- /Services Section -->
    <section id="stats" class="stats section light-background">

      <div class="container">

        <div class="row gy-4 justify-content-center">

          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="assets/img/img_v_1.jpg" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle" id="about">Pourquoi nous?</span>
            <h2 class="content-title">World Perfomance</h2>
            <p class="lead">
             <strong>WP</strong>  est un cabinet spécialisé dans la formation et la consultation
              dans les domaines de l’audit, la fiscalité, le conseil ainsi que les
              services comptables et juridiques. Présent sur le territoire béninois
              nous nous appuyons sur l’expertise et le professionnalisme de nos
              collaborateurs et partenaires afin d’accompagner les entreprises à
              chaque étape de leur déveleppement.
            </p>
            <p class="lead">
             <strong>Qualités des Leaders:</strong> Diriger avec une
              vision et un
              objectif-Assurer une
              Communication
              transparente-Veiller au
              respect des
              normes-Construire des
              équipes
              performantes et
              résilientes-S'adapter au
              changement
            </p>

          </div>

        </div>

      </div>
    </section><!-- /Stats Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <h2>Ils nous font confiance</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/eigb.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Eigb</h3>
                    <blockquote>
                      <p>
                        “École de design homologuée en Afrique, offrant des formations pratiques en Graphisme, Vidéo et Développement Web pour jeunes et professionnels. ”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/esdam.png" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">esdam</h3>
                    <blockquote>
                      <p>
                        “ESDAM est une école de formation professionnelle située à Cotonou, spécialisée dans le domaine de la mode. ”
                      </p>
                    </blockquote>
                  </div>
                </div>


              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
