<header id="header" class="header sticky-top bg-white shadow-sm">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between py-2">

      <!-- Logo -->
      <a href="{{ route('website.index') }}" class="logo d-flex align-items-center gap-2">
        <img src="assets/img/wplogo.png" alt="Logo" height="50">
      </a>

      <!-- Navigation -->
      <nav id="navmenu" class="navmenu d-flex align-items-center">
        <ul class="d-flex list-unstyled m-0 gap-4">
          <li><a href="{{ route('website.index') }}" class="active">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="{{ route('website.team') }}">Équipe</a></li>
          <li><a href="{{ route('website.contact') }}">Contact</a></li>
          <li><a href="{{ route('website.job') }}">Recrutements</a></li>
        </ul>
        <button class="mobile-nav-toggle d-xl-none border-0 bg-transparent" aria-label="Menu">
          <i class="bi bi-list fs-3"></i>
        </button>
      </nav>

    </div>
  </header>
