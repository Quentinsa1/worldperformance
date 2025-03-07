 <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('website.index') }}" class="logo d-flex align-items-center">
        <img src="assets/img/wplogo.png" alt="">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('website.index') }}" class="active">Acceuil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="{{ route('website.team') }}">Équipe</a></li>
          <li><a href="{{ route('website.contact') }}">Contact</a></li>
          <li><a href="{{ route('website.job') }}">Recrutements</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>