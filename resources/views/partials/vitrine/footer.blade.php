<footer id="footer" class="footer light-background">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">À propos de nous</h3>
            <p class="mb-4">
                WP est un cabinet spécialisé dans la formation et la consultation
                dans les domaines de l’audit, la fiscalité, le conseil ainsi que les
                services comptables et juridiques. Présent sur le territoire béninois
                nous nous appuyons sur l’expertise et le professionnalisme de nos
                collaborateurs et partenaires afin d’accompagner les entreprises à
                chaque étape de leur déveleppement.
            </p>

          </div>
        </div>
        <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
          <div class="widget">
            <h3 class="widget-heading">Liens</h3>
            <ul class="list-unstyled float-start me-5">
              <li><a href="{{ route('website.index') }}">Acceuil</a></li>
              <li><a href="#about">À propos</a></li>
              <li><a href="#services">Services</a></li>
            </ul>
            <ul class="list-unstyled float-start">
              <li><a href="{{ route('website.team') }}">Équipe</a></li>
              <li><a href="{{ route('website.contact') }}">Contact</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">

        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5">
          <div class="widget">
            <h3 class="widget-heading">Réseaux sociaux</h3>
            <ul class="list-unstyled social-icons light mb-3">
              <li>
                <a href="#"><span class="bi bi-facebook"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-linkedin"></span></a>
              </li>
              <li>
                <a href="#"><span class="bi bi-google"></span></a>
              </li>
            </ul>
          </div>

          <div class="widget">
            <div class="footer-subscribe">
              <h3 class="widget-heading">Newsletter</h3>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="mb-2">
                  <input type="text" class="form-control" name="email" placeholder="Entrer votre email">

                  <button type="submit" class="btn btn-link">
                    <span class="bi bi-arrow-right"></span>
                  </button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
        By <a href="https://bootstrapmade.com/">World Performance</a>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
